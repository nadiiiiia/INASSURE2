<?php
/**
 * Created by PhpStorm.
 * User: ELHEM
 * Date: 04/04/2016
 * Time: 10:58
 */
namespace AppBundle\Manager;

use AppBundle\Entity\Meet;
use AppBundle\Manager\BaseManager;
use AppBundle\Repository\UserRepository;
use Doctrine\ORM\EntityManager;

class MeetManager extends BaseManager
{
    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function getRepository()
    {
        return $this->em->getRepository('AppBundle:Meet');
    }
}