<!DOCTYPE html>
<!-- commentaire -->
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="<?php echo($url_base.'/assets/css/style_header.css')?>"/>
		<title>Titre</title>
	</head>

	<body>
		<header>
			<img src="<?php echo($url_base.'/assets/img/logo_titre.jpg')?>" id="logo_titre" alt="Logo titre"/>
			<h1 id="text_titre">
			LE FESTIVAL DE MUSIQUE DE L'ESAIP <br />LES 28, 29 et 30 JUIN 2013
			</h1>
		</header>

		<div id="corps">
			<nav>
				<div id="nav">
					<ul id="menu" >
						<li><a href="<?php echo($url_base)?>">Accueil</a></li>

						<li>Fest'Esaip
							<ul>
								<li><a href="Historique/c1">Historique</a></li>
								<li>Equipes / Contact</li>
								<li>Sponsors</li>
							</ul>
						</li>

						<li>Programmation
							<ul>
								<li>Animations</li>
								<li>Stands</li>
								<li>Concerts</li>
							</ul>
						</li>

						<li>Infos pratiques
							<ul>
								<li>Camping</li>
								<li>Accessibilité</li>
								<li>Venir au Fest'Esaip</li>
							</ul>
						</li>

						<li>S'inscrire / Tickets</li>

						<li><?php echo $log_or_not ?>                                                            
                                                    <ul>
                                                        <form method="post" action="<?php echo($url_base.'accueil/login')?>">
                                                            <!--légal de faire ça ? Mettre un lien dans une action ?-->
                                                        <fieldset>
                                                            <legend>Vos coords : </legend>

                                                            <label for="login">login : </label>
                                                            <input type="text" name="login" id="login" placeholder="Ex : a10a" size="12" maxlength="16" / required>
                                                            <br />
                                                            <label for="pass">mdp :</label>
                                                            <input type="password" name="pass" id="pass"
                                                                   size="12" maxlength="16" / required>
                                                            <br />

                                                            <input type="submit" value="Login" />
                                                        </fieldset>
                                                        </form>
                                                    </ul>                                                      
						</li>
					</ul>
				</div>
			</nav>

			<aside>
				PLOP
			</aside>
		</div>





	</body>
</html>