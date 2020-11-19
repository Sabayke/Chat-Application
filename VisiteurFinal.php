<?php 
echo '
<!DOCTYPE html>
<html lang="fr">
<head> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> </head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
<center> ';
?>
 <?php
// charger le fichier .xml
	$xml=simplexml_load_file("restaurant.xml") or die("Erreur: dans le fichier XML");
	foreach($xml->restaurant as $restaurant)
	{
    
		echo '

			<div class="container">
  				<h2>Les coordonnees</h2>
  				<ul class="list-group">
    				<li class="list-group-item">Nom <span class="badge">'.$restaurant->coordonnees->nom.'</span></li>
    				<li class="list-group-item">Adresse <span class="badge">'.$restaurant->coordonnees->adresse.'</span></li>
    				<li class="list-group-item">Restaurateur <span class="badge">'.$restaurant->coordonnees->nom_restaurateur.'</span></li>
  				</ul>
			</div>

			<div class="container">
  				<h2>Description Etablissement</h2>
  				<ul class="list-group">
    				<li class="list-group-item">'.$restaurant->coordonnees->description->liste.' <span class="badge">'.$restaurant->coordonnees->description->paragraphe.'</span></li>
    				<li class="list-group-item">image Etablissement <img src="'.$restaurant->coordonnees->description->paragraphe->image['url'].'" height="400"; "width="400";><span class="badge"></span></li>
  				</ul>
			</div>
			<div class="container">
  				<h2>La carte</h2>
  				<ul class="list-group">
    				<li class="list-group-item">Plat <span class="badge">'.$restaurant->carte->plat.'</span></li>
    				<li class="list-group-item">Type <span class="badge">'.$restaurant->carte->plat['type'].'</span></li>
    				<li class="list-group-item">Prix <span class="badge">'.$restaurant->carte->plat->prix.'</span></li>
    				<li class="list-group-item">Description <span class="badge">'.$restaurant->carte->plat->description_carte.'</span></li>
  				</ul>
			</div>
			<div class="container">
  				<h2>Menu</h2>
  				<ul class="list-group">
    				<li class="list-group-item">Ordre <span class="badge">'.$restaurant->menus->menu['ordre'].'</span></li>
    				<li class="list-group-item">Titre <span class="badge">'.$restaurant->menus->menu->titre.'</span></li>
    				<li class="list-group-item">Description <span class="badge">'.$restaurant->menus->menu->description_menu.'</span></li>
    				<li class="list-group-item">Prix <span class="badge">'.$restaurant->menus->menu->prix_menu.''.$restaurant->menus->menu->prix_menu['device'].' </span></li>
  				</ul>
			</div>
			<div class="container">
  				<h2>Service a la carte</h2>
  				<ul class="list-group">
    				<li class="list-group-item">Description plat <span class="badge">'.$restaurant->service_a_la_carte->description_plat.'</span></li>
    				<li class="list-group-item">Restaurant <span class="badge">'.$restaurant->service_a_la_carte->description_restaurant.'</span></li>
    				<li class="list-group-item">Prix <span class="badge">'.$restaurant->service_a_la_carte->prix_service.' '.$restaurant->service_a_la_carte->prix_service['device'].'</span></li>
  				</ul>
			</div>
		';
	}
echo '
</center>
</body>
</html>
' ; 
?>