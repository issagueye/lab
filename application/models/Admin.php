<?php

/**
 * Created by PhpStorm.
 * User: Medteck
 * Date: 14/04/2017
 * Time: 17:46
 */
class Admin
{

      function  addNewUser  ()
    {

        if (isset($_POST['ajout'])) {
            $db =  Database::getInstance();
            $req = $db->prepare("INSERT INTO users SET  username =  ? , password = ? , typeUser  =  ?  ") ;
            $password  =  sha1(($_POST['mdp']));
            if ($req->execute([$_POST['username'] , $password , $_POST['typeUser']])){
                echo "<script>alert('Utilisateur créé avec succès')
                    window.location.replace('index.php?page=admin')</script>";

            }

        }

    }

        function  add_services   ()
        {
          if (isset($_POST ['ajoutServ']))
          {
              $db =  Database::getInstance() ;
                $statement =  $db->prepare("INSERT INTO  services SET nomService  = ? ") ;
                if ($statement->execute( [$_POST['nomServ']])){
                    echo "<script>alert('Service  créé avec succès')
                    window.location.replace('index.php?page=admin')</script>";
                }
          }



        }


        function  block_User ()
        {
            $db = Database::getInstance();
            if (isset($_GET['idUser'])) {
                $req = $db->prepare("UPDATE users SET status='".$_GET['value']."' WHERE idUser='".$_GET['idUser']."'");
                if ($req->execute()) {

                    
                    echo "<script>alert('Opération Réussie')
                    window.location.replace('index.php?page=admin')</script>";
                    

                }
        }

        }
        function  block_Service ()
        {
                $db = Database::getInstance();
    if (isset($_GET['nomService'])) {
        $req = $db->prepare("DELETE FROM services  WHERE nomService='".$_GET['nomService']."'");
        if ($req->execute()) {
            echo "Opération Réussie";
            return false;

        }
        else 
        {
            echo "erreur";
            return false;
        }
    }

        }
    public  function is_deconnect()
    {
        if (isset($_POST['deconect'])) {
            session_destroy();
            header('Location:index.php?page=accueil');
        }
    }



}