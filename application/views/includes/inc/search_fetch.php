<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "anapath2_db");

// Escape user inputs for security
 $term = mysqli_real_escape_string($link, $_REQUEST['term']);



 
if(isset($term)){
	


    // Attempt select query execution
      $sql = 'SELECT * FROM analyses WHERE recep NOT LIKE "anapath & cytologie" AND nomPatient LIKE "%' . $term . '%" or prenomPatient LIKE "%' . $term . '%" or codeAna LIKE  "%' . $term . '%" or medecinTraitant LIKE "%' . $term . '%"' ;
	
	$nbrResultat=0;

    if($result = mysqli_query($link, $sql)){
	
	if( mysqli_num_rows($result)>0)
		
        if(mysqli_num_rows($result) > 0){
          
            
        } else{
			$nbrResultat=$nbrResultat+5;
           
        }
    } 
	 
}
 if($nbrResultat==5) echo 'Aucun Resultat Trouvé';

 else {
	 $nb=1;
	 echo '<table class="table table-striped" style="width:100%;">
                                            <thead>
                                            <tr>
                                                <th style="width:2%;">#</th>
                                                <th style="width:10%;" title="Type Analyse">Type</th>
                                                <th style="width:5%;">Code Analyse</th>
                                                <th style="width:5%;">Numero Analyse</th>
												<th style="width:30%;">Prenom Patient</th>
                                                <th style="width:20%;">Nom Patient</th>
												
                                                <th style="width:20%;">Statut</th>
                                                
                                                
                                                
                                            </tr>
                                            </thead>
                                            <tbody>';
	  if($result = mysqli_query($link, $sql)){
	
	
	
        if(mysqli_num_rows($result) > 0){
			
            while($row = mysqli_fetch_array($result)){
				echo ' <tr >';	
	echo '<th scope="row">'.$nb.'</th>';
	if ($row['typeAna']=="anapath")echo "<td>Anapath</td>";
	if ($row['typeAna']=="frottismilieuliquide")echo "<td>Frottis en milieu liquide</td>";
	if ($row['typeAna']=="frottisvaginal")echo "<td>frottis vaginal</td>";
	if ($row['typeAna']=="spermogramme")echo "<td>Spermogramme</td>";
	if ($row['typeAna']=="myelogramme")echo "<td>Myelogramme</td>";
	if ($row['typeAna']=="coital")echo "<td>Test Post Coital</td>";

	$nb++;
                echo "<td>" . $row['codeAna'] . "</td>";
                echo "<td>" . $row['numExam'] . "</td>";
                echo "<td>" . $row['prenomPatient'] . "</td>";
                echo "<td>" . $row['nomPatient'] . "</td>";
				
				
				if($row['status'] ==0) echo '<td title="En cours de validation"><i class="zmdi zmdi-circle" style="color:red; font-size:20px; text-align:center;"></i></td>';
				if($row['status'] !=0) echo '<td title="Validé"><i class="zmdi zmdi-circle" style="color:#3abf1f; font-size:20px; text-align:center;"></i></td>';
				
				echo ' </tr >';	
            }
            
        } else{
			
           
        }
    } 
	

	
	
	 echo' </tbody>    </table>';
 }
// close connection
mysqli_close($link);
?>