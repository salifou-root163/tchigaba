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
	<title>TCHIGABA</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Marck+Script|Merienda|Playball|Prata|Spirax" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 	<script type="text/javascript" src="js/jquery.js"></script>
 	<script type="text/javascript" src="js/bootstrap.js"></script>
 	<link rel="stylesheet" href="css/style.css">
</head>
<body style="font-family: 'Merienda', cursive;">
	<div class="container-fluid">
		
		<div class="row" style="background: #3dafea;">
			<form action="" method="post">
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
					<!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li><a href="" class="btn btn-small" data-toggle="modal" data-target="#Pre-inscription">inscription</a></li>
				        <!--Modal pour la -inscription-->
				        		<div class="modal fade" id="Pre-inscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content col-md-11 " style="margin-top: 20px; margin-left: 30px;">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <div class="social text-center">
						                <button class="btn btn-just-icon btn-round btn-twitter" style="background-color: #0080FF;color: white">
						                  <i class="fa fa-twitter"></i>
						                </button>
						                <button class="btn btn-just-icon btn-round btn-dribbble" style="background-color: #FD6C9E;color: white">
						                  <i class="fa fa-dribbble"></i>
						                </button>
						                <button class="btn btn-just-icon btn-round btn-facebook" style="background-color: #002FA7;color: white">
						                  <i class="fa fa-facebook"> </i>
						                </button>
						                <h4> Entreprenaire </h4>
							      </div>

							      <div class="modal-body">
							      	<form action="" method="post">
							        <input type="text" class="form-control" name="nom" placeholder="Votre Nom"><br>
							        <input type="text" class="form-control" name="prenom" placeholder="Votre Prenom"><br>
							        <input type="text" class="form-control" name="domen" placeholder=" Votre domained'Entreprenaire"><br>
							        <input type="number" class="form-control" name="numt" placeholder=" Numero Telephone"><br>
							        <input type="email" class="form-control" name="email" placeholder="Votre mail"><br>
							        <input type="text" class="form-control" name="pseudo" placeholder="Votre Pseudo"><br>
							        <input type="password" class="form-control" name="motpass" placeholder="Mot de Passe"><br>
									<button class="btn btn-primary btn-block" name="demande" type="submit"><span class="glyphicon glyphicon-save"></span>Valider</button>
							      </div>
							      </form>
							    </div>
							  </div>
							</div>
						</div>
									<!---->
						 </nav>


				 
				  </div><!-- /.navbar-collapse -->
				  <div class="row" style="margin-top: 0px;">
				    
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner"><!--
				    <div class="item active" align="center">
				      <img src="didalab/test.png" alt="..." style="width: 850px;">
				      <div class="carousel-caption">
				      	...
				      </div>
				    </div>-->
				    <div class="item active" align="center">
				      <img src="image/p1.jpg" alt="..." style="width: 857px;">
				      <div class="carousel-caption">
				      ...
				      </div>
				    </div>
				    <div class="item" align="center">
				      <img src="image/p2.jpg" alt="..." style="width: 850px;">
				      <div class="carousel-caption">
				       ...
				      </div>
				    </div>
				    <div class="item" align="center">
				      <img src="image/p3.jpg" alt="..." style="width: 890px;">
				      <div class="carousel-caption">
				       ...
				      </div>
				    </div>
				    <div class="item" align="center">
				      <img src="image/p4.jpg" alt="..." style="width: 646px;">
				      <div class="carousel-caption">
				       ...
				      </div>
				    </div>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
				    	</div><!--col-md-3-->
				    </div><!-- col-md-12-->
				  </div><!-- /.container-fluid -->
				</nav>
				<br>
				 <footer class="text-center">
                <div class="container"> 
	    <div class="divider"></div>
	      <div class="heading">
	           <h2>contactez-Nous</h2>
	      </div>
            <div class="row" style="margin-top: 50px">
            	<div class="col-mg-10 col-mg-offset-1">
            		<form id="contacte_form" method="POST" action="" role="form">
            			<div class="row"> 
										<div class="col-md-6">
										<label for="prenom">prenom<span class="blue"> *</span></label>
										<input type="text" id="prenom" name="prenom"  placeholder="prenom" class="form-control" value="">
										<p class="comentes"></p>
										</div>
										<div class="col-md-6">
										<label for="nom">nom<span class="blue"> *</span></label>
										<input type="text" id="nom" name="nom" placeholder="nom" class="form-control" value="">
										<p class="comentes"></p>
										</div>
										<div class="col-md-6">
										<label for="email">email<span class="blue"> *</span></label>
										<input type="text" id="email" name="email" placeholder="email" class="form-control" value="">
										<p class="comentes"></p>
									 	</div>
									 	<div class="col-md-6">
										<label for="telephone">telephone</label>
										<input type="tel" id="telephone" name="telephone" placeholder="telephone" class="form-control" value="">
										<p class="comentes"></p>
									 	</div>
									 	<div class="col-md-12">
										<label for="message">message<span class="blue">*</span></label>
										<textarea id="message" name="message" class="form-control" placeholder="message" rows="4"></textarea>
										<p class="comentes"></p>
									 	</div>
									 	<div class="col-md-12">
									 		<p class="blue"><strong> ces information sont requise</strong></p>
									 	</div>
									 	<div class="col-md-12">
									 		<input type="submit" name="buton" class="buton">
									 	</div>
            					</div>
            		</div>
            		</form>
            	</div>
            </div>
        </div>
        </footer>

</body>
</html>