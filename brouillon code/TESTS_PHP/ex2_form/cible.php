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
    <div>
        <p>
            Bonjour <?php  echo htmlspecialchars($_POST['prenom']); ?>
        </p>

        <p>
            <?php
                // ****
                // AFFICHAGE VEGETARIEN
                // affichage de l'option "végétarien"
                // ****
                if (isset($_POST['vegetarien']))
                {
                    echo '<p>Vous êtes donc végétarien</p>';
                }
                else{
                    echo ' <p>Vous n\'êtes pas végétarien</p>';
                }

                // ****
                // CHOIX MULTIPLES
                // partie du choix multiple on indique ce qu'il a choisi dans les choix multiples
                // ****
                if (isset($_POST['choix'] ))
                {
                    // ****
                    // URL
                    // htmlspecialchars => permet d'échapper le code html dans l'url par exemple que certains
                    // utilisateurs méchants voudraient insérer (javascript par exemple)
                    // elle transformera les cheverond des balises HTML
                    // elle affichera la balise plutôt que de l'exécuter
                    // pour retirer les balises utiliser : strip_tags
                    // ****
                    echo '<p>Vous avez choisi : ' . htmlspecialchars($_POST['choix']) . '</p>';
                }
//                else
//                    if($_POST['choix']){
//                    echo ' <p>Choisisez un choix  </p>';
//                }

                // ****
                // AFFICHAGE COURS
                // affichage de l'option des cases "cours"
                // ****
                if (isset($_POST['case']))
                {
                echo '<p>Vos cours choisis sont : ' . htmlspecialchars($_POST['case']). '</p>';
                }
                else{
                    echo ' <p>Vous n\'avez choisi aucun cours </p>';
                }

                // ****
                // ENVOI DU FICHIER
                // envoi du fichier téléchargé dans un autre dossier et non le temporaire
                // fonction utilisée : move_upload_file
                // ****
                $_FILES['monfichier']['type'];
                // ****
                // fichier envoyé ou non
                // ****
                if(isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
                {
                    // vérifier la taille de fichier
                    if($_FILES['monfichier'])['size'] <= 1000000)
                    {
                        // ****
                        // VERIFICATION EXTENSION
                        // on récupère l'extension du fichier dans une variable
                        // $infosfichier => avec "pathinfo" renvoie un array contenant l'extension du fichier
                        // $extension_upload => on stock dans une variable ce que $infosfichier renvoie
                        // ****
                        $infosfichier = pathinfo($_FILES['monfichier']['name']);
                        $extension_upload = $infosfichier['extension'];
                        $extension_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                        // ****
                        // une fois l'extension récupèrée on la compare à un tableau d'extensiosn autorisées(array)
                        // on vérifie si l'extension récupérée fait bien partie des extensiosn autorisées avec "in_array"
                        // ****
                        if(in_array($extension_upload, $extension_autorisees))
                        {
                            // on valide le fichier en appelant "move_uploaded_file"
                            // le fichier sera placé dans "uploads"
                            move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                            echo "L'envoi a bien été effectué !";
                        }
                    }

                }
                else{
                    echo '<p>Vous n\'avez pas envoyé de fichier !</p>';
                }

            ?>
        </p>

        <a href="index.php"/>Retourner à la page index</a>
    </div>
</body>

</html>