<?php 

try{
    $bdd = new PDO('mysql:host=localhost;dbname=response;charset=utf8;', 'root', '');
}catch(Exception $e){
    die("connexion échouée....." . $e -> getMessage());
}

if(isset($_POST['recherche'])){
    if(!empty($_POST['elementRechercher'])){

        $idColis =htmlspecialchars($_POST['elementRechercher']);

        $requete = $bdd -> prepare("SELECT * FROM `colis` WHERE id = ?");
        $requete -> execute(array($idColis));

        $infos = $requete -> fetch();

    }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>expédition colis</title>
</head>
<body>
   
<form action="" method ="post">
    <input type="text " name="elementRechercher" required>
    <button type="submit" name="recherche">Rechercher</button>
</form>
<?php if(isset($infos)){ ?>
<p>Identifiant colis: <?= $infos['id'] ?></p>
<p>Nom expéditeur: <?= $infos['nom_expediteur'] ?></p>
<p>Nom destinataire: <?= $infos['nom_destinataire'] ?></p>
<?php } ?>


</body>
</html>