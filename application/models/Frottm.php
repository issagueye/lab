<?php

/**
 * Created by PhpStorm.
 * User: Medteck
 * Date: 14/04/2017
 * Time: 00:25
 */
class Frottm
{

    public  static  function add_new_frottm ()
    {

					if (isset($_POST['submit'])) {
					    $db =  Database::getInstance();
                        $nom = htmlspecialchars($_POST['nom']);
                        $prenom = htmlspecialchars($_POST['prenom']);
                        $age = htmlspecialchars($_POST['age']);
                        $nb = htmlspecialchars($_POST['nb']);
                        $sexe = htmlspecialchars($_POST['sexe']);
                        $medTraitant = htmlspecialchars($_POST['medTraitant']);
                        $service = htmlspecialchars($_POST['service']);
                        $codeA = htmlspecialchars($_POST['codeA']);
                        $numExam = htmlspecialchars($_POST['numExam']);
                        $datePrelev = htmlspecialchars($_POST['datePrelev']);
                        $dateSortie = htmlspecialchars($_POST['dateSortie']);
                        $natPrelev = htmlspecialchars($_POST['natPrelev']);
                        $rensCli = htmlspecialchars($_POST['rensCli']);
                        $cptr = htmlspecialchars($_POST['cptr']);
                        $transmisA = htmlspecialchars($_POST['transmisA']);
                        $interpretations = htmlspecialchars($_POST['interpretations']);
                        $conclusion = htmlspecialchars($_POST['conclusion']);
                        $medecinSaisie = htmlspecialchars($_POST['medecinSaisie']);

                        //insertion des donnees dans la base
                        $req = $db->prepare("INSERT INTO frottismilieuliquide (nomPatient,prenomPatient,agePatient,nb,sexe,medecinTraitant,service,codeAna,numExam,datePrelevement,dateSortie,naturePrelevement,renseignementsCliniques,dateCompteRendu,transmisA,interpretations,conclusion, medecinSaisie) VALUES (:nom,:prenom,:age,:nb,:sexe,:medTraitant,:service,:codeAna,:numero,:dateP,:dateS,:nature,:rens,:datecptr,:transmis,:inter,:conclusion,:medecinSaisie)");
                        if ($req->execute(array(
                            'nom'=> $nom,
                            'prenom'=> $prenom,
                            'age'=>$age,
                            'nb'=>$nb,
                            'sexe'=>$sexe,
                            'medTraitant'=>$medTraitant,
                            'service'=> $service,
                            'codeAna'=> $codeA,
                            'numero'=> $numExam,
                            'dateP'=> $datePrelev,
                            'dateS'=> $dateSortie,
                            'nature'=> $natPrelev,
                            'rens'=> $rensCli,
                            'datecptr'=> $cptr,
                            'transmis'=> $transmisA,
                            'inter'=> $interpretations,
                            'conclusion'=> $conclusion,
                            'medecinSaisie'=> $medecinSaisie
                        ))) {
                            echo "<script>alert('insertion réussie');</script>";
                        }
                        else
                        {
                            ?>
                            <script>alert('erreur lors de l\'insertion');</script>

                            <?php
                        }

                    }
    }
}