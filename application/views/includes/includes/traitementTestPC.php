<?php 
	if (isset($_POST['submit'])) {
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
		$abstinence = htmlspecialchars($_POST['abstinence']);
		$traitementP = htmlspecialchars($_POST['traitementP']);
		$col = htmlspecialchars($_POST['col']);
		$filance = htmlspecialchars($_POST['filance']);
		$abondance = htmlspecialchars($_POST['abondance']);
		$cristallisation = htmlspecialchars($_POST['cristallisation']);
		$totalScoreInsler = htmlspecialchars($_POST['totalScoreInsler']);
		$nbSC = htmlspecialchars($_POST['nbSC']);
		$degreMob = htmlspecialchars($_POST['degreMob']);
		$presenceAgglu = htmlspecialchars($_POST['presenceAgglu']);
		$conclusion = htmlspecialchars($_POST['conclusion']);
		$medecinSaisie = htmlspecialchars($_POST['medecinSaisie']);
		
		$search = $bdd->query("SELECT * FROM analyses WHERE codeAna='$codeA'");
						$tabVerif = $search->fetchAll(PDO::FETCH_OBJ);
						if (!empty($tabVerif)) {

							echo "<script>alert('fiche deja saisie');</script>";
							$saisie = "deja saisie";
							var_dump($saisie);
							return false;
						}

		if (isset($_POST['otherS']) and $_POST["otherS"] != null) {
							$service = htmlspecialchars($_POST['otherS']);
							$serv = $bdd->prepare("INSERT INTO services SET nomService = :serv ");
							if ($serv->execute(array(
								'serv' => $service
								)))
								echo "<script>alert('service ajouté')</script>";
						}
						else {
							$service = htmlspecialchars($_POST['service']);
						}

		$req = $bdd->prepare("INSERT INTO analyses (typeAna,nomPatient,prenomPatient,agePatient,nb,sexe,medecinTraitant,service,codeAna,numExam,datePrelevement,dateSortie,abstinence,traitementPrealable,col,filance,abondance,cristallisation,totalScoreInsler,nbSC,degreMobD,presenceAgglu,conclusion,medecinSaisie,status) VALUES ('coital',:nom,:prenom,:age,:nb,:sexe,:medTraitant,:service,:codeAna,:numero,:dateP,:dateS,:abstinence,:traitementP,:col,:filance,:abondance,:cristallisation,:totalScoreInsler,:nbSC,:degreMobD,:presenceAgglu,:conclusion,:medecinSaisie,0) ");

		
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
			'abstinence' => $abstinence,
			'traitementP' => $traitementP,
			'col' => $col,
			'filance' => $filance,
			'abondance' => $abondance,
			'cristallisation' => $cristallisation,
			'totalScoreInsler' => $totalScoreInsler,
			'nbSC' => $nbSC,
			'degreMobD' => $degreMob,
			'presenceAgglu' => $presenceAgglu,
			'conclusion' => $conclusion,
			'medecinSaisie' => $medecinSaisie
			))) {
			echo "<script>alert('Insertion réussie!');</script>";
		}
		else
			{
			
				echo "<script>alert('Erreur lors de l\'insertion!');</script>";}
				
	}


	if (isset($_POST['update'])) {
		var_dump($_POST);
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
		$abstinence = htmlspecialchars($_POST['abstinence']);
		$traitementP = htmlspecialchars($_POST['traitementP']);
		$col = htmlspecialchars($_POST['col']);
		$filance = htmlspecialchars($_POST['filance']);
		$abondance = htmlspecialchars($_POST['abondance']);
		$cristallisation = htmlspecialchars($_POST['cristallisation']);
		$totalScoreInsler = htmlspecialchars($_POST['totalScoreInsler']);
		$nbSC = htmlspecialchars($_POST['nbSC']);
		$degreMob = htmlspecialchars($_POST['degreMob']);
		$presenceAgglu = htmlspecialchars($_POST['presenceAgglu']);
		$conclusion = htmlspecialchars($_POST['conclusion']);
		$medecinSaisie = htmlspecialchars($_POST['medecinSaisie']);

		$modif = $bdd->prepare("UPDATE analyses SET
			typeAna = 'coital',
			nomPatient=:nom,
			prenomPatient=:prenom,
			agePatient=:age,
			nb=:nb,
			sexe=:sexe,
			medecinTraitant=:medTraitant,
			service=:service,
			codeAna=:codeAna,
			numExam=:numero,
			datePrelevement=:dateP,
			dateSortie=:dateS,
			abstinence = :abstinence,
			traitementPrealable = :traitementP,
			col = :col,
			filance = :filance,
			abondance = :abondance,
			cristallisation = :cristallisation,
			totalScoreInsler = :totalScoreInsler,
			nbSC = :nbSC,
			degreMobD = :degreMobD,
			presenceAgglu = :presenceAgglu,
			conclusion = :conclusion,
			medecinSaisie = :medecinSaisie
			WHERE idAna = '".$_GET['id']."'
			");
		if ($modif->execute(array(
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
			'abstinence' => $abstinence,
			'traitementP' => $traitementP,
			'col' => $col,
			'filance' => $filance,
			'abondance' => $abondance,
			'cristallisation' => $cristallisation,
			'totalScoreInsler' => $totalScoreInsler,
			'nbSC' => $nbSC,
			'degreMobD' => $degreMob,
			'presenceAgglu' => $presenceAgglu,
			'conclusion' => $conclusion,
			'medecinSaisie' => $medecinSaisie
			))) {
			echo "<script>alert('Modification réussie!');</script>";
			
		}
		else
			echo "<script>alert('Erreur lors de la mise à jour.');</script>";
	}
	
 ?>