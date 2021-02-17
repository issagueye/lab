<tbody>
	<?php 
	include 'connectDb.php';
		$req = $bdd->query("SELECT * FROM analyses WHERE typeAna='$table' AND status = 0 ORDER BY idAna DESC");
	
	
	
		 	$donnees = $req->fetchAll();
	
	foreach ($donnees as $key => $value) {
								echo "<tr>";
								echo "<td>".$value->prenomPatient." ".$value->nomPatient."</td>";
								if($value->agePatient==0){echo "<td>?</td>";}
								else echo "<td>".$value->agePatient.''.$value->nb."</td>";
								echo "<td>".$value->codeAna."</td>";
								echo "<td>".$value->numExam."</td>";
								echo "<td>".$value->service."</td>";
								echo "<td>";
								if($value->status == 0)
								{
									echo 'NEANT';
								}
								else if ($value->status == 1)
									echo "en cours d'archivage";
								else if ($value->status == 3)
									echo "reception";
								else 
									echo "Archivé";
								echo "</td>";

								
								echo "<td>"; ?>
								<a href="index.php?page=<?php echo $page; ?>&id=<?php echo $value->idAna ?>&table=<?php echo $table ?>"><button class="btn"><i class="zmdi zmdi-edit" title="Modifier"></i></button></a>

								<?php if ($value->status == 0) { ?><a href="index.php?page=archive&id=<?php echo $value->idAna ?>&table=<?php echo $table ?>" target="blank"><button onclick="return archiver()" class="btn "><i class="zmdi zmdi-archive" title="Archiver"></i></button></a> <?php } ?>

								<a href="index.php?page=apercu&type=<?php echo $table ?>&id=<?php echo $value->idAna ?>"><button class="btn "><i class="zmdi zmdi-loupe" title="Aperçu"></i></button></a>

								<a href="index.php?page=imprimer&type=<?php echo $table ?>&id=<?php echo $value->idAna ?>" target="blank"><button class="btn "><i class="zmdi zmdi-print" title="Imprimer"></i></button></a>

								<!-- <button class="btn "><i class="zmdi zmdi-email" style="color: #2B3D51;" title="Envoyer"></i></button> -->
								<a href="index.php?page=delete&id=<?php echo $value->idAna ?>&table=<?php echo $table ?>"><button onclick="return supprimer()" class="btn"><i class="zmdi zmdi-delete" title="Supprimer" ></i></button></a>
								<?php 
								
								echo "</td>";
								
								 	
								echo "</tr>";
							}
	 ?>
</tbody>
</table>
<script>
	function supprimer()
	{
		if (!confirm("Vous êtes sur le point de supprimer l'enregistrement.")) 
		{
			return false;
		}
	}
	function archiver()
	{
		if (!confirm("Vous êtes sur le point d'archiver l'enregistrement.")) 
		{
			return false;
		}
	}
</script>