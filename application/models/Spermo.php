<?php

/**
 * Created by PhpStorm.
 * User: Medteck
 * Date: 14/04/2017
 * Time: 00:44
 */
class Spermo
{

    public static  function add_spermo ()
    {

				if (isset($_POST['submit'])) {
                    $db =  Database::getInstance() ;
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
                    $rensCli = htmlspecialchars($_POST['rensCli']);
                    $abstinence = htmlspecialchars($_POST['abstinence']);
                    $volume = htmlspecialchars($_POST['volume']);
                    $ph = htmlspecialchars($_POST['ph']);
                    $aspect = htmlspecialchars($_POST['aspect']);
                    $fludification = htmlspecialchars($_POST['fludification']);
                    $numerationmm3 = htmlspecialchars($_POST['numerationmm3']);
                    $numerationml = htmlspecialchars($_POST['numerationml']);
                    $numerationej = htmlspecialchars($_POST['numerationej']);
                    $tdr1 = htmlspecialchars($_POST['tdr1']);
                    $tdr4 = htmlspecialchars($_POST['tdr4']);
                    $mobd1 = htmlspecialchars($_POST['mobd1']);
                    $mobd4 = htmlspecialchars($_POST['mobd4']);
                    $immo1 = htmlspecialchars($_POST['immo1']);
                    $immo4 = htmlspecialchars($_POST['immo4']);
                    $vitalite = htmlspecialchars($_POST['vitalite']);
                    $aggluAmas = htmlspecialchars($_POST['aggluAmas']);
                    $formesAnormales = htmlspecialchars($_POST['formesAnormales']);
                    $PAC = htmlspecialchars($_POST['PAC']);
                    $autresELS = htmlspecialchars($_POST['autresELS']);
                    $cellulesR = htmlspecialchars($_POST['cellulesR']);
                    $divers = htmlspecialchars($_POST['divers']);
                    $conclusion = htmlspecialchars($_POST['conclusion']);
                    $medecinSaisie = htmlspecialchars($_POST['medecinSaisie']);

                    $req = $db->prepare("INSERT INTO spermogramme VALUES ('','".$nom."','".$prenom."','".$age."','".$nb."','".$sexe."','".$medTraitant."','".$service."','".$codeA."','".$numExam."','".$datePrelev."','".$dateSortie."','".$rensCli."','".$abstinence."','".$volume."','".$ph."','".$aspect."','".$fludification."','".$numerationmm3."','".$numerationml."','".$numerationej."','".$tdr1."','".$mobd1."','".$immo1."','".$tdr4."','".$mobd4."','".$immo4."','".$vitalite."','".$aggluAmas."','".$formesAnormales."','".$PAC."','".$autresELS."','".$cellulesR."','".$divers."','".$conclusion."','".$medecinSaisie."',0)");

                    if ($req->execute()) {
                        echo "<script>alert('insertion réussie');</script>";
                    }
                    else {
                        ?>
                        <script>alert("erreur lors de l'insertion");</script>

                        <?php
                    }
                    echo "";


                }
    }

}