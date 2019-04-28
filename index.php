<?php
   $cn=new PDO('mysql:host=localhost;dbname=hackathon',"root",'');
   if (isset($_POST['valider']))
   { 
   	//die("ok");
     	    $pseudo=htmlspecialchars($_POST['pseudo']);
             $motpass=htmlspecialchars($_POST['motpass']);
   		      $req=$cn->prepare ("SELECT * FROM entrepreneur WHERE pseudo=? AND motpass=?");
   		      $req->execute(array($pseudo,$motpass));
   		      $verifier=$req->rowcount();
   		      
   		      if ($verifier>0)
   		       {
   		      	 header('location:page_entrepreneur.php');
   		      }
       	     
      
       	 else
       	        {
       	        	echo"le mail ou le mot de passe n'est sont pas enregistrer!";
       	        	 header('location:index.php');
       	        
   	
               }
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
				        <li><a href="historique.php">Historique<span class="sr-only">(current)</span></a></li>
				        <li><a href="blog.php">blog<span class="sr-only">(current)</span></a></li>
				         <li><a href="incubateur.php">incubateur<span class="sr-only">(current)</span></a></li>
				        <li><a href="" class="btn btn-small" data-toggle="modal" data-target="#Pre-inscription"></a></li>
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
							        <input type="text" class="form-control" name="nom" placeholder="Votre Nom"><br>
							        <input type="text" class="form-control" name="prenom" placeholder="Votre Prenom"><br>
							        <input type="text" class="form-control" name="domaine" placeholder=" Votre domained'Entreprenaire"><br>
							        <input type="number" class="form-control" name="tel" placeholder=" Numero Telephone"><br>
							        <input type="email" class="form-control" name="email" placeholder="Votre mail"><br>
							        <input type="text" class="form-control" name="psd" placeholder="Votre Pseudo"><br>
							        <input type="password" class="form-control" name="mot" placeholder="Mot de Passe"><br>
									<button class="btn btn-primary btn-block" name="demande" type="submit"><span class="glyphicon glyphicon-save"></span>Valider</button>
							      </div>	
							    </div>
							  </div>
							</div>
						</div>
						 <ul class="nav navbar-nav navbar-right">
				        <li><a href="" class="btn btn-small" data-toggle="modal" data-target="#connexion" style="color: #fff;">Connexion</a></li>
				        <!--Modal pour la connexion-->
				        		<div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content col-md-8 col-md-offset-2" style="margin-top: 110px;">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="card-title" align="center" style="color: blue">Connexion</h4>
				                        <div class="social-line" align="center" >
				                            <a href="#pablo" class="btn btn-just-icon btn-link"  style="color: blue">
				                                <i class="fa fa-facebook-square"></i>
				                            </a>
				                            <a href="#pablo" class="btn btn-just-icon btn-link"  style="color: blue">
				                                <i class="fa fa-twitter"></i>
				                            </a>
				                            <a href="#pablo" class="btn btn-just-icon btn-link"  style="color: blue">
				                                <i class="fa fa-google-plus"></i>
				                            <div class="ripple-container"></div></a>
				                        </div>
							      </div>
							      <div class="modal-body">
							      	<form action="" method="POST" name="form1">
							        <input type="text" class="form-control" name="pseudo" placeholder="Votre Pseudo" required><br>
							        <input type="password" class="form-control" name="motpass" placeholder="Mot de Passe" required><br>
							        
									</div><!--form-group-->
									<button class="btn btn-primary btn-small" style="width: 60%;" name="valider" type="submit"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Connexion</button><br><br>
									</form><!---->
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