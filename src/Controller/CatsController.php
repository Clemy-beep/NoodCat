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
        $repositoryCats = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Cat"));
        $repositoryBars = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Bar"));

        $Cats = $repositoryCats->findBy(array('Bar_id'=>$Id));
        $Bar = $repositoryBars->find((int)$Id);
        
        var_dump($Cats);
        die('---END---');

        print($Bar->getName());
        
        foreach ($Cats as $Cat) {
        
            print($Cat->getName()) ;
            
        }

    }

}