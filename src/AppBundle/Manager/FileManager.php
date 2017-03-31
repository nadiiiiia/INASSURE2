<?php
/**
 * Created by PhpStorm.
 * User: ELHEM
 * Date: 12/04/2016
 * Time: 10:58
 */
namespace AppBundle\Manager;

use AppBundle\Entity\File;
use Doctrine\ORM\EntityManager;
use AppBundle\Manager\BaseManager;

class FileManager extends BaseManager
{
    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function getRepository()
    {
        return $this->em->getRepository('AppBundle:File');
    }
}