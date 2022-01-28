<?php

namespace App\Controller;

use App\Helpers\EntityManagerHelper;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Router\Router;


class AppController
{

    const NEEDS =
    [
        'email',
        'pwd'
    ];


    public static function index()
    {
        include './src/View/Homepage.php';
    }

    public static function notFound()
    {
        include './routes/404.html';
    }

    public static function home()
    {
        include './src/View/LoggedHome.php';
    }

    public static function login()
    {

        include("./src/View/login.php");

        if (!empty($_POST)) {
            var_dump($_POST);
            foreach (self::NEEDS as $value) {

                $_POST[$value] = trim(htmlentities(strip_tags($_POST[$value])));

                if ($_POST[$value] === "") {
                    echo "error : veuillez remplir tous les champs";
                    die();
                }

                $entityManager = EntityManagerHelper::getEntityManager();
                $repository = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Person"));

                $oUser = $repository->findBy(['email' => $_POST['email']]);

                if (empty($oUser)) {
                    echo 'User not found, please create an account.';
                    die;
                }

                if (password_verify($_POST['pwd'], $oUser[0]->getPwd()) == false) {
                    echo "c'est le moment de s'inscrire ! ou alors mauvais mdp...";
                    echo '<a href="http://127.0.0.6/sign-up">Inscrivez vous</a>';
                }

                $_SESSION['type'] = strtolower(str_replace("App\Entity\\", "", get_class($oUser[0])));

                $_SESSION['email'] = $oUser[0]->getEmail(); // ou $_POST['email'] c'est pareil
                $_SESSION['firstname'] = $oUser[0]->getFirstname();
                $_SESSION['id'] = $oUser[0]->getId();

                echo "successfully connected";
                var_dump($_SESSION['type']);
                header('Location:http://127.0.0.6/home');

            }
        }
    }
}
