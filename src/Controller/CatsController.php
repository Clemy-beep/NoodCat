<?php
namespace App\Controller;

session_start();

use App\Helper\EntityManagerHelper as Em;
use Doctrine\ORM\EntityRepository ;
use Doctrine\ORM\Mapping\ClassMetadata;
use App\Entity\Cat;
use App\Entity\Bar;


class CatsController{


public function List(string $Id) { 

    $entityManager = Em::getEntityManager(); 
    $repositoryCat = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Cat"));

    $Cats = $repositoryCat->findBy(array('Bar_id'=>$Id));


    foreach ($Cats as $Cat) {
    
        print($Cat->getName()) ;
    /**
     * Get the value of bar
     */ 
    public function getBar()
    {
        return $this->bar;
    }