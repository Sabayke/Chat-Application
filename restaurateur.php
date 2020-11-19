<?php 
// uploader le fichier xml et le stocker dans un dossier
if(isset($_POST['Valider'])) 
{
$target_dir = "gestionnaire/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$xmlFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// verifions si le fichier exist ou pas
if (file_exists($target_file)) {
  echo "Fichier exist deja.";
  $uploadOk = 0;
}

// verifions la taille du fichier
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Fichier est grand.";
  $uploadOk = 0;
}

// verifier le format du fichier
if($xmlFileType != "xml") {
  echo "seul les fichiers .xml sont autorise.";
  $uploadOk = 0;
}

// verifions si le fichier est bien uploader
if ($uploadOk == 0) {
  echo "le fichier n'est pas uploade.";
// sinon tout est ok
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "le fichier ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " a ete uploader.";
  } else {
    echo "desole une erreur est produite .";
  }
}
}
?>
<?php
echo '
<!DOCTYPE html>
<html>
<head>
	<title>restaurateur</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h2>Veuillez selectionner le fichier a envoye </h2>
<form action="restaurateur.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label for="fileToUpload">Veuillez uploaer un fichier :</label>
      <input type="file" class="form-control" id="fileToUpload" placeholder="Uploader un fichier" name="fileToUpload">
    </div>
  <button type="submit" value="Valider" name="Valider" class="btn btn-default" >Valider</button>
</form>

</body>
</html>
' ; 