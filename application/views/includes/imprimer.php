<?php
	ob_start();
	include 'includes/connectDb.php';
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$type = $_GET['type'];
		$req = $bdd->query("SELECT * FROM analyses WHERE idAna='$id'");
		$donnees = $req->fetch(PDO::FETCH_OBJ);


	}

 ?>
 <style>

 	table{
 		font-family: DejaVuSans;
 		font-size: 10pt;
 		width: 100%;
 	}
 	#tabTest
 	{
 		width: 90%;
 	}
 	#tabTest tr td
 	{
 		position: relative;
 		width: 25%;
 	}
 	#entete,#infosGene
 	{
 		border-bottom: 2px solid black;
 	}
 	#tab2
 	{
 		width:100%;
 	}
 	#tab2 td
 	{
 		position: relative;
 		width: 20%;
 	}

 	#tab2 .first
 	{
 		position: relative;
 		width:45%;
 	}
 	#tab2 .third
 	{
 		position: relative;
 		width:10%;
 	}
     
      	#tab3
 	{
 		width:100%;
 	}
 	#tab3 td
 	{
 		position: relative;
 		width: 40%;
 	}
     
     #tab3 .first
 	{
 		position: relative;
 		width:20%;
 	}
     
       	#tab4
 	{
 		width:100%;
 	}
 	#tab4 td
 	{
 		position: relative;
 		width: 10%;
 	}
     
     #tab4 .first
 	{
 		position: relative;
 		width:20%;
 	}
     
     /*#tab2 .third
 	{
 		position: relative;
 		width:20%;
 	}*/


 	.num
 	{
 		padding-left: 100px;
 		padding-right: 125px;
 	}

 	#infosGene
 	{
 		width: 100%;
 	}
 	#infosGene tr td
 	{
 		width: 50%;
 	}
 	#infosGene tr td label
 	{

 		width: 50%;
 	}
 	.cptr
 	{
 		padding-bottom: 5px;
 		border-bottom: 2px solid black;

 	}

 </style>
<page>
		<table id="entete">
			<tr>
				<td style="text-align:center; width: 100%;" colspan="3"><h2>HOPITAL PRINCIPAL DE DAKAR <br>FEDERATION DES LABORATOIRES <br>
	ANATOMIE ET CYTOLOGIE PATHOLOGIQUES</h2></td>
			</tr>
			<tr>
				<td><strong>Chef de service : Méd Col Yankhoba DIOP</strong></td>
			</tr>
			<tr>
				<td><strong>Adjoint :</strong></td>
			</tr>
			<tr>
				<td><strong>Assistants</strong> : Méd cdt E.S. SARR</td>
				<td>Méd cdt R.F.B DIOP</td>
				<td>Méd cne M. NDIAYE</td>
			</tr>
			<tr>
			<td>Tel: +221 33 839 50 44</td>
			<td>Avenue Nelson Mandela BP 3006 DAKAR </td>
			<td><label> Fax: +221 33 839 50 88</label></td>


			</tr>

			<!-- IMPRESSION RECEPTION -->




		</table>
		<table id="infosGene">
		<?php if (!isset($_GET['recep'])) {?>
			<tr>
				<td><label for=""><strong>NOM:</strong></label> <?php echo $donnees->nomPatient ?></td>
				<td><label for=""><strong>CODE ANALYSE:</strong></label><?php echo $donnees->codeAna ?></td>
			</tr>
			<tr>
				<td><label for=""><strong>PRENOM:</strong></label><?php echo $donnees->prenomPatient ?></td>
			</tr>
			<tr>
				<td><label for=""><strong>AGE:</strong></label><?php echo $donnees->agePatient." ".$donnees->nb ?></td>
				<td><label for=""><strong>EXAMEN NUMERO:</strong></label><?php echo $donnees->numExam ?></td>
			</tr>
			<tr>
				<td><label for=""><strong>SEXE:</strong></label><?php echo $donnees->sexe ?></td>
			</tr>
			<tr>
				<td><label for=""><strong>MEDECIN TRAITANT:</strong></label><?php echo $donnees->medecinTraitant ?> </td>
				<td><label for=""><strong>DATE DE PRELEVEMENT:</strong></label><?php echo date('d-m-Y',strtotime($donnees->datePrelevement)) ?></td>
			</tr>
			<tr>
				<td><label for=""><strong>SERVICE:</strong></label><?php echo $donnees->service ?></td>
				<td><label for=""><strong>DATE DE SORTIE:</strong></label><?php echo date('d-m-Y',strtotime($donnees->dateSortie)) ?></td>
			</tr>
			<?php } ?>
		</table>
		<?php
		if (isset($_GET['recep']))
		{ ?>

		<h4 style="text-align:center;">NE RIEN ECRIRE DANS CE CADRE: RESERVE AU LABORATOIRE</h4>
		<h4><u> RECEPTION LE</u> : <?php echo $donnees->datePrelevement; ?> &nbsp;<u>NUMERO D'INSCRIPTION AU SERVICE ANAPATH</u> : <?php echo $donnees->numExam; ?></h4>
		<h4><u>OBSERVATIONS:</u></h4><br><br><br><br>

		<div style="width:100%;border-top:2px solid black;margin-bottom:2%;"></div>

		<strong>EXAMEN DEMANDE PAR LE DOCTEUR</strong> : <span style="margin-right: 50px;"><?php echo $donnees->medecinTraitant; ?></span>

		<strong style="margin-left: 200px;">SERVICE : </strong> <?php echo $donnees->service; ?><br><br>

		<strong>NOM ET PRENOM(S) DU PATIENT: </strong><?php echo $donnees->nomPatient." ".$donnees->prenomPatient ?><br><br>

		<div style="text-align: center;"><strong>Age ou date de naissance : </strong><?php echo $donnees->agePatient." ".$donnees->nb ?><strong> Ethnie : </strong></div>

		<h4 style=""></h4>
		<div style="width:100%;border-bottom:2px solid black;text-align: center;"><strong>RENSEIGNEMENTS CLINIQUES</strong></div>
		<p align="center"><?php echo nl2br($donnees->renseignementsCliniques) ?></p><br>

		<div style="text-align: center;"><strong>NATURE DU PRELEVEMENT OU DE L'INTERVENTION PIECE(S) ADRESSE</strong></div>
		<p align="center"><?php echo nl2br($donnees->naturePrelevement) ?></p><br>


		<div style="width:100%;border-top:2px solid black;margin-bottom:2%;"></div>

		<strong>DATE DE PRELEVEMENT : </strong><?php echo date("d-m-Y",strtotime($donnees->datePrelevement)) ?> &nbsp; <strong style="margin-left:100px;">RESULTAT A TRANSMETTRE A : </strong> <?php echo $donnees->transmisA ?>

		<div style="margin-top:100px; float: right;"><strong>SIGNATURE</strong></div>

		<?php } ?>

	<?php


		if ($_GET['type'] == 'anapath' and !isset($_GET['recep'])) {
			?>
		<h2 style="text-align:center;">HISTOLOGIE</h2>
		<table id="corps">
			<tr>
				<td><label for=""><strong>NATURE DU PRELEVEMENT: </strong></label><br><?php echo nl2br($donnees->naturePrelevement) ?></td>
			</tr>
			<tr></tr>
			<tr>
				<td><br><label for=""><strong>RENSEIGNEMENTS CLINIQUES: </strong></label><br>
				<?php echo nl2br($donnees->renseignementsCliniques) ?><br><br></td>
			</tr>
			<tr>
				<td class="cptr"><label for=""><strong>COMPTE RENDU DU: </strong></label><span><?php echo date('d-m-Y',strtotime($donnees->dateCompteRendu)) ?>&nbsp;&nbsp;</span><strong>&nbsp;&nbsp;&nbsp;  TRANSMIS A: </strong><span><?php echo $donnees->transmisA ?></span><br></td>
			</tr>
			<tr></tr>
			<tr>
				<td><br><label for=""><strong>INTERPRETATIONS: </strong></label>
				<p><?php echo nl2br($donnees->interpretations) ?></p><br>
				</td>
			</tr>
			<tr>
				<td>
				<strong>CONCLUSION : <?php echo $donnees->numExam ?></strong>
				<p><?php echo $donnees->conclusion ?></p>
				</td>
			</tr>
		</table>


<?php
		}
		else if ($_GET['type'] == 'frottismilieuliquide' or $_GET['type'] == 'frottisvaginal') {
?>
		<!-- <h2 style="text-align:center;">ANATOMIE ET CYTOLOGIE PATHOLOGIQUES</h2> -->
		<?php if ($_GET['type'] == 'frottismilieuliquide')
			echo "<h2 style='text-align:center;'>FROTTIS EN MILIEU LIQUIDE</h2>";
		else

			echo "<h2 style='text-align:center;'>FROTTIS VAGINAL</h2>";

			?>
		<table id="corps">
			<tr>
				<td><label for=""><strong>NATURE DU PRELEVEMENT:: </strong></label><br><?php echo nl2br($donnees->naturePrelevement) ?></td>
			</tr>
			<tr></tr>
			<tr>
				<td><br><label for=""><strong>RENSEIGNEMENTS CLINIQUES: </strong></label><br>
				<?php echo nl2br($donnees->renseignementsCliniques) ?><br><br></td>
			</tr>
			<tr>
				<td class="cptr"><label for=""><strong>COMPTE RENDU DU: </strong></label><span><?php echo date('d-m-Y',strtotime($donnees->dateCompteRendu)) ?></span><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRANSMIS A: </strong><span><?php echo $donnees->transmisA ?></span><br><br></td>
			</tr>
			<?php if ($_GET['type']=='frottismilieuliquide') {
				?>
				<tr>
					<td><br><label for=""><strong>INTERPRETATIONS</strong></label>
					<p><?php echo nl2br($donnees->interpretations) ?></p><br><br></td>
				</tr>
				<?php
			}
			else { ?>
			<tr>
				<td><label for=""><strong>FROTTIS VAGINAL ET EXOCERVICAL</strong></label>
				<p><?php echo nl2br($donnees->frottisVEC) ?></p><br></td>
			</tr>
			<tr>
				<td><label for=""><strong>FROTTIS ENDOCERVICAL</strong></label>
				<p><?php echo nl2br($donnees->frottisEC) ?></p><br></td>
			</tr>
			<?php } ?>
			<tr>
				<td><label for=""><strong>CONCLUSION: <?php echo $donnees->numExam; ?></strong></label>
				<p><?php echo nl2br($donnees->conclusion) ?></p></td>
			</tr>


		</table>

<?php
		}
		else if ($_GET['type'] == 'myelogramme') {
?>
		<!-- contenu spécial myelo -->
		<h2 style="text-align:center;">MYELOGRAMME</h2>
		<table id="corps">
			<tr>
				<td>
					<label for=""><strong>RENSEIGNEMENTS CLINIQUES</strong></label>
					<p><?php echo nl2br($donnees->renseignementsCliniques) ?></p>
				</td>
			</tr>
			<tr>
				<td><label for=""><strong>OS FONCTIONNE : </strong></label><?php echo $donnees->osFonctionne ?></td>
				<td><label for=""><strong>RICHESSE : </strong></label><?php echo $donnees->richesse ?></td>
			</tr>
			<tr>
				<td><label for=""><strong>FORMULE : </strong></label><?php echo $donnees->formule ?></td>
			</tr>
		</table>
		<table>
			<tr>
				<td><strong>LIGNEE GRANULOCITAIRE</strong> </td>
				<td><?php echo $donnees->ligneeG ?></td>
				<td>LIGNEE ERYTHROBLASTIQUE</td>
				<td><?php echo $donnees->ligneeE ?></td>
			</tr>
			<tr>
				<td><strong>NEUTROPHILE</strong></td>
				<td><?php echo $donnees->neutro ?></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><strong>Myeloblastes</strong></td>
				<td><?php echo $donnees->myeloblastes ?></td>
				<td><strong>Proerythroblastes</strong></td>
				<td><?php echo $donnees->proErythroblastes ?></td>
			</tr>
			<tr>
				<td><strong>Promyelocytes</strong></td>
				<td><?php echo $donnees->promyelocytes ?></td>
				<td><strong>Erythroblastes Basophiles</strong></td>
				<td><?php echo $donnees->erythroblastesBaso ?></td>
			</tr>
			<tr>
				<td><strong>Myelocytes</strong></td>
				<td><?php echo $donnees->myelocytesN ?></td>
				<td><strong>E-polychromatophiles</strong></td>
				<td><?php echo $donnees->ePolychromato ?></td>
			</tr>
			<tr>
				<td><strong>Métamyelocytes</strong></td>
				<td><?php echo $donnees->metaMyelocytesN ?></td>
				<td><strong>Eryhtroblastes Acidophiles</strong></td>
				<td><?php echo $donnees->erythroblastesAcido ?></td>
			</tr>
			<tr>
				<td><strong>Polynucléaires</strong></td>
				<td><?php echo $donnees->polyNucleairesN ?></td>
				<td><strong>E-Polychrome</strong></td>
				<td><?php echo $donnees->ePolychrome ?></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><strong>Mégaloblastes</strong></td>
				<td><?php echo $donnees->megaloblaste ?></td>
			</tr>
			<tr>
				<td><strong>Eosinophile</strong></td>
				<td><?php echo $donnees->eosinophile ?></td>
				<td><strong>Autres Lignées</strong></td>
				<td><?php echo $donnees->autresLignees ?></td>
			</tr>
			<tr>
				<td><strong>Myelocytes</strong></td>
				<td><?php echo $donnees->myelocytesE ?></td>
				<td><strong>Lymphocytaire</strong></td>
				<td><?php echo $donnees->lymphocytaire ?></td>
			</tr>
			<tr>
				<td><strong>Métamyélocytes</strong></td>
				<td><?php echo $donnees->metaMyelocytesE ?></td>
				<td><strong>Plasmocytaire</strong></td>
				<td><?php echo $donnees->plasmocytaire ?></td>
			</tr>
			<tr>
				<td><strong>Polynucléaires</strong></td>
				<td><?php echo $donnees->polyNucleairesE ?></td>
				<td><strong>Monocytaire</strong></td>
				<td><?php echo $donnees->monocytaire ?></td>
			</tr>
			<tr>
				<td><strong>Basophile</strong></td>
				<td><?php echo $donnees->basophile ?></td>
				<td></td>
				<td></td>
			</tr>

		</table>
		<table>
			<tr>
				<td><strong>LIGNEE THROMBOCYTAIRE : </strong><?php echo $donnees->ligneeT ?></td><br>
			</tr>
			<tr>
				<td><strong>INTERPRETATIONS</strong>
				<p><?php echo nl2br($donnees->interpretations) ?></p></td><br>
			</tr>
			<tr>
				<td><strong>CONCLUSION : <?php echo $donnees->numExam; ?></strong>
				<p><?php echo nl2br($donnees->conclusion) ?></p></td>
			</tr>
		</table>

<?php
		}
		else if ($_GET['type'] == 'coital') {
			?>
			<h3 style="text-align: center;"><u>TEST POST COITAL</u><br>(Test de HUHNER, mise à jour juin 2004)</h3>
			<strong>Abstinence respectée (minimums 3 jours) : </strong> <?php echo $donnees->abstinence; ?><br>
			<strong for="" style="margin-right:5%;">Traitement préalable :</strong> <?php echo $donnees->traitementPrealable; ?> <br>
			<h4>SCORE CERVICAL D'INSLER:</h4>
			<table border="1" id="tabTest">
				<tr>
					<td></td>
					<td>1</td>
					<td>2</td>
					<td>3</td>
				</tr>
				<tr>
					<td>Col</td>
					<td><?php if($donnees->col==1) echo "<strong>"; ?> Punctiforme<?php if($donnees->col==1) echo "</strong>"; ?></td>
					<td><?php if($donnees->col==2) echo "<strong>"; ?>Ouvert<?php if($donnees->col==2) echo "</strong>"; ?></td>
					<td><?php if($donnees->col==3) echo "<strong>"; ?>Fermé<?php if($donnees->col==3) echo "</strong>"; ?></td>
				</tr>
				<tr>
					<td>Filance</td>
					<td><?php if($donnees->filance==1) echo "<strong>"; ?>1-4cm<?php if($donnees->filance==1) echo "</strong>"; ?></td>
					<td><?php if($donnees->filance==2) echo "<strong>"; ?>5-8cm<?php if($donnees->filance==2) echo "</strong>"; ?></td>
					<td><?php if($donnees->filance==3) echo "<strong>"; ?>> 8cm<?php if($donnees->filance==3) echo "</strong>"; ?></td>
				</tr>
				<tr>
					<td>Abondance</td>
					<td><?php if($donnees->abondance==1) echo "<strong>"; ?>Minime<?php if($donnees->abondance==1) echo "</strong>"; ?></td>
					<td><?php if($donnees->abondance==2) echo "<strong>"; ?>Gouttes<?php if($donnees->abondance==2) echo "</strong>"; ?></td>
					<td><?php if($donnees->abondance==3) echo "<strong>"; ?>Cascade<?php if($donnees->abondance==3) echo "</strong>"; ?></td>
				</tr>
				<tr>
					<td>Cristallisation</td>
					<td><?php if($donnees->cristallisation==1) echo "<strong>"; ?>Linéaire<?php if($donnees->cristallisation==1) echo "</strong>"; ?></td>
					<td><?php if($donnees->cristallisation==2) echo "<strong>"; ?>Partielle<?php if($donnees->cristallisation==2) echo "</strong>"; ?></td>
					<td><?php if($donnees->cristallisation==3) echo "<strong>"; ?>Complète<?php if($donnees->cristallisation==3) echo "</strong>"; ?></td>
				</tr>
			</table>
			<strong>Total Score Insler : <?php echo $donnees->totalScoreInsler; ?></strong>
			<p>
                <?php if ($donnees->totalScoreInsler > 7) echo "<strong>"; ?>Insler &gt; 7 : glaire "fonctionnelle" (possède les caractéristiques pré ovulaire)<?php if ($donnees->totalScoreInsler > 7) echo "</strong>"; ?><br >
                <?php if ($donnees->totalScoreInsler < 7) echo "<strong>"; ?>Insler &lt; 7 : glaire "non fonctionnelle" (inadéquate)<?php if ($donnees->totalScoreInsler < 7) echo "</strong>"; ?>
            </p>

             <p>
             	<strong>Nombre de spermatozoïdes/champs</strong>
             	<ul>
             		<li><?php if ($donnees->nbSC == 0) echo "<strong>"; ?>0<?php if ($donnees->nbSC == 0) echo "</strong>"; ?></li>
             		<li><?php if ($donnees->nbSC == 1) echo "<strong>"; ?>Pauvre: moins de 5<?php if ($donnees->nbSC == 1) echo "</strong>"; ?></li>
             		<li><?php if ($donnees->nbSC == 2) echo "<strong>"; ?>Satisfaisant: 20 à 50<?php if ($donnees->nbSC == 2) echo "</strong>"; ?></li>
             		<li><?php if ($donnees->nbSC == 3) echo "<strong>"; ?>Normal: >50<?php if ($donnees->nbSC == 3) echo "</strong>"; ?></li>
             	</ul>
             	<strong>Degré de mobilité</strong>
             	<ul>
             		<li><?php if ($donnees->degreMobD == 0) echo "<strong>"; ?>Progression en diagonale(N)<?php if ($donnees->degreMobD == 0) echo "</strong>"; ?></li>
             		<li><?php if ($donnees->degreMobD == 1) echo "<strong>"; ?>Sur place, oscillants<?php if ($donnees->degreMobD == 1) echo "</strong>"; ?></li>
             		<li><?php if ($donnees->degreMobD == 2) echo "<strong>"; ?>Nul<?php if ($donnees->degreMobD == 2) echo "</strong>"; ?></li>
             	</ul>
             	<strong>Présence d'agglutinats(possibilité d'anticorps)</strong> 
                <?php if ($donnees->presenceAgglu == 1) echo "<strong>"; ?>OUI<?php if ($donnees->presenceAgglu == 1) echo "</strong>"; ?>
                / 
                <?php if ($donnees->presenceAgglu == 0) echo "<strong>"; ?>NON<?php if ($donnees->presenceAgglu == 0) echo "</strong>"; ?>
             </p><br>
             <strong>CONCLUSION</strong> : <?php echo nl2br($donnees->conclusion); ?>



		<?php }
		else if ($_GET['type'] == 'spermogramme') {
?>
		<h3 style="text-align: center;">SPERMOGRAMME N° : <?php echo $donnees->numExam; ?></h3>
		<table id="tab3">
			<tr>
				<td>
					<strong>Renseignements Cliniques</strong> <span><?php echo nl2br($donnees->renseignementsCliniques) ?></span>
				</td>
			</tr>
			<tr>
				<td><strong>ABSTINENCE : </strong><?php echo $donnees->abstinence ?> jours</td>
			</tr>

			<tr style="margin-right: 10%">
				<td class="first" style="padding-left: auto"><strong>VOLUME : </strong> <?php echo $donnees->volume ?> ml   </td>        
				<td class="first" style="padding-left: auto"><strong>PH :</strong> <span><?php echo $donnees->ph ?></span></td>
				<td class="third" style="padding-left: auto"><strong>ASPECT :</strong><?php echo $donnees->aspect ?></td>
			</tr>

			<tr>
				<td><span><strong>FLUDIFICATION :</strong></span><?php echo $donnees->fludification ?><br><br></td>
			</tr>
		</table>
		<table>
			<tr>
				<td><strong>NUMERATION : </strong></td>
				<td class="" > <strong>par mm3</strong> <?php echo $donnees->numerationmm3 ?></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td class=""> <strong>par ml</strong> <?php echo $donnees->numerationml ?></td>
				<td></td>
			</tr>
			<tr>
				<td> </td>
				<td class=""> <strong>par éjaculat</strong>  <?php echo $donnees->numerationeja ?></td>
				<td></td>
			</tr>
		</table>
		<br>
		<table id="tab4">
			<tr>
				<td class="first" ><strong>MOBILITE EN % APRES FLUDIFICATION</strong></td>
                <td>!</td>
				<td><strong>(1H)</strong></td>
				<td >!</td>
				<td><strong>(4H)</strong></td>
                <td> !</td>
				<td><strong>(24H)</strong></td>
                <td>!</td>
			</tr>
			<tr>
				<td class="first" style="padding-left:100px;"><strong>trajet direct rapide</strong></td>
                <td>!</td>
				<td><?php echo $donnees->tdr1 ?> %</td>
				<td>!</td>
				<td><?php echo $donnees->tdr4 ?> %</td>
                <td>!</td>
                <td><?php echo $donnees->tdr24 ?> %</td>
                <td>!</td>
			</tr>
			<tr>
				<td class="first" style="padding-left:100px;" ><strong>mobilité diminuée</strong></td>
                <td>!</td>
				<td><?php echo $donnees->mobd1 ?> %</td>
				<td>!</td>
				<td><?php echo $donnees->mobd4 ?> %</td>
                <td>!</td>
                <td><?php echo $donnees->mobd24 ?> %</td>
                <td>!</td>
			</tr>
			<tr>
				<td class="first" style="padding-left:100px;"><strong>Immobile</strong></td>
                <td>!</td>
				<td><?php echo $donnees->immo1 ?> %</td>
				<td>!</td>
				<td><?php echo $donnees->immo4 ?> %</td>
                <td>!</td>
                <td><?php echo $donnees->immo24 ?> %</td>
                <td>!</td>
			</tr>
		</table>
		<table>
			<tr><td><br><strong>VITALITE (Coloration de BLOOM):  </strong><span><?php echo $donnees->vitalite ?></span></td></tr>
            <tr>
            <td><strong>CYTOLOGIE:</strong><br><br></td>
            </tr>
			<tr>
				
                <td><strong><span style="margin-left:50px;">Agglutination en amas: </span></strong>
                    <span><?php echo $donnees->aggluAmas ?></span><br><br>
                </td>
            </tr>
            <tr>
                <td><span style="margin-left:50px;"><strong>Formes anormales (en %) :</strong> </span><span><?php echo $donnees->formesAnormales ?></span><br><br></td>
			</tr>
			<tr>
				<td>
					<span style="margin-left:50px;">
					<strong>Principales anomalies constatées: </strong>
                    </span>
					<span><?php echo nl2br($donnees->PAC) ?></span><br><br>
				</td>
			</tr>
			<tr>
				<td >
					<span style="margin-left:50px;">
					<strong>Autres éléments de la lignée spermatique :</strong>&nbsp;
                    </span>
						<span><?php echo nl2br($donnees->autresELS) ?></span><br><br>
				</td>
			</tr>
			<tr>
				<td >
					<span style="margin-left:50px;">
					<strong>Cellules rondes :</strong>
                    </span>
                        <span><?php echo nl2br($donnees->cellulesR) ?></span><br><br>
				</td>
			</tr>
			<tr>
				<td>
                    <span style="margin-left:50px;">
					<strong>Divers :</strong><span><?php echo nl2br($donnees->divers) ?></span>
                     </span><br><br>
				</td>
			</tr>
			<tr>
				<td>
					<strong>Conclusion : </strong>
					<span><?php echo nl2br($donnees->conclusion) ?></span><br><br>
				</td><br><br>
			</tr>
		</table>

<?php
		}
	 ?>
	 <table>
	 	<tr>
	 		<td><br><br><?php echo "\n".$donnees->medecinSaisie ?></td>
	 	</tr>
	 </table>
	 <page_footer>
	 	<hr>
	 	<p align="center" style="font-style: italic;">Pour toute nouvelle demande, Merci de préciser les références des examens antérieurs.</p>
	 </page_footer>

</page>
 <?php
 	$content = ob_get_clean();
 	require 'includes/html2pdf/vendor/autoload.php';
 	// require_once('includes/pjmail/pjmail.class.php');
 	try {
 		$pdf = new HTML2PDF('P','A4','fr');
 		$pdf->pdf->SetDisplayMode('fullpage');
 		$pdf->writeHTML($content);
 		$nom = date('d-m-Y-H-i-s');$nom2 = $donnees->prenomPatient." ".$donnees->nomPatient;
 		$msg = '';
 		//$pdf->Output($_GET['type']."_".$nom.".pdf",'D');

 		if (isset($_GET['envoi'])) {
 			$content_PDF = $pdf->Output('', true);
 			return mail("dahirma@gmail.com", "Sujet", "message test");

 		}
 		else
 		{
 			$pdf->Output($_GET['type']."_".$nom2.".pdf",'D');
 		}

 	} catch (HTML2PDF_exception $e) {
 		die($e);
 	}
  ?>
