<?php

/**
 * Created by PhpStorm.
 * User: Medteck
 * Date: 11/04/2017
 * Time: 10:27
 */
class AuthController
{
    function home()
    {
        require_once('../application/models/Auth.php');
        $user = new Auth();
        $user->login();
        require_once('../application/views/includes/login.php');
    }
}