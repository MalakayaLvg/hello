<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$prenom = "je sais pas comment tu t'appelles";
$usernameAutorise = "oslynx";
$motdepasseAutorise = "mdp";
$secret = "le sens de la vie c'est vers la droite";
$contenu = "Entrez votre nom d'utilisateur et votre mot de passe pour connaitre la verité";

if(isset($_GET["prenom"])){
    $prenom = $_GET["prenom"];
}

if(isset($_GET["prenom"])){
    $username = $_GET["username"];
}
if(isset($_GET["password"])){
    $password = $_GET["password"];
}




if ($username===$usernameAutorise){
    echo "correct";
}

if ($username===$usernameAutorise & $password===$motdepasseAutorise){
    $contenu = $secret;
}
?>

<h2>Hello <?= $prenom ?></h2>

<form method="get" action="">
    <input type="text" name="prenom">
    <button type="submit">OK</button>
</form>

<br>
<br>
<form action="">
    <input placeholder="username" type="text" name="username" id="">
    <input placeholder="password" type="password" name="password" id="">
    <button type="submit">OK</button>
</form>


<p> <?= $contenu ?></p>

</body>
</html>
