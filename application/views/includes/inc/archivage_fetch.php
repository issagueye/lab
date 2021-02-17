<?php

	if (isset($_GET['idA'])) {
    $reqA = $bdd->prepare('UPDATE analyses SET status='.$_GET['a'].' WHERE idAna='.$_GET['idA'].'');
        if ($reqA->execute(array())) {
            echo "Archivage réussie";
            
            header('refresh:0.1,url=index.php?page=admin');
        };
	}

?>