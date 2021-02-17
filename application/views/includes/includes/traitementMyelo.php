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

					$req = $bdd->prepare("INSERT INTO analyses (typeAna,nomPatient,prenomPatient,agePatient,nb,sexe,medecinTraitant,service,codeAna,numExam,datePrelevement,dateSortie,renseignementsCliniques,osFonctionne,richesse,formule,ligneeG,neutro,myeloblastes,promyelocytes,myelocytesN,metaMyelocytesN,polyNucleairesN,eosinophile,myelocytesE,metaMyelocytesE,polynucleairesE,basophile,ligneeE,proErythroblaste,erythroblasteBaso,ePolychromato,erythroblasteAcido,ePolychrome,megaloblaste,autresLignees,lymphocytaire,plasmocytaire,monocytaire,ligneeT,interpretations,conclusion,medecinSaisie,status) VALUES ('myelogramme','".$nom."','".$prenom."','".$age."','".$_POST['nb']."','".$sexe."','".$medTraitant."','".$service."','".$codeA."','".$numExam."','".$datePrelev."','".$dateSortie."','".$rensCli."','".$os."','".$richesse."','".$formule."','".$ligneG."','".$neutro."','".$myeloblastes."','".$promyelocytes."','".$myelocytesN."','".$metamyelocytesN."','".$polynucleairesN."','".$eosinophile."','".$myelocytesE."','".$metamyelocytesE."','".$polynucleairesE."','".$basophile."','".$ligneE."','".$proerythroblaste."','".$erythroblasteBaso."','".$ePolychromato."','".$erythroblasteAcido."','".$ePolychrome."','".$megaloblaste."','".$autresLignees."','".$lymphocytaire."','".$plasmocytaire."','".$monocytaire."','".$ligneeThrombo."','".$interpretations."','".$conclusion."','".$medecinSaisie."',0)  ");

					// $req = $bdd->prepare("INSERT INTO analyses VALUES ('','".$nom."','".$prenom."','".$age."','".$_POST['nb']."','".$sexe."','".$medTraitant."','".$service."','".$codeA."','".$numExam."','".$datePrelev."','".$dateSortie."','".$rensCli."','".$os."','".$richesse."','".$formule."','".$ligneG."','".$neutro."','".$myeloblastes."','".$promyelocytes."','".$myelocytesN."','".$metamyelocytesN."','".$polynucleairesN."','".$eosinophile."','".$myelocytesE."','".$metamyelocytesE."','".$polynucleairesE."','".$basophile."','".$ligneE."','".$proerythroblaste."','".$erythroblasteBaso."','".$ePolychromato."','".$erythroblasteAcido."','".$ePolychrome."','".$megaloblaste."','".$autresLignees."','".$lymphocytaire."','".$plasmocytaire."','".$monocytaire."','".$ligneeThrombo."','".$interpretations."','".$conclusion."','','')");

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
				if (isset($_POST['update'])) {
					$modif = $bdd->prepare("UPDATE analyses SET
						typeAna = 'myelogramme',
						nomPatient='".$_POST['nom']."',
						prenomPatient='".$_POST['prenom']."',
						agePatient='".$_POST['age']."',
						nb='".$_POST['nb']."',
						sexe='".$_POST['sexe']."',
						medecinTraitant='".$_POST['medTraitant']."',
						service='".$_POST['service']."',
						codeAna='".$_POST['codeA']."',
						numExam='".$_POST['numExam']."',
						datePrelevement='".$_POST['datePrelev']."',
						dateSortie='".$_POST['dateSortie']."',
						renseignementsCliniques='".$_POST['rensCli']."',
						osFonctionne = '".$_POST['os']."',
						richesse = '".$_POST['richesse']."',
						formule = '".$_POST['formule']."',
						ligneeG = '".$_POST['ligneG']."',
						neutro = '".$_POST['neutro']."',
						myeloblastes = '".$_POST['myeloblastes']."',
						promyelocytes = '".$_POST['promyelocytes']."',
						myelocytesN = '".$_POST['myelocytesN']."',
						metaMyelocytesN = '".$_POST['metamyelocytesN']."',
						polyNucleairesN = '".$_POST['polynucleairesN']."',
						eosinophile = '".$_POST['eosinophile']."',
						myelocytesE = '".$_POST['myelocytesE']."',
						metaMyelocytesE = '".$_POST['metamyelocytesE']."',
						polyNucleairesE = '".$_POST['polynucleairesE']."',
						basophile = '".$_POST['basophile']."',
						ligneeE = '".$_POST['ligneE']."',
						proErythroblaste = '".$_POST['proerythroblaste']."',
						erythroblasteBaso = '".$_POST['erythroblasteBaso']."',
						ePolychromato = '".$_POST['ePolychromato']."',
						erythroblasteAcido = '".$_POST['erythroblasteAcido']."',
						ePolychrome = '".$_POST['ePolychrome']."',
						megaloblaste = '".$_POST['megaloblaste']."',
						autresLignees = '".$_POST['autresLignees']."',
						lymphocytaire = '".$_POST['lymphocytaire']."',
						plasmocytaire = '".$_POST['plasmocytaire']."',
						monocytaire = '".$_POST['monocytaire']."',
						ligneeT = '".$_POST['ligneeThrombo']."',
						status = 0,
						interpretations = '".$_POST['interpretations']."',
						conclusion='".$_POST['conclusion']."' WHERE idAna='".$_GET['id']."'");

					if ($modif->execute()) {
						echo "<script>alert('modif réussie');</script>";
						
					}
					else
						echo "<script>alert('erreur lors de la mise à jour');</script>";
				}
			?>