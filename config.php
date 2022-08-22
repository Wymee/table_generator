<?php

    $servername = 'localhost';
    $dbname = 'testprojetmustmobile';
    $user ='root';
    $password ='';
 try {
    //     //On essaie de se connecter
    $db = New PDO ('mysql:host='.$servername.';dbname='.$dbname, $user, $password);
        
    //On définit le mode d'erreur de PDO sur Exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo 'Connexion réussie</br>';
    
     //On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci
 } catch (PDOException $erreur) {
     echo 'Échec lors de la connexion : ' . $erreur->getMessage();
};
?>