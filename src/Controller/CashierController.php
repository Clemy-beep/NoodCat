<?php

namespace App\Controller;

use Exception;
use App\Entity\Cashier;
use App\Helpers\EntityManagerHelper;
use App\Models\AbstractRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class CashierController
{

    public static function createCashier()
    {
        $em = EntityManagerHelper::getEntityManager();
        //$_POST = array_map('trim', array_map('strip_tags', $_POST));
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("invalid email address", 03);
        }
        CashierController::verifyCashierMail($_POST['email']);
        $hashpwd = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $client = new Cashier($_POST['lastname'], $_POST['firstname'], $_POST['email'], $hashpwd, $_POST['registration']);
        $em->persist($client);
        try {
            $em->flush();
            echo "Cashier successfully created.";
        } catch (\Throwable $th) {
            $msg = $th->getMessage();
            $code = $th->getCode();
            echo "Error $code : $msg";
        }
    }
    public static function verifyCashierMail($email)
    {
        $em = EntityManagerHelper::getEntityManager();
        $clientRepository = new AbstractRepository($em, new ClassMetadata("App\Entity\Cashier"));
        $client = $clientRepository->findBy(["email" => $email]);
        var_dump($client);
        if (!isset($client)) {
            throw new Exception("Email is already taken", 04);
        }
    }
}
