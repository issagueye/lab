<?php 
	ob_start();
	include 'includes/connectDb.php';
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$type = $_GET['type'];
		$req = $bdd->query("SELECT * FROM $type WHERE id='$id'");
		$donnees = $req->fetch(PDO::FETCH_OBJ);

	}

 ?>
 <style>
 	
 	table{
 		font-family: DejaVuSans;
 		font-size: 10pt;
 		width: 100%;
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
				<td>Méd cdt M. NDIAYE</td>
			</tr>
			<tr>
			<td>Tel: +221 33 839 50 44</td>
			<td>Avenue Nelson Mandela BP 3006 DAKAR </td>
			<td><label> Fax: +221 33 839 50 88</label></td>
			
				
			</tr>
		</table>
		<table id="infosGene"> 
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
		</table>

	<?php 
		if ($_GET['type'] == 'anapath') {
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
		<table border="1">
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
		else {
?>
		<h3 style="text-align: center;">SPERMOGRAMME N° : <?php echo $donnees->numExam; ?></h3>
		<table id="corps">
			<tr>
				<td><strong>Renseignements Cliniques</strong><br>
				<p><?php echo nl2br($donnees->renseignementsCliniques) ?></p></td>
			</tr>
			<tr>
				<td><strong>ABSTINENCE : </strong><?php echo $donnees->abstinence ?> jours</td>
				<td><strong style="margin-left: -50px;">VOLUME : </strong> <?php echo $donnees->volume ?> ml</td>
				
			</tr>
			<tr>
				<td><strong>PH : </strong> <span><?php echo $donnees->ph ?></span></td>
				
				<td><span style="margin-left: -50px;"><strong>ASPECT :</strong></span></td>
				<td><?php echo $donnees->aspect ?></td>
				<td><span style="margin-left: 100px;"><strong>FLUDIFICATION :</strong></span><?php echo $donnees->fludification ?><br><br></td>
			</tr>
			
			<tr>
				<td><strong>NUMERATION : </strong></td>
			</tr>
			<tr>
				
				<td class="num"> <strong>par mm3</strong> </td><td><?php echo $donnees->numerationmm3 ?></td>
			</tr>
			<tr>
				<td class="num"> <strong>par ml</strong> </td><td><?php echo $donnees->numerationml ?></td>
			</tr>
			<tr>
				<td class="num"> <strong>par éjaculat</strong>  </td><td><?php echo $donnees->numerationeja ?><br><br></td>
			</tr>
		</table>
		<table id="tab2">
			<tr>
				<td class="first"><strong>MOBILITE EN % APRES FLUDIFICATION</strong></td>
				<td><strong>(1H)</strong></td>
				<td class="third">!</td>
				<td><strong>(4H)</strong></td>
			</tr>
			<tr>
				<td class="first" style="padding-left:100px;"><strong>trajet direct rapide</strong></td>
				<td><?php echo $donnees->tdr1 ?> %</td>
				<td class="third">!</td>
				<td><?php echo $donnees->tdr4 ?> %</td>
			</tr>
			<tr>
				<td class="first" style="padding-left:100px;"><strong>mobilité diminuée</strong></td>
				<td><?php echo $donnees->mobd1 ?> %</td>
				<td class="third">!</td>
				<td><?php echo $donnees->mobd4 ?> %</td>
			</tr>
			<tr>
				<td class="first" style="padding-left:100px;"><strong>Immobile</strong></td>
				<td><?php echo $donnees->immo1 ?> %</td>
				<td class="third">!</td>
				<td><?php echo $donnees->immo4 ?> %</td>
			</tr>
		</table>
		<table>
			<tr><td><br><strong>VITALITE (Coloration de BLOOM):  </strong><span><?php echo $donnees->vitalite ?></span></td></tr>
			<tr>
				<td><strong>CYTOLOGIE:</strong><br><span style="margin-left:50px;">Agglutination en amas: </span><?php echo $donnees->aggluAmas ?><br><span style="margin-left:50px;">Formes anormales (en %) : </span><?php echo $donnees->formesAnormales ?></td>
			</tr>
			<tr>
				<td>
					<strong>Principales anomalies constatées: </strong>
					<p style="margin-left:25px;">
						<?php echo nl2br($donnees->PAC) ?>
					</p><br>
				</td>
			</tr>
			<tr>
				<td>
					<strong>Autres éléments de la lignée spermatique :</strong>
					<p></p><br>
				</td>
			</tr>
			<tr>
				<td>
					<strong>Cellules rondes :</strong><span><?php echo nl2br($donnees->cellulesR) ?></span><br><br>					
				</td>
			</tr>
			<tr>
				<td>
					<strong>Divers :</strong><span><?php echo nl2br($donnees->divers) ?></span><br><br>					
				</td>
			</tr>
			<tr>
				<td>
					<strong>Conclusion : <?php echo $donnees->numExam ?></strong><br><br><br>
					<p style="z-index: 25; position: fixed; margin-top:-28px;margin-left:100px;"><?php echo nl2br($donnees->conclusion) ?></p><br><br>
				</td>
			</tr>
		</table>

<?php 
		}
	 ?>
	 <table>
	 	<tr>
	 		<td><br><br><?php echo "\n\n".$donnees->medecinSaisie ?></td>
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
 		$nom = date('d-m-Y-H-i-s');
 		$msg = '';
 		//$pdf->Output($_GET['type']."_".$nom.".pdf",'D');

 		if (isset($_GET['envoi'])) {
 			$content_PDF = $pdf->Output('', true); 
 			return mail("mamadou08.diallo@ism.edu.sn", "Sujet", "message test");
		   
 		}
 		else 
 		{
 			$pdf->Output($_GET['type']."_".$nom.".pdf",'D');
 		}
 		
 	} catch (HTML2PDF_exception $e) {
 		die($e);
 	}
  ?>