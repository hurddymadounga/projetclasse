<?php
//récupération des données à partir du formulaire
 $nomuser  		=$_POST['nomuser'];
 $prenomuser	=$_POST['prenomuser'];
 $mail			=$_POST['emailuser'];
 $pass			=$_POST['motdepass'];
 $confpass		=$_POST['confpass'];
 $livraison 	=$_POST['livraison'];

if(isset($_POST['signin'])){
	//echo "<script>alert("attention");</script>";
        try{
            $bdd = new PDO('mysql:host=localhost; dbname=hurddymadounga; charset=utf8','root','');

            $req = $bdd->prepare('INSERT INTO users(Nom_user, Prenom_user, Email_user, Motdepasse_user, Adressedelivraison) VALUES(:Nom_user, :Prenom_user, :Email_mail, :Motdepasse_user, :Adressedelivraison)');
            echo "<script>alert('attention');</script>";
			$req->execute(array('Nom_user'=>$nomuser,'Prenom_user'=>$prenomuser,'Email_use'=>$mail,'Motdepasse_user'=>$pass,'Adressedelivraison'=>$livraison));
			header("location: pannier.php");
        }catch(Exception $e){

            die('Erreur : '.$e->getMessage());

        }

    }else header("location: compte.php");
?>
?>