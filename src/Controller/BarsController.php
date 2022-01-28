<?php

namespace App\Controller;

session_start();

use App\Helpers\EntityManagerHelper as Em;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use App\Entity\Bar;


class BarsController
{


    public function List()
    {

        $entityManager = Em::getEntityManager();
        $repository = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Bar"));

        $Bars = $repository->findBy(["owner_id" => $_SESSION['id']]);

        foreach ($Bars as $Bar) {

            print($Bar->getName());
        }
    }
}
