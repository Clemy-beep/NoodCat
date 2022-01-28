<?php

namespace App\Controller;

use Exception;
use App\Controller\UserController;
use App\Controller\CashierController;
use App\Controller\CeoController;


class PersonController
{
    public static function signUp()
    {
        include './src/View/Signup.php';

        if (isset($_POST["personType"])) {
            if ($_POST["personType"] === "cashier") {
                var_dump($_POST);
                CashierController::createCashier();
            }
            if ($_POST["personType"] === "client") {
                UserController::createUser();
            }
            if ($_POST['personType'] === "ceo") {
                CeoController::createCeo();
            }
        } 
    }
}
