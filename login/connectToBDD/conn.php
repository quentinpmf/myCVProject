<?php
    try{
			/*Ici c' est la connection a la BBD  hote,BaseDonné,Nomdutilisateur,MotdePasse*/
        $bdd = new PDO('mysql:host=localhost;dbname=projetTA72','root','');
    }catch(Exception $e){
        die("ERROR : ".$e->getMessage()); /*Retourne une erreur si la base de donné n'est pas joiniable*/
    }
?>