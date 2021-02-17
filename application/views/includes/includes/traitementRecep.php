<?php 
	include 'connectDb.php';
	if (isset($_POST['submit'])) {
		if ($_POST['typeAna'] == 'histologie') {
			$typeAna = "anapath";
		}
		else
		{
			$typeAna = $_POST['typeAna'];
		}
		$type = $_GET['type'];
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
		$natPrelev = htmlspecialchars($_POST['natPrelev']);
		$rensCli = htmlspecialchars($_POST['rensCli']);
		$transmisA = htmlspecialchars($_POST['transmisA']);
		$nomenclature = htmlspecialchars($_POST['nomenclature']);

		$req = $bdd->prepare("INSERT INTO analyses (typeAna,recep,nomPatient,prenomPatient,agePatient,nb,sexe,medecinTraitant,service,codeAna,numExam,datePrelevement,naturePrelevement,renseignementsCliniques,transmisA,status,nomenclature) VALUES (:typeAna,:type,:nom,:prenom,:age,:nb,:sexe,:medTraitant,:service,:codeAna,:numero,:dateP,:nature,:rens,:transmis,3,:nomen)");

		

		if ($req->execute(array(
			'typeAna' => $typeAna,
			'type' => $type,
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
			'nature'=> $natPrelev,
			'rens'=> $rensCli,
			'transmis'=> $transmisA,
			'nomen' => $nomenclature)))
		{
			echo "<script>alert('insertion réussie');</script>";
		}
		else
			echo "<script>alert('erreur lors de l'insertion);</script>";

		$lastId = $bdd->lastInsertId();
		echo "dernier id inserer :".$lastId;

		$req2 = $bdd->prepare('INSERT INTO notif (analyse, typeUser,etat,alerteOk,date,typeAna,type) VALUES (:last,2,0,0,'.date('Y-m-d').',:type,1)');

		if ($req2->execute(array(
			'last'=> $lastId,
			'type'=>$type
			))) {
			echo "notif Ok";
		}
	}

	if (isset($_POST['update'])) {
		if ($_POST['typeAna'] == 'histologie') {
			$typeAna = "anapath";
		}
		else
		{
			$typeAna = $_POST['typeAna'];
		}
		$type = $_GET['type'];
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
		$natPrelev = htmlspecialchars($_POST['natPrelev']);
		$rensCli = htmlspecialchars($_POST['rensCli']);
		$transmisA = htmlspecialchars($_POST['transmisA']);
		$nomenclature = htmlspecialchars($_POST['nomenclature']);

		$modif = $bdd->prepare ("UPDATE analyses SET 
			recep = :type,
			typeAna = :typeAna,
			nomPatient = :nom,
			prenomPatient = :prenom,
			agePatient = :age,
			nb = :nb,
			sexe = :sexe,
			medecinTraitant = :medTraitant,
			service = :service,
			codeAna = :codeAna,
			numExam = :numero,
			datePrelevement = :dateP,
			naturePrelevement = :nature,
			renseignementsCliniques = :rens,
			transmisA = :transmisA,
			nomenclature = :nomen WHERE idAna='".$_GET['id']."'
			");


		if ($modif->execute(array(
			'type' => $type,
			'typeAna' => $typeAna,
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
			'nature'=> $natPrelev,
			'rens'=> $rensCli,
			'transmisA'=> $transmisA,
			'nomen' => $nomenclature))) {
			echo "<script>alert('Modification réussie!');</script>";
			
		}

	}

	?>
