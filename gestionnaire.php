<?php 
if(isset($_POST['valider_le_document'])) 
{
$target_dir = "document_valider/";
$target_file = $target_dir . basename($_FILES["fichierXML"]["name"]);
$uploadOk = 1;
$xmlFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// verifions si le fichier est bien uploader
if ($uploadOk == 0) {
  echo "le fichier n'est pas uploade.";
// sinon tout est ok
} else {
  if (move_uploaded_file($_FILES["fichierXML"]["tmp_name"], $target_file)) {
    echo "le fichier ". htmlspecialchars( basename( $_FILES["fichierXML"]["name"])). " a ete mis en ligne.";
    //echo $_FILES["fichierXML"]["name"];
    $xml=simplexml_load_file($target_dir.$_FILES["fichierXML"]["name"]) or die("Erreur: dans le fichier XML");
    // affichage du fichier 

    //print_r($xml);
  } else {
    echo "desole une erreur est produite .";
  }
}
}

echo '
<!DOCTYPE html>
<html>
<head>
	<title>gestionnaire</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2> valider et envoyer le document xml</h2>
<form method="POST" action="gestionnaire.php" enctype="multipart/form-data">
<div class="form-group">
<label for="fichierXML">Selectionner le document</label>
<input type="file" name="fichierXML" placeholder="selectionner le document a valide" class="form-control">
<button type="submit" name="valider_le_document"> valider le document</button>
</form>
</body>
</html>
' ; 
?>