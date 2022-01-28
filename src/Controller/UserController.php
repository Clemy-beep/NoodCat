<?php

namespace App\Controller;


use Exception;
use App\Entity\Client;
use App\Helpers\EntityManagerHelper;
use App\Models\AbstractRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class UserController
{


    public static function createUser()
    {
        $em = EntityManagerHelper::getEntityManager();
        //$_POST = array_map('trim', array_map('strip_tags', $_POST));
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("invalid email address", 03);
        }
        UserController::verifyClientMail($_POST['email']);
        $hashpwd = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $client = new Client($_POST['firstname'], $_POST['lastname'], $_POST['email'], $hashpwd);
        $em->persist($client);
        var_dump($client);
        try {
            $em->flush();
            echo "Client successfully created.";
        } catch (\Throwable $th) {
            $msg = $th->getMessage();
            $code = $th->getCode();
            echo "Error $code : $msg";
        }
    }
    public static function verifyClientMail($email)
    {
        $em = EntityManagerHelper::getEntityManager();
        $clientRepository = new AbstractRepository($em, new ClassMetadata("App\Entity\Client"));
        $client = $clientRepository->findBy(["email" => $email]);
        var_dump($client);

        if (!isset($client)) {
            throw new Exception("Email is already taken", 04);
        }
    }
}
