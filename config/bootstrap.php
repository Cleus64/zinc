<?php

use Whoops\Run;
use Dotenv\Dotenv;
use Whoops\Handler\PrettyPageHandler;

    /**
     * 
     * Hello!
     * 
     * Voici le fichier de configration permmettant 
     * d'amorcer l'application.
     * 
     */

     //Chargement de l'autoloader de composer

     require __DIR__ . "/../vendor/autoload.php";

     //Chargement des contantes représentant des raccourcis

     require __DIR__ . "/constants/app.php";
    

     //Chargement de Whoops pour avoir des messages d'erreurs un peu plus stylés
     //et permettre un debug plus facilement 
     $whoops = new Run;
    $whoops->pushHandler(new PrettyPageHandler);
    $whoops->register();


     // Chargement des variables d'environnement
    $dotenv = Dotenv::createImmutable(ROOT);
    $dotenv->load();