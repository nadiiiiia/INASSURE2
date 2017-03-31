<?php
/**
 * Created by PhpStorm.
 * User: ELHEM
 * Date: 21/03/2016
 * Time: 15:33
 */
namespace AppBundle\Controller;

use Form\IdentityPictureType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     *
     * @Route("user/profile/{id}/", requirements={"id" = "\d+"}, name="profile_user")
     *
     */
    public function ProfileAction($id)
    {
        $userManager = $this->get('app.user_manager');
        $usr = $userManager->getRepository()->findOneById($id);
        $infos = $userManager->getRepository()->findById($id);
        return $this->render('AppBundle:User:ProfilUser.html.twig', array('infos' => $infos, 'user' => $usr));
    }


    /**
     * @Route("/user/fiche/" , name="fiche_user"))
     *
     */
    public function FicheAction(Request $request)
    {
        $userManager = $this->get('app.user_manager');
        $usr = $this->getUser();
        $form = $this->createForm(new IdentityPictureType(), $usr);
        if ($form->handleRequest($request)->isValid()) {
            {
                $usr->uploadProfilePicture();
                $userManager->persistAndFlush($usr);
                $this->redirect($this->generateUrl('fiche_user'));
            }
        }
        $infos = $userManager->getRepository()->findById($this->getUser());
        return $this->render('AppBundle:User:FicheUser.html.twig', array('infos' => $infos, 'user' => $usr,
            'form' => $form->createView()));
    }

    /**
     * @Route("/user/list/{role}", name="list_user")
     *
     */
    public function ListAction($role, Request $request)
    {
        $userManager = $this->get('app.user_manager');
        if ($role == 'supervisor') {
            $users = $userManager->getRepository()->findByRole('ROLE_SUPERVISOR');
        } elseif ($role == 'rh') {
            $users = $userManager->getRepository()->findByRole('ROLE_RH');
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $users, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );
        return $this->render('AppBundle:User:ListUser.html.twig', array('pagination' => $pagination, 'name' => $this->get('translator')->trans($role)));
    }

    /**
     *
     * @Route("user/delete/{id}/", requirements={"id" = "\d+"}, name="delete_user", options={"expose":true})
     */
    public function deleteAction($id)
    {
        $request = $this->getRequest();
        if (!$request->isXmlHttpRequest()) {
            throw new AccessDeniedException('Ajax Request only.');
        }
        $jsonResponse = new JsonResponse();
        $userManager = $this->get('app.user_manager');
        $user = $userManager->getRepository()->findOneBy(
            array('id' => $id));
        $this->getDoctrine()->getEntityManager()->remove($user);
        $userManager->Flush();
        $jsonResponse->setData(array("success" => true));
        return $jsonResponse;
    }

    /**
     * @Route("/trainee/list", name="list_trainee")
     *
     */
    public function listtraineeAction( Request $request)
    {
        $userManager = $this->get('app.user_manager');
        $users = $userManager->getRepository()->findByRole('ROLE_INTERN');
        $paginator = $this->get('knp_paginator');
        $role='trainee';
        $trainee = $paginator->paginate(
            $users, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );
        return $this->render('AppBundle:User:ListTrainee.html.twig', array('trainee' => $trainee, 'name' => $this->get('translator')->trans($role)));
    }

    /**
     * @Route("/trainee/{supervisor}", name="my_trainee")
     *ww
     */
    public function traineeAction($supervisor, Request $request)
    {
        $internshipManager = $this->get('app.internship_manager');
        $internship= $internshipManager->getRepository()->findBy(array('supervisor'=>$supervisor));
        $role='trainee';
        $paginator = $this->get('knp_paginator');
        $internships = $paginator->paginate(
            $internship, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );
        return $this->render('AppBundle:User:Mytrainee.html.twig', array('internship' => $internships, 'name' => $this->get('translator')->trans($role)));
    }
}