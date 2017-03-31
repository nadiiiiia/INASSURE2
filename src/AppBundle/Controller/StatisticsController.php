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

class StatisticsController extends Controller
{
    /**
     * @Route("/statistics" , name="statistics_view")
     *
     */
    function viewAction(request $request)
    {
        return $this->render('AppBundle:Meet:Statistics.html.twig');
    }

    /**
     * @Route("/statistics/data" , name="statistics_data")
     *
     */
    function dataAction(request $request)
    {
        $meetManager = $this->get('app.meet_manager');
        $meets = $meetManager->getRepository()->findAll();
        $output = array();

        foreach ($meets as $meet) {
            // $oneMeet = array();

            // $oneMeet['id'] = $meet->getId();
            // $oneMeet['nom'] = $meet->getNom();
            // $oneMeet['surname'] = $meet->getSurname();
            // $oneMeet['adresse'] = $meet->getAdresse();
            // $oneMeet['ville'] = $meet->getVille();
            // $oneMeet['treatment'] = $meet->getCmkSfieldfHTreatment();

            $output[] = $meet->getCmkSfieldfHTreatment();
        }

        $response = new JsonResponse();
        return $response->setData($output);
    }
}