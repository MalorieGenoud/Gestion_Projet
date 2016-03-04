<?php
/**
 * Created by PhpStorm.
 * User: Aida.SEJMENOVIC
 * Date: 19.02.2016
 * Time: 10:55
 */
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>TEST php 3</title>

</head>

<body>
<!--
    upload de fichiers
    on ajoute l'attribut "enctype="multipart/form-data" à la balise "form"
-->
<form action="secret.php" method="POST" enctype="multipart/form-data">
    <h1>ENCRYPTAGE DE MDP</h1>
    <p>
        <label>Entrez votre mdp :
            <input type="password" name="mdp"/>
            <input type="submit" value="Valider"/>
        </label>
    </p>
</form>
<p>Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>
</body>

</html>
