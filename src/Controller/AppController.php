<?php

namespace App\Controller;

use Router\Router;

class AppController
{
    public static function index()
    {
        include './src/View/Homepage.php';
    }

    public static function notFound(){
        include './routes/404.html';
    }
}
