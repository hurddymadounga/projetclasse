<?php

    session_start();

    $email = $_POST['email'];

    $pass = $_POST['password'];

 

    if(isset($_POST['login'])){

        try{

            $bdd = new PDO('mysql:host=localhost; dbname=hurddymadounga; charset=utf8','root','');

            $req = $bdd->prepare('SELECT Email_user, Motdepasse_user FROM users WHERE Email_user =? AND Motdepasse_user=?');

            $req->execute(array($email, $pass));

            $reponses = $req->fetch();

            if($email == $reponses['Email_user'] && $pass == $reponses['Motdepasse_user']){

                header("location: pannier.php");

            }else{

                header("location: compte.php");

            }

            $req->closeCursor();

        }catch(Exception $e){

            die('Erreur : '.$e->getMessage());

        }

    }else header("location: compte.php");

?>