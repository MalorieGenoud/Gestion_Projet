
<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
    <title>TEST php 1</title>

    </head>

<body>

    <p>
        <?php
        if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter']))
        {
            $nbRepet = (int) $_GET['repeter'];
            if($nbRepet < 100)
            {
                for($repetition = 0; $repetition <= $nbRepet; $repetition ++)
                {
                    echo 'Bonjour' .  $_GET['nom'] . ' ' .  $_GET['prenom']. '</br>';
                }
            }
            else{
                echo 'le nombre est trop grand !';
            }

        }
        else{
            echo 'Il faut indiquer un nom, un prénom et un nombre de répétitions !';
        }
        ?>
    </p>


</body>


</html>