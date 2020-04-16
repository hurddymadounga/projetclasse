<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8"/>
<link rel="stylesheet" href="style.css" >
 <title>Enregistrement</title>
 </head>
 <body>
 <!-- L'en-t�te -->
 <?php include("head.php"); ?>

<div style="background-color:white">
	 <div id="corps">
 <h1 style="color:black; font-family:Old English Text MT; text-align:center; ">Bienvenue dans votre magasin </h1>
</div>
<div id="corps">
 <h1></h1>


<form style="margin:0px 40% 0px 30%;" action="insertion.php" method="post">
	<h2>Vous n'avez pas de compte? Inscrivez-vous</h2>
<fieldset>
	<legende>Formulaire d'inscription</legende>
<table>
	<tr>
		<th><label>Nom :</label></th>
		<th><input type="text" name="nomuser" placeholder="Entrer le nom"/></th>
	</tr>
	<tr>
		<th>Prénom: </th>
		<th><input type="text" name="prenomuser" placeholder="Entrer le prénom" /></th>
	</tr>
	<tr>
		<th>Adresse mail: </th>
		<th><input type="text" name="mailuser" placeholder="Entrer votre adresse mail"/></th>
	</tr>
	<tr>
		<th>Mot de Pass </th>
		<th><input type="password" name="pass" placeholder="Créez un mot de pass"/></th>
	</tr>
	<tr>
		<th>Confirmer mot de pass</th>
		<th><input type="password" name="confpass" placeholder="Confirmez le mot de pass"/></th>
	</tr>
	<tr>
		<th>Adresse de livraison: </th>
		<th><input type="text" name="livraison" placeholder="Entrer votre adresse de livraison"/></th>
	</tr>
</table>
<button class="button1" name="signin" type="submit">Inscription</button>
</fieldset>
</form>
</div>

<br><br><br><br><br><br><br><br><br><br>

</div>
 </body>
 
 <?php include("foot.php"); ?>
</html>



