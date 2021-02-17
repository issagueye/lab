<?php
if (isset($_POST['submit'])) {
        // inclusion de fichier de connexion à la base de données
        include '../application/views/includes/includes/connectDb.php';

        //récupération des données du formulaire
        $pwd = sha1(htmlspecialchars($_POST['password']));
        $newPwd = sha1(htmlspecialchars($_POST['newpassword']));
        $username = $_SESSION['username'];
        $newPwd2 = sha1(htmlspecialchars($_POST['newpassword2']));
        

        //mise à jour du mot de passe
        $req = $bdd->prepare("UPDATE users SET password = :newP WHERE username = :user AND password = :pwd");
        $req2 = $bdd->query("SELECT * FROM users WHERE password = '$pwd' and username = '$username'");
        $fetchR = $req2->fetchAll(PDO::FETCH_OBJ);
        
        
        if (!empty($fetchR)) 
        {
            if ($newPwd == $newPwd2)
            {
                if ($req->execute(array(
                    'newP' => $newPwd,
                    'user' => $username,
                    'pwd' => $pwd
                    )))
                {
                    echo "<script>alert('Mot de passe mis à jour avec succès')</script>";
                }
                else 
                    echo "<script>alert('Erreur lors de la mise à jour du mot de passe')</script>";
            }
            else 
               echo "<script>alert('les deux mots de passe saisis ne correspondent pas')</script>"; 
        }
        else 
            echo "<script>alert('Erreur lors de la mise à jour du mot de passe')</script>";

        
}

?>