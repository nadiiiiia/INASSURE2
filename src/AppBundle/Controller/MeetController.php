<?php

/**
 * Created by PhpStorm.
 * User: ELHEM
 * Date: 21/03/2016
 * Time: 15:33
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Meet;
use AppBundle\Entity\File;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Form\MeetType;
use Form\FileType;

class MeetController extends Controller {

    /**
     * @Route("/meet/upload/" , name="upload_meets")
     *
     */
    function uploadAction(request $request) {

        $file = new File();
        ;
        $form = $this->createForm(new FileType(), $file);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $file->upload();
            $i = 0;
            $user = $this->get('security.context')->getToken()->getUser();

            if (($handle = fopen($file->getAbsolutePath(), "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 10000, ";")) !== FALSE) {
                    $dataTmp = [];
                    foreach ($data as $str) {
                        $dataTmp[] = mb_convert_encoding($str, 'UTF-8', 'US-ASCII');
                    }
                    $data = $dataTmp;
                    if ($i > 0) {
                        $meet = new Meet();
                        $meet->setNom($data[10]);
                        $meet->setSurname($data[11]);
                        $meet->setTel1($data[1]);
                        $meet->setTel2($data[2]);
                        $meet->setAge((int)$data[12]);
                        $meet->setAdresse($data[21]);
                        $meet->setAgeConjoint((int)$data[17]);
                        $meet->setVille($data[22]);
                        $meet->setNpa($data[23]);
                        $meet->setSituationFamilialeModif($data[42]);
                        $meet->setAgentId($data[137]);
                        $meet->setCmkRdvDateCommecial($data[131]);
                        $meet->setCreatedBy($user->getUsername());
                        $meet->setUpdatedBy($user->getUsername());
                        $em->persist($meet);
                    }
                    $i++;
                }
            }

            $em->flush();
            fclose($handle);
            $meets = $this->get('app.meet_manager')->getRepository()->findAll();
           
           return $this->render('AppBundle:Meet:ListMeets.html.twig', array('meets' => $meets));
        }
        return $this->render('AppBundle:Meet:UploadMeet.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/meet/add/" , name="add_meet")
     *
     */
    function addAction(request $request) {
        $meet = new Meet();
        $form = $this->createForm(new MeetType(), $meet);
        if ($form->handleRequest($request)->isValid()) {
            $meet->setAgentId($this->getUser());
            //  $date = $form["cmkSfieldfHTreatment"]->getData();
            //  $id = $this->get('app.meet_manager')->getRepository()->getCustomerByDateHourTreatement($date);
            //if ($id != NUll) {
            $this->get('app.meet_manager')->persistAndFlush($meet);
            //}
            return $this->redirectToRoute('list_meet', array('id' => $this->getUser()->getId()));
        }
        return $this->render('AppBundle:Meet:AddMeet.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/meet/list", name="list_meet")
     *
     */
    public function ListAction(Request $request) {
        $meetManager = $this->get('app.meet_manager');
        $meets = $meetManager->getRepository()->getMeetWithDoublant();
        $paginator = $this->get('knp_paginator');
        /*$pagination = $paginator->paginate(
                $meets,$request->query->getInt('page', 1), 5);*/
        return $this->render('AppBundle:Meet:ListMeets.html.twig', array('meets' => $meets));
    }

    /**
     * @Route("/meet/import", name="import_meet")
     *
     */
    public function ImportAction() {
        $meets = $this->get('app.meet_manager')->getRepository()->findAll();
        $response = $this->render('AppBundle:Meet:ImportMeet.csv.twig', array('meets' => $meets));
        $filename = "list_rdv" . date("Y_m_d") . ".csv";
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Encoding', 'utf-8');
        $response->headers->set('Content-Disposition', 'attachment; filename=' . $filename);
        return $response;
    }

    /**
     *
     * @Route("meet/delete/{id}/", requirements={"id" = "\d"}, name="delete_meet", options={"expose":true})
     */
    public function deleteAction($id) {
        $request = $this->getRequest();
        if (!$request->isXmlHttpRequest()) {
            throw new AccessDeniedException('Ajax Request only.');
        }
        $jsonResponse = new JsonResponse();
        $meetManager = $this->get('app.meet_manager');
        $meet = $meetManager->getRepository()->findOneBy(
                array('id' => $id));
        $this->getDoctrine()->getEntityManager()->remove($meet);
        $meetManager->Flush();
        $jsonResponse->setData(array("success" => true));
        return $jsonResponse;
    }

    /**
     * @Route("/meet/edit/{id}" , name="edit_meet")
     *
     */
    public function editAction($id, Request $request) {
        $meetManager = $this->get('app.meet_manager');
        $meet = $meetManager->getRepository()->find($id);
        if (!$meet) {
            throw $this->createNotFoundException(
                    'No news found for id ' . $id
            );
        }
        $form = $this->createForm(new MeetType(), $meet);
        if ($form->handleRequest($request)->isValid()) {
            $meetManager->Flush();
            return $this->redirectToRoute('list_meet', array('id' => $this->getUser()->getId()));
        }
        $build['form'] = $form->createView();
        return $this->render('AppBundle:Meet:AddMeet.html.twig', $build);
    }

    /**
     * @Route("/meet/export/{id}" , name="export_meet")
     *
     */
    public function ExportAction($id, Request $request) {

        // selecting Meets
        $meetManager = $this->get('app.meet_manager');
        $meets = $meetManager->getRepository()->find($id);
        $htmlfile = fopen(realpath(dirname(__FILE__)) . '/../Resources/views/Meet/ExportTemplate.html', "r");
        $html = fread($htmlfile, filesize(realpath(dirname(__FILE__)) . '/../Resources/views/Meet/ExportTemplate.html'));
        fclose($htmlfile);

        //giving fields
        $html = str_replace("{{NOM}}", $meets->getNom(), $html);
        $html = str_replace("{{Surname}}", $meets->getSurname(), $html);
        $html = str_replace("{{Adress}}", $meets->getAdresse(), $html);
        $html = str_replace("{{localite}}", $meets->getVille(), $html);
        $html = str_replace("{{NPA}}", $meets->getNpa(), $html);
        $html = str_replace("{{tel1}}", $meets->getTel1(), $html);
        $html = str_replace("{{dateRDV}}", $meets->getCmkRdvDateCommecial(), $html);
        $html = str_replace("{{Profession}}", $meets->getTravailleMr(), $html);
        $html = str_replace("{{NomMr}}", $meets->getNom(), $html);
        // PDF
        $dompdf = $this->get('slik_dompdf');
        $dompdf->getpdf($html);
        $dompdf->stream("myfile.pdf");
    }

}
