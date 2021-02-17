<?
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aperçu</title>
	<link rel="stylesheet" href="../application/views/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../application/views/bootstrap/css/pages.css">
	<script src="../application/views/assets/js/jquery.min.js"></script>
	<script src="../application/views/bootstrap/js/bootstrap.js"></script>
	
</head>
<body>
	<div id="btnRetour">
	<a href=javascript:history.go(-1)><span><button type="button" class="btn btn-danger" style="margin-left: 12%;">Retour</button></span></a>
	
	<?php if (!isset($_GET['recep'])): ?>
		
	
	<a href="index.php?page=imprimer&type=<?php echo $_GET['type'] ?>&id=<?php echo $_GET['id'] ?>"><span style="float: right; margin-right: 15%;"><button id="btnImprimer" type="button" class="btn ">Imprimer</button></span></a>
	<?php endif ?>
	</div>
	<?php
	include 'includes/connectDb.php';
	require 'includes/html2pdf/vendor/autoload.php';

	ob_start();

	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$type=$_GET['type'];
	}

	if (!isset($_GET['recep'])) {
	$req=$bdd->query("SELECT * FROM analyses WHERE typeAna='$type' and idAna='$id'");
	
	}
	else 
		$req = $bdd->query("SELECT * FROM analyses WHERE idAna='$id'");
	$donnees = $req->fetch(PDO::FETCH_OBJ);
	
	?>
	

	<div class="container-fluid">
		
		<div class="row" id="infos">
			<h2>HOPITAL PRINCIPAL DE DAKAR <br>FEDERATION DES LABORATOIRES <br>
	ANATOMIE ET CYTOLOGIE PATHOLOGIQUES</h2><br>
	<span><strong> Chef de service : Méd Col Yankhoba DIOP </span> <br>
	<span>Adjoint :</span> <br>
	<span>Assistants : Méd Cdt E.S. SARR &nbsp;&nbsp;&nbsp;&nbsp; Méd Cdt R.F.B DIOP &nbsp;&nbsp;&nbsp;&nbsp; Méd Cdt M. NDIAYE</strong></span>
	<br><br>
			<span class="addr">Tel: +221 33 839 50 44</span>
			<span class="addr">Avenue Nelson Mandela BP 3006 DAKAR</span>
			<span class="addr">Fax: +221 33 839 50 88</span><br><br>
		</div>
		<div class="row" id="entete">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">	
				<label for="">Nom :</label> <?php echo $donnees->nomPatient; ?><br>
				<label for="">Prenom :</label> <?php echo $donnees->prenomPatient ?><br>
				<label for="">Age :</label> <?php echo $donnees->agePatient." ".$donnees->nb ?><br>
				<label for="">sexe :</label> <?php echo $donnees->sexe ?><br>
				<label for="">Medecin Traitant :</label> <?php echo $donnees->medecinTraitant ?><br>
				<label for="">Service :</label> <?php echo $donnees->service ?><br>
				
				<?php if (isset($_GET['recep'])): ?>
				<label for="">Nature du prélèvement :</label><br><?php echo $donnees->naturePrelevement ?><br><br>
				<label for="">Renseignements Cliniques :</label><br><p><?php echo nl2br($donnees->renseignementsCliniques )?></p><br><br>
				<label for="">Transmettre à :</label><?php echo $donnees->transmisA ?>
				<?php endif ?>

			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">	
				<label for="">Code Analyse :</label> <?php echo $donnees->codeAna ?><br><br>
				<label for="">Examen Numero :</label> <?php echo $donnees->numExam ?><br>
				<label for="">Date de prelevement :</label> <?php echo date('Y-m-d',strtotime($donnees->datePrelevement)) ?><br>
				
				<?php if (!isset($_GET['recep'])): ?>
				<label for="">Date de sortie :</label> <?php echo date('Y-m-d',strtotime($donnees->dateSortie)) ?><?php endif ?><br>
				<?php if (isset($_GET['recep'])): ?>
				<br>
				<br>
				<br>
				<br><label for="">Nomenclature :</label> <?php echo $donnees->nomenclature; ?><br>
				<?php endif ?>
			</div>
		</div>

			
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">


			</div>
			
		
		<div class="row" id="corps">
			<?php 
			if ($_GET['type']=="anapath" && !isset($_GET['recep'])) {
			?>
			<!-- <h2>ANATOMIE ET CYTOLOGIE PATHOLOGIQUES</h2> -->

			<label for="">Nature du prélèvement :</label><p> <?php echo nl2br($donnees->naturePrelevement) ?></p>
			<label for="">Renseignements Cliniques :</label><br>
			<p><?php echo nl2br($donnees->renseignementsCliniques) ?></p><br>
			<label for="">Compte Rendu du :</label><span><?php echo date('Y-m-d',strtotime($donnees->dateCompteRendu)) ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label for="">Transmis A :</label><?php echo $donnees->transmisA ?><br><br>
			<label for="">Interprétations :</label><br>
			<p><?php echo nl2br($donnees->interpretations) ?></p><br>
			<label for="">Conclusion :</label>
			<p><?php echo nl2br($donnees->conclusion) ?></p>
			<!-- contenu spécial anapath -->

			<?php 	
			}
			else if ($_GET['type']=="frottismilieuliquide" or $_GET['type']=="frottisvaginal") {
			?>
			
			<!-- <h2>ANATOMIE ET CYTOLOGIE PATHOLOGIQUES</h2> -->

			<label for="">Nature du prélèvement :</label><p><?php echo $donnees->naturePrelevement ?></p>
			<label for="">Renseignements Cliniques :</label>
			<p><?php echo $donnees->renseignementsCliniques ?></p><br>
			<label for="">Compte Rendu du :</label><span><?php echo date('Y-m-d',strtotime($donnees->dateCompteRendu)) ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label for="">Transmis A :</label><?php echo $donnees->transmisA ?><br>
			<label for="">INTERPRETATIONS</label><br>
			<p><?php echo $donnees->interpretations ?></p>
			
			
			<label for="">Conclusion :</label>
			<p><?php echo $donnees->conclusion ?></p>
			
			<?php 
			}
			else if ($_GET['type']=="myelogramme") {
			
			?>

			<h2>MYELOGRAMME</h2>

			<label for="">Renseignements Cliniques</label><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, non delectus saepe natus, reprehenderit dolor quam consequuntur ab sed ea voluptates, doloribus dolorum? Quae officia aliquam ex cumque, adipisci quod enim consectetur quo veritatis et maiores officiis illum, explicabo sint saepe amet molestias, quasi iure omnis vitae itaque ullam doloremque!</p>
			
			<label for="">OS FONCTIONNE</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label for="">RICHESSE</label><br>
			<label for="">FORMULE</label>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>LIGNEE GRANULOCITAIRE</th>
						<th></th>
						<th>LIGNEE ERYTHROBLASTIQUE</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Neutrophile</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Myeloblastes</td>
						<td></td>
						<td>Proerythroblaste</td>
						<td></td>
					</tr>
					<tr>
						<td>Promyelocytes</td>
						<td></td>
						<td>Erythroblastes basophiles</td>
						<td></td>
					</tr>
					<tr>
						<td>Myelocytes</td>
						<td></td>
						<td>E-Polychromatophile</td>
						<td></td>
					</tr>
					<tr>
						<td>Metamyelocytes</td>
						<td></td>
						<td>Erythroblaste acidophile</td>
						<td></td>
					</tr>
					<tr>
						<td>Polynucléaires</td>
						<td></td>
						<td>E-Polychrome</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Mégaloblaste</td>
						<td></td>
					</tr>
					<tr>
						<td>Eosinophile</td>
						<td></td>
						<td>Autres Lignées</td>
						<td></td>
					</tr>
					<tr>
						<td>Myelocytes</td>
						<td></td>
						<td>Lymphocytaire</td>
						<td></td>
					</tr>
					<tr>
						<td>Métamyelocytes</td>
						<td></td>
						<td>Plasmocytaire</td>
						<td></td>
					</tr>
					<tr>
						<td>Polynucléaires</td>
						<td></td>
						<td>Monocytaire</td>
						<td></td>
					</tr>
					<tr>
						<td>Basophile</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<label for="">LIGNEE THROMBOCYTAIRE</label><br>
			<label for="">INTERPRETATIONS</label><br>
			<p><?php if (isset($donnees->interpretations)) echo nl2br($donnees->interpretations); ?></p>
			<label for="">CONCLUSION</label><br>
			<p><?php if (isset($donnees->conclusion)) echo nl2br($donnees->conclusion); ?></p>

			<?php 
			}
			else if ($_GET['type'] == 'spermogramme')
			{
			?>
			
			<h2>SPERMOGRAMME</h2>
			<label for="">RENSEIGNEMENTS CLINIQUES :</label><br>
			<p><?php echo $donnees->renseignementsCliniques ?></p>
			
				
				<label for="">ABSTINENCE :</label><?php echo $donnees->abstinence ?><br>
				<label for="">VOLUME :</label><?php echo $donnees->volume ?><br>
				<label for="">FLUDIFICATION :</label><?php echo $donnees->fludification ?><br>

			
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-5">
					<label for="">PH</label><?php echo $donnees->ph ?><br>
					<label for="">ASPECT</label><?php echo $donnees->aspect ?><br>
			</div>

			<label for="">NUMERATION :</label><br>
			<label for="">par mm3</label><?php echo $donnees->numerationmm3 ?><br>
			<label for="">par ml</label><?php echo $donnees->numerationml ?><br>
			<label for="">par éjaculat</label><?php echo $donnees->numerationeja ?><br>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>MOBILITE (EN % APRES FLUDIFICATION)</th>
						<th>(1H)</th>
						<th>!</th>
						<th>(4H)</th>
                        <th>!</th>
						<th>(24H)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>trajet direct rapide</td>
						<td><?php echo $donnees->tdr1 ?></td>
						<td>!</td>
						<td><?php echo $donnees->tdr4 ?></td>
                        <td>!</td>
						<td><?php echo $donnees->tdr24 ?></td>
					</tr>
					<tr>
						<td>Mobilité diminuée</td>
						<td><?php echo $donnees->mobd1 ?></td>
						<td>!</td>
						<td><?php echo $donnees->mobd4 ?></td>
                        <td>!</td>
						<td><?php echo $donnees->mobd24 ?></td>
					</tr>
					<tr>
						<td>Immobilité</td>
						<td><?php echo $donnees->immo1 ?></td>
						<td>!</td>
						<td><?php echo $donnees->immo4 ?></td>
                        <td>!</td>
						<td><?php echo $donnees->immo24 ?></td>
					</tr>
				</tbody>
			</table>
			<label for="">VITALITE (COLORATION DE BLOOM)</label><?php echo $donnees->vitalite ?><br>

			<h3>CYTOLOGIE:</h3>
			<label for="">Agglutination spontanée en amas:</label><?php echo $donnees->aggluAmas ?><br>
			<label for="">Formes anormales</label><?php echo $donnees->formesAnormales ?><br>
			<label for="">Principales Anomalies constatées:</label>
			<p><?php echo $donnees->PAC ?></p>
			<label for="">Autres éléments de la lignée spermatique</label>
			<p><?php echo $donnees->autresELS ?></p>
			<label for="">Cellules rondes</label>
			<p><?php echo $donnees->cellulesR ?></p>
			<label for="">Divers</label>
			<p><?php echo $donnees->divers ?></p>
			<label for="">Conclusion</label>
			<p><?php echo $donnees->conclusion ?></p>
				
			

			 <?php }?>
			 <p><br><?php echo $donnees->medecinSaisie ?></p>
		</div>


	


	</div>
</body>
</html>
<style>
	div .row {
		border:2px solid #000;
	}
	#entete label
	{
		width: 30%;
	}
	#corps label
	{
		width: 30%;
	}
	.col-md-offset-5
	{
		position: absolute;
		margin-top: -5%;
	}
	body
	{
		margin-top: 2%;
		font-size: 1.5em;
	}
	#btnRetour
	{
		margin-bottom: 1%;
	}
	#btnImprimer
	{
		
		margin-left:45%;
	}

	
</style>