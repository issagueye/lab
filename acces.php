<?php
require_once ('./application/config/Database.php') ;
if ( isset($_GET['page'])){
    $page  =  $_GET['page'] ;
}else{
    $page = 'acces';
}
if ($page ==='acces'){
    require_once ('./application/controllers/AuthController.php');
    $controller =  new AuthController()  ;
    $controller->home();
}elseif ($page ==='accueil'){
    require_once ('./application/controllers/AccueilController.php');
    $controller =  new AccueilController() ;
    $controller->accueil() ;
}
