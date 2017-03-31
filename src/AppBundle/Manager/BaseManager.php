<?php
/**
 * Created by PhpStorm.
 * User: ELHEM
 * Date: 04/04/2016
 * Time: 11:03
*/
namespace AppBundle\Manager;

abstract class BaseManager
{
    public function persistAndFlush($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }
    public function Flush()
    {
        $this->em->flush();
    }
}