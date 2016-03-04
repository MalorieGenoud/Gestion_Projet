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
<?php
if (!isset($_POST['mdp']) OR $_POST['mdp'] != "kangourou")
{
?>
    <form action="formulaire.php" method="POST" enctype="multipart/form-data">
        <h1>ENCRYPTAGE DE MDP</h1>
        <p>
            <label>Entrez votre mdp :
                <input type="password" name="mdp"/>
                <input type="submit" value="Valider"/>
            </label>
        </p>
    </form>
    <p>Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>

    <?php
}
    else
    {
    ?>
        <div>
            <p>Code d'accès au serveur central de la NASA</p>
            <?php

            // ****
            // VERIFICATION ENVOI MDP
            // on vérifie d'abord si l'on a envoyé un mot de passe avec "isset"
            // ****
            if (isset($_POST['mdp']) AND $_POST['mdp'] ==  "kangourou") // Si le mot de passe est bon
            {
                // On affiche les codes
                ?>
                <h1>Voici les codes d'accès :</h1>
                <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>

                <p>
                    Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
                    La NASA vous remercie de votre visite.
                </p>
                <?php
            }
            else // Sinon, on affiche un message d'erreur
            {
                echo '<p>Mot de passe incorrect !</p>';
            }
            ?>
            <a href="formulaire.php"/>Retourner à la page index</a>
        </div>
<?php
}

?>


</body>

</html>
