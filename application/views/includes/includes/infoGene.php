<div id="loc">
	<center><h2>HOPITAL PRINCIPAL DE DAKAR <br>FEDERATION DES LABORATOIRES <br>
	ANATOMIE ET CYTOLOGIE PATHOLOGIQUES </h2></center><br>
	<span><strong> Chef de service : Méd Col Yankhoba DIOP </strong></span> <br>
	<span>Adjoint :</span> <br>
	<span><strong>Assistants : Méd Cdt E.S. SARR &nbsp;&nbsp;&nbsp;&nbsp; Méd Cdt R.F.B DIOP &nbsp;&nbsp;&nbsp;&nbsp; Méd Cdt M. NDIAYE</strong></span>
	<br><br>
	<span class="addr">Tel: +221 33 839 50 44</span>
	<span class="addr">Avenue Nelson Mandela BP 3006 DAKAR</span>
	<span class="addr">Fax: +221 33 839 50 88</span><br><br>
</div>

<div id="infosGene" class="row">	
	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
		<div class="form-group">
			<label for="input-id" class="col-sm-4">Nom:</label>
			<input type="text" name="nom" id="nom" value="<?php if (isset($recup)) {
				echo $recup->nomPatient;} ?>" class="form-control">
		</div>
		<div class="form-group">
			<label for="input-id" class="col-sm-4">Prénom:</label>
			<input type="text" name="prenom" value="<?php if (isset($recup)) {
				echo $recup->prenomPatient;} ?>" class="form-control champ">
		</div>
		<div class="form-group">
			<label for="input-id" class="col-sm-4">Age:</label>
			<input type="number" value="<?php if (isset($recup)) {
				echo $recup->agePatient;} ?>" style="position: relative; width:20%; display: inline;" name="age" class="form-control" min="0" max="150" step="" title=""> 
				<select name="nb">
					<option value="ans"  <?php if (isset($recup)) {
					if ($recup->nb == "ans") {
						echo "selected";
					}}?> >An(s)</option>
					<option value="mois" <?php if (isset($recup)) {
					if ($recup->nb == "mois") {
						echo "selected";
					}}?> >Mois</option>
					<option value="jours" <?php if (isset($recup)) {
					if ($recup->nb == "jours") {
						echo "selected";
					}}?>>Jour(s)</option>
				</select>
		</div>
		<div class="form-group">
			<label for="input-id" class="col-sm-4">Sexe:</label>
			<select name="sexe" id="">
				<option value="homme" <?php if (isset($recup)) {
					if ($recup->sexe == "homme") {
						echo "selected";
					}}
				 ?> >HOMME</option>
				<option value="femme" <?php if (isset($recup)) {
					if ($recup->sexe == "femme") {
						echo "selected";
					}}
				 ?>>FEMME</option>
			</select><br>
			
		</div>
		<div class="form-group">
			<label for="input-id" class="col-sm-4">Medecin Traitant:</label>
			<input type="text" name="medTraitant" value="<?php if (isset($recup)) {
				echo $recup->medecinTraitant;} ?>" class="form-control champ">
		</div>
		<div class="form-group">
			 <label for="input-id" class="col-sm-4">Service:</label>
			<!-- <input type="text" name="service" value="<?php /*if (isset($recup)) {
			 				echo $recup->service;}*/ ?>" class="form-control champ"> -->

			<select name="service"  class="form-control" required="required" id="service">
			<option value="">--choisissez--</option>
				<?php $services = $bdd->query("SELECT * FROM services");
				$recServ = $services->fetchAll(PDO::FETCH_OBJ);
				foreach ($recServ as $key => $value) {
					?>
					<option value="<?php echo $value->nomService ?>" <?php if (isset($recup) and $recup->service == $value->nomService) echo "selected" ?>><?php echo $value->nomService; ?></option>
					<?php
				}
				 ?>
					<option value="autres">Autres</option>
                   
				
			</select>
			 <input type="text" class="form-control " id="others" placeholder="Autres analyses" name="otherS" value="" class="" style="display: none;">
		</div>
	</div>
	
	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
		<div class="form-group">
		<label for="input-id" class="col-sm-4">Code Analyse:</label>
			<input type="text" name="codeA" value="<?php if (isset($recup)) {
				echo $recup->codeAna;} ?>" class="form-control champ">
		</div><br>
		<div class="form-group">
		<label for="input-id" class="col-sm-4">Examen numero:</label>
			<input type="text" name="numExam" value="<?php if (isset($recup)) {
				echo $recup->numExam;} ?>" class="form-control champ">
		</div>
		<div class="form-group">
		<label for="input-id" class="col-sm-4">Date de Prelevement:</label>
		<input type="date" name="datePrelev" value="<?php if (isset($recup)) {
				echo date('Y-m-d',strtotime($recup->datePrelevement)) ;} ?>" id="input" class="form-control" title="">

		</div>
		<div class="form-group">
		<label for="input-id" class="col-sm-4">Date de sortie:</label>
		<input type="date" name="dateSortie" value="<?php if (isset($recup)) {
				echo date('Y-m-d',strtotime($recup->dateSortie)) ;} ?>" id="input" class="form-control" title="">
		</div>

	</div>

</div>

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

        $("#service").change(function(event) {
            $("#service option:selected").each(function() {
            if($(this).text() == "Autres")
                $("#others").show();
            else 
                $("#others").hide();
            });
        });

        $('.zmdi').tooltip({
            classes: {
            'ui-tooltip':"ui-corner-all"
        }
        });
        
    });
</script>