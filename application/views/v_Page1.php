<!DOCTYPE html>
<!-- commentaire -->
<html>
	<head>
		<meta charset="utf-8" />
		<title>Titre</title>
	</head>

	<body>
            TEST
            <p />
            <?php
                echo 'plop'.$pseudo;
                echo '<p />';
                echo 'lignes '.$nb_ligne;
                echo '<p />';
                echo 'donnees '.$donnees->ID;
                echo '<p />';
            ?>
            <a href="<?php echo site_url(); ?>forum/accueil">accueil</a>
            <p />

        </body>

</head>