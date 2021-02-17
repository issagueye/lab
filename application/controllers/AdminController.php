<?php 
/**
* 
*/


/**
 * Created by PhpStorm.
 * User: Medteck
 * Date: 14/04/2017
 * Time: 17:46
 */
class AdminController
{

     function accueil_admin   ()
     {
         require_once  ('../application/views/includes/admin.php') ;
     }
    function  add_user   ()
    {
        require_once  ('../application/models/Admin.php') ;
        $user =  new Admin();
        $user->addNewUser();
        require_once  ('../application/views/includes/admin.php') ;
    }

    function  add_service   ()
    {
        require_once  ('../application/models/Admin.php') ;
        $service =  new Admin();
        $service->add_services();
        require_once  ('../application/views/includes/admin.php') ;
    }

    function gesUser ()
    {
        require_once  ('../application/views/includes/admin.php') ;

    }

    function blockUser ()
    {
        require_once  ('../application/models/Admin.php') ;
        $user  =  new Admin() ;
        $user->block_User() ;
        require_once  ('../application/views/includes/admin.php') ;


    }
     function blockService ()
    {
        require_once  ('../application/models/Admin.php') ;
        $user  =  new Admin() ;
        $user->block_Service() ;
        require_once  ('../application/views/includes/admin.php') ;


    }

    function logout ()
    {
        require_once  ('../application/models/Admin.php') ;
        $user  =  new Admin() ;
        $user->is_deconnect() ;
        require_once  ('../application/views/includes/admin.php') ;
    }

}