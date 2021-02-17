<?php

/**
 * Created by PhpStorm.
 * User: Medteck
 * Date: 15/04/2017
 * Time: 18:51
 */
class AccueilMedecinController
{


    function AccueilMedecin (){
        require_once ('../application/views/includes/accueilmedecin.php');
    }

        function logout ()
    {
        require_once  ('../application/models/Admin.php') ;
        $user  =  new Admin() ;
        $user->is_deconnect() ;
        require_once  ('../application/views/includes/accueiladmin.php') ;
    }
}