<?php

/**
 * Created by PhpStorm.
 * User: Medteck
 * Date: 13/04/2017
 * Time: 20:24
 */
class frottvController
{
    function frottvAccueil ()
    {
        require_once('../application/views/FrottisV.php') ;

    }

    function add_frottv ()
    {
        require_once('../application/models/Frottisv.php') ;
        $new_frottisv =  Frottisv::add_new_frottisv();
        require_once('../application/views/FrottisV.php') ;

    }
}