<?php

/**
 * Created by PhpStorm.
 * User: Medteck
 * Date: 11/04/2017
 * Time: 10:28
 */
class Auth
{


        public function login ()
    {
        if(isset($_POST['connect'])){
            $username = htmlspecialchars(trim($_POST['username']));
            $password = htmlspecialchars(trim($_POST['password']));
            $errors = [];
            if(empty($username) || empty($password)){
                $errors['empty'] = "Tous les champs n'ont pas été remplis!";
            }else{
                $db = Database::getInstance();
                $statement  = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password ");
                $statement->execute(array('username' => $username , 'password'=> sha1($password)));
                $row = $statement->fetch () ;
                if ($row['typeUser'] ==  1 AND  $row['status'] !=1)
                {
                    $_SESSION['username'] = $username ;
                    $_SESSION['page'] = 'accueiladmin';
                    $_SESSION['type'] = '1';
                    header("Location:index.php?page=accueiladmin");

                }else{
                    $errors['error1'] = header("Location:index.php?erreur=1");
                }

                if ($row['typeUser'] == 2 AND $row['status'] != 1 ){
                    $_SESSION['username'] = $username ;
                    $_SESSION['page'] = 'accueilRecep';
                    $_SESSION['type'] = '0';
                    header("Location:index.php?page=accueilRecep");

                }elseif ($row['typeUser'] == 2 AND $row['status'] == 1 )
                {
                     $errors['error2'] = header("Location:index.php?erreur=1") ;
                }


                if ($row['typeUser'] == 3 AND $row['status'] != 1 ){
                    $_SESSION['username'] = $username ;
                    $_SESSION['page'] = 'accueilMedecin';
                    $_SESSION['type'] = '2';
                    header("Location:index.php?page=accueilMedecin");
                }elseif ($row['typeUser'] == 3 AND $row['status'] == 1 )
                {
                    $errors['error3'] = header("Location:index.php?erreur=1") ;
                }


            }
            if ($errors){
                ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errors as $error) { ?>
                            <p> <?php echo $error; ?></p>
                        <?php } ?>
                    </ul>
                </div>
                <?php
            }
        }



    }

}