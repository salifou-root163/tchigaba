<?php
   $cn=new PDO('mysql:host=localhost;dbname=hackathon',"root",'');
   if (isset($_POST['envoi']))
   { 
     	if (!empty($_POST['cmp']) AND !empty($_POST['mdp']))
     	{    $cmp=htmlspecialchars($_POST['cmp']);
             $mdp=htmlspecialchars($_POST['mdp']);
   		      $req=$cn->prepare("SELECT * FROM ad WHERE cmp=? AND mdp=?");
   		      $req->execute(array($cmp,$mdp));
   		      $verifier=$req->rowcount();
   		      if ($verifier==0)
   		       {
   		      	 header('location:index2.php');
   		      }
       	     
       }
       	 else
       	        {
       	        	echo"le mail ou le mot de passe est incorrect!";
       	        }
   	
   	# code...
  }
?>

<!DOCTYPE html>
<html>
 <head>
	<title>BIENVENUE</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <script type="text/javascript" src="js/jquery.js"></script>
 <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
<cript type="text/javascript" src="js/bootstrap.js"></script>
 </head>
 <body>
   <div class="col-md-5  col-md-offset-4">

            <form action="" method="POST">
              <img src="capture.PGN">
            </form>
          </div>
	<div class="container">
		<div class="row" style="margin-top: 150px;">
			<div class="col-md-6 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<p class="panel-title">AUTHENTIFICATION</p>
					</div>
					<div class="panel-body">
						<form method="POST" action="">
							<input type="email" name="cmp" placeholder="Email" class="form-control">
							<input type="password" name="mdp" placeholder="Mot de passe" class="form-control" style="margin-top: 10px;">
							<div class="col-md-8 col-md-offset-4">
							<button class="btn btn-primary" name="envoi" style="margin-top:20PX ">connexion</button>
                           
              </div>
						
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>