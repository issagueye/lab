<?php 
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=anapath2_db;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ));
	}
	catch (Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
 ?>