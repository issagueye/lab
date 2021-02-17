<?php

/**
 * Created by PhpStorm.
 * User: Medteck
 * Date: 13/04/2017
 * Time: 20:22
 */
class frottmController
{
    function frottmAccueil ()
    {

        require_once('../application/views/FrottisM.php') ;

    }

    function new_frottm ()
    {

        require_once('../application/models/Frottm.php') ;
        $new_frottm = Frottm::add_new_frottm();
        require_once('../application/views/FrottisM.php') ;

    }

}