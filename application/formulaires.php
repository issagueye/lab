<?php Include('header_start.php');?>
<?php 
        include 'connectDb.php';
        $retour = "";
        switch ($_GET['page']) {
            case 'histologie':
                $retour = "index.php?page=lastrec&table=anapath";
                break;
            case 'frottisM':
                $retour = "index.php?page=lastrec&table=frottismilieuliquide";
                break;
            case 'frottisv':
                $retour = "index.php?page=lastrec&table=frottisvaginal";
                break;
            case 'myelo':
                $retour = "index.php?page=lastrec&table=myelogramme";
                break;
            case 'spermo':
                $retour = "index.php?page=lastrec&table=spermogramme";
                break;
            case 'coital':
                $retour = "index.php?page=lastrec&table=coital";
                break;
            
            default:
                # code...
                break;
        }

if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $table = $_GET['table'];
        $req = $bdd->query("SELECT * FROM analyses WHERE typeAna='$table' AND idAna = '$id'");
        $recup = $req->fetch(PDO::FETCH_OBJ);
        
    }

    if ($_GET['page'] == 'histologie') echo "HISTOLOGIE";
    else if ($_GET['page'] == 'frottisM') echo "FROTTIS EN MILIEU LIQUIDE";
    else if ($_GET['page'] == 'frottisV') echo "FROTTIS VAGINAL";
    else if ($_GET['page'] == 'spermo') echo "SPERMOGRAMME";
    else if ($_GET['page'] == 'myelo') echo "MYELOGRAMME";
     ?></title>

	<link href="../application/views/bootstrap/css/pages.css" rel="stylesheet">

	    <!-- Navigation Bar-->

        <?php Include('header_end.php');?>
            
    <?php require 'menu-navigation.php'; ?>
        </div>
        <!-- End Navigation Bar-->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row m-t-70" >
                    <div class="col-sm-12">
                        

                        </div>
                         <a href=<?php echo $retour ?>><button class="btn btn-primary">Retour</button></a>
                    </div>
                </div>
        </div>
<div class="container-fluid">
<div id="contForm">

<form action="" method="POST" role="form" id="anapathForm">
	 <!-- on inclus le header des formulaires -->
    <?php include 'includes/infoGene.php'; ?>


<!-- on vérifie le type d'enregistrement à effectuer -->
<?php if ($_GET['page'] == 'histologie' || $_GET['page'] == 'frottisM') {
    if ($_GET['page'] == 'histologie') {
        include 'includes/TraitementHisto.php';
    ?>
<h2>HISTOLOGIE<b class="caret" id="corpsInfo"></b></h2>
<?php }
else{
    include 'includes/TraitementFrottisM.php';
     ?>
    <h2>FROTTIS EN MILIEU LIQUIDE<b class="caret" id="corpsInfo"></b></h2>
    <?php } ?>
			<div id="formCorp">
				<div class="form-group">
					<label for="input-id" class="col-sm-2" style="width: 100%;">Nature du prélèvement:</label>
					<textarea type="text" name="natPrelev" id="nature" class="form-control" value=""><?php if (isset($recup)) echo $recup->naturePrelevement; ?></textarea>
				</div>
				<div class="form-group">
					<label for="input-id" class="col-sm-2" style="width: 100%;">Renseignements Cliniques:</label>
					<textarea name="rensCli" id="" cols="150" rows="5"><?php if(isset($recup)) echo $recup->renseignementsCliniques; ?></textarea>
				</div>
				
				<div class="form-group" class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
                    <label for="input-id" class="col-sm-4">Compte Rendu du</label>
                    <input type="date" class="form-control champ" name="cptr" value="<?php if (isset($recup)) {
                echo date('Y-m-d',strtotime($recup->dateCompteRendu)) ;} ?>"  title="">
                </div>
                
                <div class="form-group" id="transmisA" style="margin-top: 10px; margin-right: 35px;" >
                    <label for="input-id" class="col-sm-4">Transmis A</label>
                    <input type="text" name="transmisA" value="<?php if(isset($recup)) echo $recup->transmisA ?>" class="form-control" title="">
                </div>
                <br><br> <br> <br>
                <div class="form-group">
                    <label for="input-id" class="col-sm-2" style="width: 100%;">Interpretations:</label>
                    <textarea name="interpretations" id="" cols="150" rows="5"><?php if (isset($recup)) {
                echo $recup->interpretations ;} ?></textarea>
                </div>
               <?php } else if ($_GET['page'] == 'frottisV') {
                    include 'includes/TraitementFrottisV.php';
                ?>
				<div> <!-- Debut Div Frottis Vaginal -->
                
                <h2>FROTTIS VAGINAL<b class="caret" id="corpsInfo"></b></h2>
                <div class="form-group">
                    <label for="input-id" class="col-sm-2" style="width: 100%;">Nature du prélèvement:</label>
                    <textarea type="text" name="natPrelev" id="nature" class="form-control" value=""><?php if (isset($recup)) {
                echo $recup->naturePrelevement ;} ?></textarea>
                </div>
                <div class="form-group">
                    <label for="input-id" class="col-sm-2" style="width: 100%;">Renseignements Cliniques:</label>
                    <textarea name="rensCli" id="" cols="150" rows="5"><?php if (isset($recup)) {
                echo $recup->renseignementsCliniques ;} ?></textarea>
                </div>
                
                <div class="form-group">
                    <label for="input-id" class="col-sm-2">Compte Rendu du</label>
                    <input type="date" name="cptr" value="<?php if (isset($recup)) {
                echo date('Y-m-d',strtotime($recup->dateCompteRendu)) ;} ?>" class="form-control" title="">
                </div>
                <br>
                <br>
                <br>
                <div class="form-group" id="transmisA">
                    <label for="input-id" class="col-sm-2">Transmis A</label><br><br>
                    <input type="text" name="transmisA" value="<?php if(isset($recup)) echo $recup->transmisA ?>" class="form-control" title="">
                </div>
                <br>
                <div class="form-group">
                    <label for="input-id" class="col-sm-2" style="width: 100%;">FROTTIS VAGINAL ET EXOCERVICAL:</label>
                    <textarea name="fve" id="" cols="150" rows="5"><?php if (isset($recup)) {
                echo $recup->frottisVEC ;} ?></textarea>
                </div>
                <div class="form-group">
                    <label for="input-id" class="col-sm-2" style="width: 100%;">FROTTIS ENDOCERVICAL:</label>
                    <textarea name="fe" id="" cols="150" rows="5"><?php if (isset($recup)) {
                echo $recup->frottisEC ;} ?></textarea>
                </div>
				</div> <!-- Fin Div Frottis Vaginal -->
                <?php } else if($_GET['page'] =='spermo') { 
                   include 'includes/TraitementSpermo.php'; ?>
				<div> <!-- Debut Div Spermogramme -->

                <h2>SPERMOGRAMME<b class="caret" id="corpsInfo"></b></h2>
                <div class="form-group">
                    <label for="input-id" class="col-sm-2" style="width: 100%;">Renseignements Cliniques:</label>
                    <textarea name="rensCli" id="" cols="150" rows="5"><?php if (isset($recup)) {
                echo $recup->renseignementsCliniques ;} ?></textarea>
                </div>
                <div class="form-group">
                    <label for="input-id" class="col-sm-2">ABSTINENCE:</label>
                    <input type="number" name="abstinence" id="nature" class="form-control" value="<?php if (isset($recup)) {
                echo $recup->abstinence;} ?>">
                </div>
                <div class="form-group">
                    <label for="input-id" class="col-sm-2">VOLUME:</label>
                    <input type="number" name="volume" value="<?php if (isset($recup)) {
                echo $recup->volume;} ?>" class="form-control" step=".01">
                </div> <br><br> <br>
                <div class="form-group" id="richesse">
                    <label for="input-id" class="col-sm-2" style="  margin-top:     27px;">PH:</label>
                    <input  style="  margin-top:     17px;"type="number" name="ph" value="<?php if (isset($recup)) {
                echo $recup->ph;} ?>" class="form-control" step="0.01"> <br> <br>
                    <label for="input-id" class="col-sm-2">ASPECT:</label>
                    <input type="text" name="aspect" value="<?php if (isset($recup)) {
                echo $recup->aspect;} ?>" class="form-control">

                </div><br><br> <br>

                <div class="form-group">
                    <label for="input-id" class="col-sm-2">FLUDIFICATION:</label>
                    <input type="text" name="fludification" value="<?php if (isset($recup)) {
                echo $recup->fludification;} ?>" class="form-control">
                </div>
                <div class="form-group" id="numeration">
                    <label for="input-id" class="col-sm-2" style="  margin-top:     17px;">NUMERATION:</label>
                    <input type="number" name="numerationmm3" value="<?php if (isset($recup)) {
                echo $recup->numerationmm3;} ?>" class="form-control"><span>par mm3</span>
                    <input type="number" name="numerationml" value="<?php if (isset($recup)) {
                echo $recup->numerationml;} ?>" class="form-control"><span>par ml</span>
                    <input type="number" name="numerationej" value="<?php if (isset($recup)) {
                echo $recup->numerationeja;} ?>" class="form-control"><span>par éjaculat</span>

                </div>

                <div class="form-group">
                    <table class="table table-hover" id="tabSpermo">
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
                                <td>Trajet direct Rapide</td>
                                <td><input type="number" name="tdr1" value="<?php if (isset($recup)) {
                echo $recup->tdr1;} ?>" class="form-control" min="0" max="100" step=""><span>%</span></td>
                                <td>!</td>
                                <td><input type="number" name="tdr4" value="<?php if (isset($recup)) {
                echo $recup->tdr4;} ?>" class="form-control" min="0" max="100" step=""><span>%</span></td>
                            <td>!</td>
                           <td><input type="number" name="tdr24" value="<?php if (isset($recup)) {
                echo $recup->tdr24;} ?>" class="form-control" min="0" max="100" step=""><span>%</span></td>
                                </tr>
                                
                            <tr>
                                <td>Mobilité Diminuée</td>
                                <td><input type="number" name="mobd1" value="<?php if (isset($recup)) {
                echo $recup->mobd1;} ?>" class="form-control" min="0" max="1000" step=""><span>%</span></td>
                                <td>!</td>
                                <td><input type="number" name="mobd4" value="<?php if (isset($recup)) {
                echo $recup->mobd4;} ?>" class="form-control" min="0" max="100" step=""><span>%</td>
                            <td>!</td>
                                <td><input type="number" name="mobd24" value="<?php if (isset($recup)) {
                echo $recup->mobd24;} ?>" class="form-control" min="0" max="100" step=""><span>%</td>
                            </tr>
                            <tr>
                                <td>Immobile</td>
                                <td><input type="number" name="immo1" value="<?php if (isset($recup)) {
                echo $recup->immo1;} ?>" class="form-control" min="0" max="100" step=""><span>%</span></td>
                                <td>!</td>
                                <td><input type="number" name="immo4" value="<?php if (isset($recup)) {
                echo $recup->immo4;} ?>" class="form-control" min="0" max="100" step=""><span>%</td>
                        <td>!</td>
                                <td><input type="number" name="immo24" value="<?php if (isset($recup)) {
                echo $recup->immo24;} ?>" class="form-control" min="0" max="100" step=""><span>%</td>
                            </tr>
                        </tbody>
                    </table>
                </div><br>
                <div id="bas">
                    <div class="form-group">
                        <label for="input-id" class="col-sm-2">VITALITE (COLORATION DE BLOOM):</label>
                        <input type="text" name="vitalite" value="<?php if (isset($recup)) {
                echo $recup->vitalite;} ?>" class="form-control">
                    </div>
                    <div>
                    <h4> <strong>CYTOLOGIE:</strong></h4>
                    </div><br>
                    <div class="form-group">
                        
                        <label for="input-id" class="col-sm-2">Agglutination spontanée en amas:</label>
                        <input type="text" name="aggluAmas" value="<?php if (isset($recup)) {
                echo $recup->aggluAmas;} ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="input-id" class="col-sm-2">Formes anormales (en %):</label>
                        <input type="number" min="0" max="100" name="formesAnormales" value="<?php if (isset($recup)) {
                echo $recup->formesAnormales;} ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="input-id" class="col-sm-2">Principales anomalies constatées:</label>
                        <textarea name="PAC" class="form-control" rows="3"><?php if(isset($recup)) echo $recup->PAC ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="input-id" class="col-sm-2">Autres éléments de la lignée spermatique:</label>
                        <textarea name="autresELS" class="form-control" rows="3"><?php if(isset($recup)) echo $recup->autresELS ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="input-id" class="col-sm-2">Cellules rondes:</label>
                        <textarea name="cellulesR" class="form-control" rows="3"><?php if(isset($recup)) echo $recup->cellulesR ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="input-id" class="col-sm-2">Divers:</label>
                        <textarea name="divers" class="form-control" rows="3"><?php if(isset($recup)) echo $recup->divers ?></textarea>
                    </div>
                    </div> <!-- Fin Div Spermogramme -->
                    <?php } else if ($_GET['page'] == 'myelo') {
                    include 'includes/traitementMyelo.php'; ?>


                    <div> <!-- Debut Div Myelogramme -->
                    <h2>MYELOGRAMME<b class="caret" id="corpsInfo"></b></h2>
                    <div class="form-group">
                    <label for="input-id" class="col-sm-2" style="width: 100%;">Renseignements Cliniques:</label>
                    <textarea name="rensCli" id="" cols="150" rows="5"><?php if (isset($recup)) {
                echo $recup->renseignementsCliniques;} ?></textarea>
                </div>
                
                <div class="form-group">
                    <label for="input-id" class="col-sm-2">OS FONCTIONNE:</label>

                    <input type="text" name="os" class="form-control" id="nature" value="<?php if (isset($recup)) {
                echo $recup->osFonctionne;} ?>">
                </div> <br><br> <br>
                <div class="form-group" id="richesse"> <br>
                    <label for="input-id" class="col-sm-2">RICHESSE:</label> 
                    <input type="text" name="richesse" class="form-control" value="<?php if (isset($recup)) {
                echo $recup->richesse;} ?>">
                </div>

                <div class="form-group">
                <div id="formule">
                    <label for="" class="col-sm-2">FORMULE:</label>
                    <input type="text" name="formule" class="form-control" value="<?php if (isset($recup)) {
                echo $recup->formule;} ?>"><br>
                </div>
                    
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>LIGNEE GRANULOCITAIRE</th>
                                <th><input type="number" min="0" max="500" step="" name="ligneG" class="form-control" value="<?php if (isset($recup)) {
                echo $recup->ligneeG;} ?>"></th>
                                <th>LIGNEE ERYTHROBLASTIQUE</th>
                                <th><input type="number" min="0" max="500" step="" name="ligneE" class="form-control" value="<?php if (isset($recup)) {
                echo $recup->ligneeE;} ?>"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Neutrophile</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->neutro;} ?>" name="neutro" class="form-control"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myeloblastes</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->myeloblastes;} ?>" name="myeloblastes" class="form-control"></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Proerythroblaste</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->proErythroblaste;} ?>" name="proerythroblaste" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Promyelocytes</td>
                                <td><input type="number" min="0" max="500" step="" name="promyelocytes" class="form-control" value="<?php if (isset($recup)) {
                echo $recup->promyelocytes;} ?>"></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Erythroblastes Basophiles</td>
                                <td><input type="number" min="0" max="500" step="" name="erythroblasteBaso" value="<?php if (isset($recup)) {
                echo $recup->erythroblasteBaso;} ?>" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myelocytes</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->myelocytesN;} ?>" name="myelocytesN" class="form-control"></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Polychromatophile</td>
                                <td><input type="number" min="0" max="500" value="<?php if (isset($recup)) {
                echo $recup->ePolychromato;} ?>" step="ePolychromato" name="ePolychromato" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Metamyelocytes</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->metaMyelocytesN;} ?>" name="metamyelocytesN" class="form-control"></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Erythroblaste acidophile</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->erythroblasteAcido;} ?>" name="erythroblasteAcido" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Polynucléaires</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->polyNucleairesN;} ?>" name="polynucleairesN" class="form-control"></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Polychrome</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->ePolychrome;} ?>" name="ePolychrome" class="form-control"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mégaloblaste</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->megaloblaste;} ?>" name="megaloblaste" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Eosinophile</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->eosinophile;} ?>" name="eosinophile" class="form-control"></td>
                                <td>Autres Lignées</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->autresLignees;} ?>" name="autresLignees" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myelocytes</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->myelocytesE;} ?>" name="myelocytesE" class="form-control"></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lymphocytaire</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->lymphocytaire;} ?>" name="lymphocytaire" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Métamyelocytes</td>
                                <td><input type="number" min="0" max="500" value="<?php if (isset($recup)) {
                echo $recup->metaMyelocytesE;} ?>" step="" name="metamyelocytesE" class="form-control"></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Plasmocytaire</td>
                                <td><input type="number" min="0" max="500" value="<?php if (isset($recup)) {
                echo $recup->plasmocytaire;} ?>" step="" name="plasmocytaire" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Polynucléaires</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->polyNucleairesE;} ?>" name="polynucleairesE" class="form-control"></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monocytaire</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->monocytaire;} ?>" name="monocytaire" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Basophile</td>
                                <td><input type="number" min="0" max="500" step="" value="<?php if (isset($recup)) {
                echo $recup->basophile;} ?>" name="basophile" class="form-control"></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group" id="thromb">
                    <label for="input-id" class="col-sm-4">LIGNEE THROMBOCYTAIRE </label>
                    <input type="text" name="ligneeThrombo" class="form-control" value="<?php if (isset($recup)) {
                echo $recup->ligneeT;} ?>">
                </div>
                <div class="form-group" id="thrombRight">
                    <label for="input-id" class="col-sm-2">INTERPRETATIONS</label>
                    <textarea name="interpretations" class="form-control" rows="5" cols="150"><?php if (isset($recup)) {
                echo $recup->interpretations;} ?></textarea>
                </div>
                </div> <!-- Fin Div Myelogramme-->  <br><br>
                <?php } else if ($_GET['page'] == 'coital') {
                    
                 ?>
                <div> <!-- Debut Div Test Post Costal--> 
                 <div class="col-sm-12">
              <center><h4><strong>TEST POST COITAL <br>(TEST DE HUHNER, mise à jour juin 2004)</strong></h4></center>
              <div class="form-group">
                <label for="input-id" class="col-sm-3">Abstinence respectée (minimum 3 jours): </label>
                <input type="radio" name="abstinence" value="1" <?php if (!isset($recup) or (isset($recup) and $recup->abstinence == 1)) echo "checked"; ?>> Oui /
                  <input type="radio" name="abstinence" value="0" <?php if (isset($recup) && $recup->abstinence==0) echo "checked"; ?>> Non
              </div>
              <div class="form-group">
                <label for="input-id" class="col-sm-3">Traitement préalable : </label>
                
                <input type="radio" name="traitementP" value="1" <?php if (!isset($recup) or (isset($recup) and $recup->traitementPrealable == 1)) echo "checked"; ?>> Oui /
                  <input type="radio" name="traitementP" value="0" <?php if (isset($recup) && $recup->traitementPrealable==0) echo "checked"; ?>> Non
              </div>
              </div>
                <label for="input-id" class="col-sm-3">SCORE CERVICAL D'INSLER : </label>
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th></th>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Col</td>
                      <td><input type="radio" name="col" value="1" <?php if (!isset($recup) or (isset($recup) and $recup->col == 1)) echo "checked"; ?> title=""> Punctiforme</td>
                      <td><input type="radio" name="col" value="2" title="" <?php if (isset($recup) && $recup->col==2) echo "checked"; ?>> Ouvert</td>
                      <td><input type="radio" name="col" value="3" title="" <?php if (isset($recup) && $recup->col==3) echo "checked"; ?>> Fermé</td>
                    </tr>
                    <tr>
                      <td>Filance</td>
                      <td><input type="radio" name="filance" value="1" <?php if (!isset($recup) or (isset($recup) and $recup->filance == 1)) echo "checked"; ?>> 1-4 cm</td>
                      <td><input type="radio" name="filance" value="2" <?php if (isset($recup) && $recup->filance==2) echo "checked"; ?>> 5-8 cm</td>
                      <td><input type="radio" name="filance" value="3" <?php if (isset($recup) && $recup->filance==3) echo "checked"; ?>> > 8 cm</td>
                    </tr>
                    <tr>
                      <td>Abondance</td>
                      <td><input type="radio" name="abondance" value="1" <?php if (!isset($recup) or (isset($recup) and $recup->abondance == 1)) echo "checked"; ?>>Minime</td>
                      <td><input type="radio" name="abondance" value="2" <?php if (isset($recup) && $recup->abondance==2) echo "checked"; ?>>Gouttes</td>
                      <td><input type="radio" name="abondance" value="3" <?php if (isset($recup) && $recup->abondance==3) echo "checked"; ?>>Cascade</td>
                    </tr>
                    <tr>
                      <td>Cristallisation</td>
                      <td><input type="radio" name="cristallisation" value="1" <?php if (!isset($recup) or (isset($recup) and $recup->cristallisation == 1)) echo "checked"; ?> title="">Linéaire</td>
                      <td><input type="radio" name="cristallisation" value="2" <?php if (isset($recup) && $recup->cristallisation==2) echo "checked"; ?> title="">Partielle</td>
                      <td><input type="radio" name="cristallisation" value="3" <?php if (isset($recup) && $recup->cristallisation==3) echo "checked"; ?> title="">Complète</td>
                    </tr>
                    
                  </tbody>
                </table>
              <div class="form-group">
                <label for="input-id" class="col-sm-2">Total score Insler</label>
                <input type="number" name="totalScoreInsler" value="<?php if (isset($recup)) echo $recup->totalScoreInsler; ?>" class="form-control">
              </div>
              <div class="form-group">
                <p>
                <strong>Insler > 7 = glaire "fonctionnelle" (possède les caractéristiques pré ovulaire)<br \>
                Insler < 7 = glaire "non fonctionnelle" (inadéquate)</strong><br>
                </p><br>
              </div>
              <div class="form-group">
                <label for="input-id" class="col-sm-3">Nombre de Spematozoïdes/champs: </label>
                <span id="nbSC"></span><br><br>
                <ul style="margin-left: 15%;">
                  <li><input type="radio" name="nbSC" value="0" <?php if (!isset($recup) or (isset($recup) and $recup->nbSC == 0)) echo "checked"; ?>> 0</li>
                  <li><input type="radio" name="nbSC" value="1" <?php if (isset($recup) && $recup->nbSC==1) echo "checked"; ?>> Pauvre: moins de 5</li>
                  <li><input type="radio" name="nbSC" value="2" <?php if (isset($recup) && $recup->nbSC==2) echo "checked"; ?>> Satsifaisant: 20 à 50</li>
                  <li><input type="radio" name="nbSC" value="3" <?php if (isset($recup) && $recup->nbSC==3) echo "checked"; ?>> normal: >50</li>
                </ul>
              </div>
              <div class="form-group">
                <label for="input-id" class="col-sm-3">degré de mobilité: </label>
                <span id="nbSC"></span><br><br>
                <ul style="margin-left: 15%;">
                  <li><input type="radio" name="degreMob" value="0" <?php if (!isset($recup) or (isset($recup) and $recup->degreMobD == 0)) echo "checked"; ?>> Progression en diagonale (N)</li>
                  <li><input type="radio" name="degreMob" value="1" <?php if (isset($recup) && $recup->degreMobD==1) echo "checked"; ?>> Sur Place, oscillants</li>
                  <li><input type="radio" name="degreMob" value="2" <?php if (isset($recup) && $recup->degreMobD==2) echo "checked"; ?>> nul</li>
                </ul>
              </div>
              <div class="form-group">
                <label for="input-id" class="col-sm-3">présence d'agglutinats (possibilité d'anticorps): </label>
                  <input type="radio" name="presenceAgglu" value="1" <?php if (!isset($recup) or (isset($recup) and $recup->presenceAgglu == 1)) echo "checked"; ?>> Oui /
                  <input type="radio" name="presenceAgglu" value="0" <?php if (isset($recup) && $recup->presenceAgglu==0) echo "checked"; ?>> Non
              </div>


            </div>
        </div>
        </div>


                <br> <br> <br>
                <?php 
                include 'includes/traitementTestPC.php';} ?>

				<div class="form-group">
					<label for="input-id" class="col-sm-2" style="width: 100%; margin-bottom: 2%; margin-top:2%">Conclusion</label>
					<textarea name="conclusion" id="" cols="150" rows="5"><?php if(isset($recup)) echo $recup->conclusion; ?></textarea>
				</div>
				<div class="form-group">
					<label for="input-id" class="col-sm-2" style="width: 100%; margin-bottom: 2%;">Medecin Signataire</label>
					<input type="text" name="medecinSaisie" value="<?php if(isset($recup)) echo $recup->medecinSaisie; ?>" class="form-control" title="">
				</div>
		</div>
		
		

		<!-- inclusion du fichier qui gère le traitement des enregistrements -->
		<?php
			include 'includes/basDuFormulaire.php'; 
		?>
	</form>
</div>
</div>
<br>
<footer class="footer text-right">
                    
    <div class="container">
            <div class="row">
                    <div class="col-xs-12">
                                2017 © Pyramide IT.
                    </div>
            </div>
    </div>
</footer>


</div>
</div>




        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="../application/views/assets/js/jquery.min.js"></script>
        <script src="../application/views/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="../application/views/assets/js/bootstrap.min.js"></script>
        <script src="../application/views/assets/js/waves.js"></script>
        <script src="../application/views/assets/js/jquery.nicescroll.js"></script>
        <script src="../application/views/assets/plugins/switchery/switchery.min.js"></script>

        <!-- Modal-Effect -->
        <script src="../application/views/assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="../application/views/assets/plugins/custombox/js/legacy.min.js"></script>

        <!-- App js -->
        <script src="../application/views/assets/js/jquery.core.js"></script>
        <script src="../application/views/assets/js/jquery.app.js"></script>

        <!-- Required datatable js -->
        <script src="../application/views/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="../application/views/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/jszip.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="../application/views/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="../application/views/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    </body>
</html>
<script>
    $(document).ready(function() {
        $("#datatable").dataTable({
            "bJQueryUI": false,
            "bAutoWidth": false,
            "oLanguage": {
        "sEmptyTable": "Aucun enregistrement trouvé!", //when empty
                    "sSearch": "<span>Filtre:</span> _INPUT_", //search
                    "sLengthMenu": "<span>Montrer </span> _MENU_<span> enregistrements: </span>", //label
                    "oPaginate": { "sFirst": "First", "sLast": "Last", "sNext": ">", "sPrevious": "<" } //pagination
            }
        });
        $('.zmdi').tooltip({
            classes: {
            'ui-tooltip':"ui-corner-all"
        }
        });
        
    });
    
    
</script>
<style>
    table th:nth-child(1), table td:nth-child(1),table th:nth-last-child(1), table td:nth-last-child(1) 
    {
        position: relative;
        width: 20%;
    }
</style>