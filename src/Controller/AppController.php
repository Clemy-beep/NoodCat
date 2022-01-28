<?php

namespace App\Controller;


class AppController
{
    public static function index()
    {
        include './src/View/Homepage.php';
    }

    public static function notFound()
    {
        include './routes/404.html';
    }
    public static function signUpForm()
    {
        include '/home/stagiaire16/Documents/NoodCat/src/View/Signup.php';
    }
}
