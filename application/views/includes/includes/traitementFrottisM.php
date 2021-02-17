<?php 

					if (isset($_POST['submit'])) {
						$nom = htmlspecialchars($_POST['nom']);
						$prenom = htmlspecialchars($_POST['prenom']);
						$age = htmlspecialchars($_POST['age']);
						$nb = htmlspecialchars($_POST['nb']);
						$sexe = htmlspecialchars($_POST['sexe']);
						$medTraitant = htmlspecialchars($_POST['medTraitant']);
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
						

						//insertion des donnees dans la base
						$req = $bdd->prepare("INSERT INTO analyses (typeAna,nomPatient,prenomPatient,agePatient,nb,sexe,medecinTraitant,service,codeAna,numExam,datePrelevement,dateSortie,naturePrelevement,renseignementsCliniques,dateCompteRendu,transmisA,interpretations,conclusion, medecinSaisie) VALUES ('frottismilieuliquide',:nom,:prenom,:age,:nb,:sexe,:medTraitant,:service,:codeAna,:numero,:dateP,:dateS,:nature,:rens,:datecptr,:transmis,:inter,:conclusion,:medecinSaisie)");
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
						$natPrelev = htmlspecialchars($_POST['natPrelev']);
						$rensCli = htmlspecialchars($_POST['rensCli']);
						$cptr = htmlspecialchars($_POST['cptr']);
						$transmisA = htmlspecialchars($_POST['transmisA']);
						$interpretations = htmlspecialchars($_POST['interpretations']);
						$conclusion = htmlspecialchars($_POST['conclusion']);
						$medecinSaisie = htmlspecialchars($_POST['medecinSaisie']);

					$modif = $bdd->prepare("UPDATE analyses SET
						typeAna = 'frottismilieuliquide',
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
						naturePrelevement=:nature,
						renseignementsCliniques=:rens,
						dateCompteRendu=:datecptr,
						transmisA=:transmis,
						interpretations=:inter,
						conclusion=:conclusion,
						medecinSaisie=:medecinSaisie 
						WHERE idAna='".$_GET['id']."'");

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
							'nature'=> $natPrelev,
							'rens'=> $rensCli,
							'datecptr'=> $cptr,
							'transmis'=> $transmisA,
							'inter'=> $interpretations,
							'conclusion'=> $conclusion,
							'medecinSaisie'=> $medecinSaisie
							))) {
						
						?>
						<script>
							alert('modification réussie');
							
						</script>
						<?php 

					}
					else
						echo "<script>alert('erreur lors de la mise à jour');</script>";
				}
				 ?>