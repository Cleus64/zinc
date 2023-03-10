<?php

use App\Kernel;

    /**
     * 
     * Bienvenue dans notre framework
     * 
     * Ce fichier représente le contrôleur frontal
     * 
     * Ses rôles:
     *      -Amorcer l'application
     *      -Créer une nouvelle instance du noyau
     *      -Demander au noyau de soumettre la reqête et 
     *       récupérer la réponse correspondante
     *      -Envoyer cette réponse au client
     * 
     * 
     */


     // Amorçage de l'application

     require __DIR__ . "/../config/bootstrap.php";


     //Création d'une nouvelle instance du noyau de l'application
     $kernel = new Kernel();

     //Demander au noyau de soumettre la requete et de récupérer la réponse corespondante
    $response = $kernel->handleRequest();
     //Envoyer cette réponse au client
    $response->send();
    
  

    
