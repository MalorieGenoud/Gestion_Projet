<?php
/**
 * Created by PhpStorm.
 * User: Aida.SEJMENOVIC
 * Date: 28.01.2016
 * Time: 09:02
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TEST php 1</title>

</head>

<body>
    <!--
        upload de fichiers
        on ajoute l'attribut "enctype="multipart/form-data" à la balise "form"
    -->
    <form action="cible.php" method="POST" enctype="multipart/form-data">
        <h1>TEST FORMULAIRE PHP</h1>
        <p>
            <label> Prénom: <input type="text" name="prenom"/></label>
        </p>
        <p>Choisissez votre choix:
            <select name="choix">
                <option value="choix0" selected="selected">...</option>
                <option value="choix1">Choix 1</option>
                <option value="choix2">Choix 2</option>
                <option value="choix3">Choix 3</option>
                <option value="choix4">Choix 4</option>
            </select>
        </p>

        <p>Choisissez vos cours parmi les choix ci-dessous:</br>
            <label name="case" for="case">HTML</label>
            <input name="case" type="checkbox" name="case" id="case" />
            <label name="case" for="case">CSS3</label>
            <input name="case" type="checkbox" name="case" id="case" />
            <label name="case" for="case">javaScritp</label>
            <input name="case" type="checkbox" name="case" id="case" />
            <label name="case" for="case">PHP</label>
            <input name="case" type="checkbox" name="case" id="case" />
        </p>

        <p>
            <label> Etes-vous végétarien ? <input type="checkbox" name="vegetarien"/></label>
        </p>

        <textarea name="message" rows="8" cols="45">Vous avez un message à passer ?</textarea>
            <p>
                <input type="submit"/>
            </p>

        <!--
            upload de fichiers
            on a ajouté l'attribut "enctype="multipart/form-data" à la balise "form"
            indication d'ou va être envoyé le fichier (dans un dossier par exemple) dans "cible.php" sinon
            il sera envoyé dans un dossier temporaire
        -->
        <p>
            <input type="file" name="monfichier"/>
        </p>
        <p>
            <input type="submit" value="Envoyer le fichier"/>
        </p>

</form>

</body>

</html>