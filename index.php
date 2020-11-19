<?php 
echo '
<!DOCTYPE html>
<html>
<head>
 <style>
body {
   background-image: url("image/restau.jpg");
   background-size: cover;
   background-repeat: no-repeat;
   background-attachment: fixed; 
}

</style> 
	<title>plateforme restaurant</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
			<center>
			<h1>Bienvenue dans notre plateforme</h1>
			</center>
					<div class="collapse navbar-collapse navbar-right" id="mynavbar">
			              <ul class="nav navbar-nav">
			              		<li class="active"><a href="restaurateur.php">Restaurateur</a></li>
			                 	<li class="active"><a href="gestionnaire.php">Gestionnaire</a></li>
			               		<li class="active"><a href="VisiteurFinal.php">Visiteur</a></li>    
			               

			              </ul>
			        </div>
			<footer class="active" id="footer">
        		<div class="col-sm-7 footer-copyright">
          			© Tous les droits sont reserves
          			<div class="credits">
            			conçu par Brahim Fichale Amandine et Auror <a href="#"></a>
          			</div>
          		</div>
          	</footer>

</body>
</html>

';
?>