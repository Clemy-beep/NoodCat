<?php

namespace App\Controller;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\MAPPING\ClassMetadata;
use App\Helpers\EntityManagerHelpers as Em;
use Router\Router;

class AppController
{

    const NEEDS =
    ['email',
    'password'
    ] ;


    public static function index()
    {
        include './src/View/Homepage.php';
    }

    public static function notFound(){
        include './routes/404.html';
    }


    public function login(){

        include("./vues/login.php");

        if(!empty($_POST)){

            foreach(self::NEEDS as $value){
                if(!array_key_exists($value, $_POST)){
                  echo "error : veuillez remplir tous les champs";
                  die();  
                }

                $_POST[$value]=trim(htmlentities(strip_tags($_POST[$value])));

                if($_POST[$value] === ""){
                    echo "error : veuillez remplir tous les champs";
                    die(); 
                }

                $entityManager = Em::getEntityManager();        
                $repository = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Person"));
                
                $oUser = $repository->findBy(['email'=>$_POST['email']]);
                
                if(empty($oUser)){
                    echo 'user not find, please suscribe' ;
                    die;
                }
                
                if(password_verify($_POST['pwd'], $oUser[0]->getPassword()) == false){
                    echo "c'est le moment de s'inscrire ! ou alors mauvais mdp...";
                }

                $_SESSION['type'] = strtolower(str_replace("App_Entity\\","",get_class($oUser[0])));   

                $_SESSION['email'] = $oUser[0]->getEmail(); // ou $_POST['email'] c'est pareil
                $_SESSION['prenom'] = $oUser[0]->getPrenom();

                header('Location:http://localhost/127.0.0.6/');

            }

        }

    }
}
