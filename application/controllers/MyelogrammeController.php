<?php

/**
 * Created by PhpStorm.
 * User: Medteck
 * Date: 13/04/2017
 * Time: 20:08
 */
class MyelogrammeController
{
    function myeloAccueil ()
    {
        require_once('../application/views/includes/myelo.php') ;

    }

    function myelo ()
    {
        require_once('../application/models/myelo.php') ;
        $new_myelo =  Myelo::add_myelo();

        require_once('../application/views/includes/myelo.php') ;

    }
}