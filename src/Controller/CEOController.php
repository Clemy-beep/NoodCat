<?php

namespace App\Controller;

use Exception;
use App\Entity\CEO;
use App\Helpers\EntityManagerHelper;
use App\Models\AbstractRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class CeoController
{
    public static function createCeo()
    {
        $em = EntityManagerHelper::getEntityManager();
        //$_POST = array_map('trim', array_map('strip_tags', $_POST));
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("invalid email address", 03);
            die();
        }
        CeoController::verifyMail($_POST['email']);
        $hashpwd = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $ceo = new CEO($_POST['firstname'], $_POST['lastname'], $_POST['email'], $hashpwd);
        $em->persist($ceo);
        try {
            $em->flush();
            echo "CEO successfully created.";
        } catch (\Throwable $th) {
            $msg = $th->getMessage();
            $code = $th->getCode();
            echo "Error $code : $msg";
        }
    }
    public static function verifyMail($email)
    {
        $em = EntityManagerHelper::getEntityManager();
        $ceoRepository = new AbstractRepository($em, new ClassMetadata("App\Entity\CEO"));
        $ceo = $ceoRepository->findBy(["email" => $email]);
        var_dump($ceo);

        if (!isset($ceo)) {
            throw new Exception("Email is already taken", 04);
        }
    }
}
