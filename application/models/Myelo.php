<?php

/**
 * Created by PhpStorm.
 * User: Medteck
 * Date: 14/04/2017
 * Time: 00:54
 */
class Myelo
{
    public  static  function add_myelo ()
    {
        if (isset($_POST['submit'])) {
            $db  =  Database::getInstance()  ;

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
            $os = htmlspecialchars($_POST['os']);
            $richesse = htmlspecialchars($_POST['richesse']);
            $formule = htmlspecialchars($_POST['formule']);
            $ligneG = htmlspecialchars($_POST['ligneG']);
            $ligneE = htmlspecialchars($_POST['ligneE']);
            $neutro = htmlspecialchars($_POST['neutro']);
            $myeloblastes = htmlspecialchars($_POST['myeloblastes']);
            $proerythroblaste = htmlspecialchars($_POST['proerythroblaste']);
            $promyelocytes = htmlspecialchars($_POST['promyelocytes']);
            $erythroblasteBaso = htmlspecialchars($_POST['erythroblasteBaso']);
            $myelocytesN = htmlspecialchars($_POST['myelocytesN']);
            $ePolychromato = htmlspecialchars($_POST['ePolychromato']);
            $metamyelocytesN = htmlspecialchars($_POST['metamyelocytesN']);
            $erythroblasteAcido = htmlspecialchars($_POST['erythroblasteAcido']);
            $polynucleairesN = htmlspecialchars($_POST['polynucleairesN']);
            $ePolychrome = htmlspecialchars($_POST['ePolychrome']);
            $megaloblaste = htmlspecialchars($_POST['megaloblaste']);
            $eosinophile = htmlspecialchars($_POST['eosinophile']);
            $autresLignees = htmlspecialchars($_POST['autresLignees']);
            $myelocytesE = htmlspecialchars($_POST['myelocytesE']);
            $lymphocytaire = htmlspecialchars($_POST['lymphocytaire']);
            $metamyelocytesE = htmlspecialchars($_POST['metamyelocytesE']);
            $plasmocytaire = htmlspecialchars($_POST['plasmocytaire']);
            $polynucleairesE = htmlspecialchars($_POST['polynucleairesE']);
            $monocytaire = htmlspecialchars($_POST['monocytaire']);
            $basophile = htmlspecialchars($_POST['basophile']);
            $ligneeThrombo = htmlspecialchars($_POST['ligneeThrombo']);
            $interpretations = htmlspecialchars($_POST['interpretations']);
            $conclusion = htmlspecialchars($_POST['conclusion']);

            $req = $db->prepare("INSERT INTO myelogramme VALUES ('','".$nom."','".$prenom."','".$age."','".$_POST['nb']."','".$sexe."','".$medTraitant."','".$service."','".$codeA."','".$numExam."','".$datePrelev."','".$dateSortie."','".$rensCli."','".$os."','".$richesse."','".$formule."','".$ligneG."','".$neutro."','".$myeloblastes."','".$promyelocytes."','".$myelocytesN."','".$ePolychromato."','".$metamyelocytesN."','".$polynucleairesN."','".$eosinophile."','".$myelocytesE."','".$metamyelocytesE."','".$polynucleairesE."','".$basophile."','".$ligneE."','".$proerythroblaste."','".$erythroblasteBaso."','".$ePolychromato."','".$erythroblasteAcido."','".$ePolychrome."','".$megaloblaste."','".$autresLignees."','".$lymphocytaire."','".$plasmocytaire."','".$monocytaire."','".$ligneeThrombo."','".$interpretations."','".$conclusion."')");

            if ($req->execute()) {
                echo "<script>alert('insertion réussie');</script>";
            }
            else {
                ?>
                <script>alert('erreur lors de l\'insertion');</script>

                <?php
            }
            echo "";

        }
    }

}