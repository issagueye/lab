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
					$rensCli = addslashes(htmlspecialchars($_POST['rensCli']));
					$abstinence = htmlspecialchars($_POST['abstinence']);
					$volume = htmlspecialchars($_POST['volume']);
					$ph = htmlspecialchars($_POST['ph']);
					$aspect = htmlspecialchars($_POST['aspect']);
					$fludification = addslashes(htmlspecialchars($_POST['fludification']));
					$numerationmm3 = htmlspecialchars($_POST['numerationmm3']);
					$numerationml = htmlspecialchars($_POST['numerationml']);
					$numerationej = htmlspecialchars($_POST['numerationej']);
					$tdr1 = htmlspecialchars($_POST['tdr1']);
					$tdr4 = htmlspecialchars($_POST['tdr4']);
					$mobd1 = htmlspecialchars($_POST['mobd1']);
					$mobd4 = htmlspecialchars($_POST['mobd4']);
					$immo1 = htmlspecialchars($_POST['immo1']);
					$immo4 = htmlspecialchars($_POST['immo4']);
					$vitalite = addslashes(htmlspecialchars($_POST['vitalite']));
					$aggluAmas = htmlspecialchars($_POST['aggluAmas']);
					$formesAnormales = htmlspecialchars($_POST['formesAnormales']);
					$PAC = addslashes(htmlspecialchars($_POST['PAC']));
					$autresELS = addslashes(htmlspecialchars($_POST['autresELS']));
					$cellulesR = addslashes(htmlspecialchars($_POST['cellulesR']));
					$divers = addslashes(htmlspecialchars($_POST['divers']));
					$conclusion = addslashes(htmlspecialchars($_POST['conclusion']));
					$medecinSaisie = htmlspecialchars($_POST['medecinSaisie']);
					
					$search = $bdd->query("SELECT * FROM analyses WHERE codeAna='$codeA'");
						$tabVerif = $search->fetchAll(PDO::FETCH_OBJ);
						if (!empty($tabVerif)) {
							
							echo "<script>alert('fiche deja saisie');</script>";
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

					$req = $bdd->prepare("INSERT INTO analyses (typeAna,nomPatient,prenomPatient,agePatient,nb,sexe,medecinTraitant,service,codeAna,numExam,datePrelevement,dateSortie,renseignementsCliniques,abstinence,volume,ph,aspect,fludification,numerationmm3,numerationml,numerationeja,tdr1,mobd1,immo1,tdr4,mobd4,immo4,vitalite,aggluAmas,formesAnormales,PAC,autresELS,cellulesR,divers,conclusion,medecinSaisie,status) VALUES ('spermogramme','".$nom."','".$prenom."','".$age."','".$nb."','".$sexe."','".$medTraitant."','".$service."','".$codeA."','".$numExam."','".$datePrelev."','".$dateSortie."','".$rensCli."','".$abstinence."','".$volume."','".$ph."','".$aspect."','".$fludification."','".$numerationmm3."','".$numerationml."','".$numerationej."','".$tdr1."','".$mobd1."','".$immo1."','".$tdr4."','".$mobd4."','".$immo4."','".$vitalite."','".$aggluAmas."','".$formesAnormales."','".$PAC."','".$autresELS."','".$cellulesR."','".$divers."','".$conclusion."','".$medecinSaisie."',0) ");

					// $req = $bdd->prepare("INSERT INTO analyses VALUES ('','".$nom."','".$prenom."','".$age."','".$nb."','".$sexe."','".$medTraitant."','".$service."','".$codeA."','".$numExam."','".$datePrelev."','".$dateSortie."','".$rensCli."','".$abstinence."','".$volume."','".$ph."','".$aspect."','".$fludification."','".$numerationmm3."','".$numerationml."','".$numerationej."','".$tdr1."','".$mobd1."','".$immo1."','".$tdr4."','".$mobd4."','".$immo4."','".$vitalite."','".$aggluAmas."','".$formesAnormales."','".$PAC."','".$autresELS."','".$cellulesR."','".$divers."','".$conclusion."','".$medecinSaisie."',0,'')");

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
				 if (isset($_POST['update'])) {

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



				 	$modif = $bdd->prepare("
				 	UPDATE analyses SET
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
					renseignementsCliniques=:rens,
					abstinence=:abstinence,
					volume=:volume,
					ph=:ph,
					aspect=:aspect,
					fludification=:fludification,
					numerationmm3=:numerationmm3,
					numerationml=:numerationml,
					numerationeja=:numerationej,
					tdr1=:tdr1,
					mobd1=:mobd1,
					immo1=:immo1,
					tdr4=:tdr4,
					mobd4=:mobd4,
					immo4=:immo4,
					vitalite=:vitalite,
					aggluAmas=:aggluAmas,
					formesAnormales=:formesAnormales,
					PAC=:PAC,
					autresELS=:autresELS,
					cellulesR=:cellulesR,
					divers=:divers,
					conclusion=:conclusion,
					medecinSaisie=:medecinSaisie
					WHERE idAna='".$_GET['id']."' ");



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
							'rens'=> $rensCli,
							'abstinence'=>$abstinence,
							'volume'=>$volume,
							'ph'=>$ph,
							'aspect'=>$aspect,
							'fludification'=>$fludification,
							'numerationmm3'=>$numerationmm3,
							'numerationml'=>$numerationml,
							'numerationej'=>$numerationej,
							'tdr1'=>$tdr1,
							'mobd1'=>$mobd1,
							'immo1'=>$immo1,
							'tdr4'=>$tdr4,
							'mobd4'=>$mobd4,
							'immo4'=>$immo4,
							'vitalite'=>$vitalite,
							'aggluAmas'=>$aggluAmas,
							'formesAnormales'=>$formesAnormales,
							'PAC'=>$PAC,
							'autresELS'=>$autresELS,
							'cellulesR'=>$cellulesR,
							'divers'=>$divers,
							'conclusion'=> $conclusion,
							'medecinSaisie'=>$medecinSaisie
							))) {
						echo "<script>alert('modification réussie');</script>";
						
					}
					else
						echo "<script>alert('erreur lors de la mise à jour');</script>";
				 }
			?>