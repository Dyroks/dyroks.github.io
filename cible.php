<?php


if (isset($_FILES['upload']) AND $_FILES['upload']['error'] == 0) {
    
    if ($_FILES['upload']['size'] <= 1024000) {
        
        $infosfichier = pathinfo($_FILES['upload']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'png');
        
        if (in_array($extension_upload, $extensions_autorisees)) {
            
            $fileid = md5(uniqid(rand(), true));
            $nom = "{$fileid}.{$extension_upload}";
            
            move_uploaded_file($_FILES['upload']['tmp_name'], 'uploads/' . $nom);
            echo "Votre transmo a été ajoutée !";
        }
    }
}









try
{
    $bdd = new PDO('mysql:host=localhost;dbname=d3transmo;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO transmos(name, file_name, class, description) VALUES(:name, :file_name, :class, :description)');
$req->execute(array(
	'name' => $_POST['nom'],
	'file_name' => $nom,
	'class' => $_POST['classe'],
	'description' => $_POST['message'],
	));

?>