<?php 
    include '../application/views/includes/includes/connectDb.php';
 if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $table = $_GET['table'];
        $req = $bdd->query("SELECT * FROM analyses WHERE typeAna='$table' AND idAna = '$id'");
        var_dump($req);
        $recup = $req->fetch(PDO::FETCH_OBJ);
        
  	 }
?>