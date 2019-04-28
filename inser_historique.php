<?php
	$bdd=new PDO('mysql:host=localhost;dbname=hackathon','root','');
	if(isset($_POST['demande']))
	{
		if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['domen']) AND !empty($_POST['numt']) AND !empty($_POST['email'])  AND !empty($_POST['pseudo']) AND !empty($_POST['motpass']))
		{
		    $nom=($_POST['nom']);
			$prenom=($_POST['prenom']);
			$domen=($_POST['domen']);
			$numt=($_POST['numt']);
			$email=($_POST['email']);
			$pseudo=($_POST['pseudo']);
			$motpass=($_POST['motpass']);
			$ajout=$bdd->prepare('INSERT INTO entrepreneur(nom,prenom,domen,numt,email,pseudo,motpass) VALUES (?,?,?,?,?,?,?)');
			$ajout->execute(array($nom,$prenom,$domen,$numt,$email,$pseudo,$motpass));
		}else echo "<center><h4 style='color:red'>Veuillez remplir tous les champs</h4></center>";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>mon historique</title>
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Marck+Script|Merienda|Playball|Prata|Spirax" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 	<script type="text/javascript" src="js/jquery.js"></script>
 	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body style="font-family: 'Merienda', cursive;">
	<header>
		<nav class="navbar navbar-default narbar-fixed-top navbar-inverse">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="index.php" style="color: #fff;">TCHIGABA</a>
					</div>
				    
				</div>
				<div class="profile-header text-center" style="background-image: url(image/t1.jpg);background-image: no-repeat;background-size: cover;">
				  <div class="container-fluid">
				    <div class="container-inner">
				      <img class="img-circle" src="image/t2.png" style="width: 10%">
				    </div><br><br>
				  </div>
				  
				</div>
			</nav>
</ul></div></div>

<div class="container-fluid" style="margin-top: 0px; margin-left: 25px">
		<div class="row">
			<center>
				<h1 style="border:1px solid ;background-color:blue;color:white;width:544px"></h1>
			    <form method="POST" action="" style="border: 1px solid black; margin:0px 400px 0px 400px; padding:20px">
					<div class="input-group">
						Nom:<input type="text" name="nom" placeholder="" style="width:200px;margin:3px 0px 3px 166px;">
					</div>
					<div class="input-group">
						Prenom:<input type="text" name="prenom"  placeholder="" style="width:200px;margin:3px 0px 3px 147px">
					</div>
					<div class="input-group">
						adresse:<input type="text" name="fonction"  placeholder="" style="width:200px;margin:3px 0px 3px 142px">
					</div>
					<div class="input-group">
						Date Naissance:<input type="date" name="naissance" placeholder="" style="width:200px;margin:3px 0px 3px 97px">
					</div>
					<div class="input-group">
						Numero telephone:<input type="number" name="tel" placeholder="" style="width:200px;margin:3px 0px 3px 82px">
					</div>
					<div class="input-group">
						email:<input type="email" name="tel" placeholder="" style="width:200px;margin:3px 0px 3px 82px">
					</div>

					<div class="input-group">
						ville<input type="text" name="adresse" placeholder="" style="width:200px;margin:3px 0px 3px 150px">
					</div>
					<div class="input-group"> votre message   
						<textarea type="number" name="alofami" placeholder="" style="width:200px;margin:3px 0px 3px 83px"></textarea>
					</div>
					<div class="input-group">
					oeuvre effectuer:<input type="text" name="salb" placeholder="" style="width:200px;margin:3px 0px 3px 124px">
					</div>
					<div class="input-group">
						votre photo:<input type="text" name="recru" placeholder="" style="width:200px;margin:3px 0px 3px 87px">
					</div>
					<div style="margin-top:20px">
					<button type="submit" name="vali" class="btn btn-primary">Valider</button> <button type="submit" name="reni"  class="btn btn-danger" style="margin-left:180px">Reset</button>
				    </div>
			    </form>
		    </center>
		</div>
	</div>
</header></body></html>