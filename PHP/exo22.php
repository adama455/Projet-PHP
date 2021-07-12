<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre aleatoire</title>
</head>
<body>
<?php
if (!isset($_POST['reponse']) AND !isset($_POST['counter']))
	{
		$rand = rand(1,10);
		$cnt = 10;
		echo 'Bienvenue sur le chiffre myst�re!!! <br/>
		Vous aves 10 coups pour trouver le nombre myst�re compris entre 0 et 1000 <br/>';
	}
	else if (isset($_POST['reponse']) AND empty($_POST['reponse']))
	{
		$rand 	= $_POST['random'];
		$cnt 	= $_POST['counter'];
		echo 'Mettez une valeur !<br/>';
	}
	else
	{
		$rand 	= $_POST['random'];
		$cnt 	= $_POST['counter'];
		$number	= $_POST['reponse'];
		if (preg_match('![0-9]!', $number))
		{
			$cnt--;
		
			if ($number > $rand)
				echo 'le nombre a trouvé doit etre plus petit! <br/>';
			else if ($number < $rand)
				echo 'le nombre a trouvé doit etre plus grand! <br/>';
			else if ($number == $rand)
			{
				echo 'gagnnnnnnnnnnnnnnnne!!!<br/>';
				echo '<a href="exo.php">Voulez-vous rejouer?</a> ';
				exit ();
			}
		}
		else
		{
			echo 'Votre r�ponse ne doit contenir que des chiffres !!!<br/>';
		}
	}
	
	if ($cnt > 0)
	{
		echo
		'Vous avez encore ' . $cnt . ' coups � jouer
		<form action="exo.php" method="post" name="lol">
			<input type="text" name="reponse" />
			<input type="hidden" name="counter" value="'. $cnt .'" />
			<input type="hidden" name="random" value="'. $rand .'" />
			<input type="submit" value="envoye" />
		</form>';
        }
	else
	{
		echo 'Vous avez perdu ! Le nombre secret etait ' . $rand . ' !<br/>';
		echo '<a href="exo.php">Voulez-vous rejouer?</a> ';
	}
    ?>
</body>
</html>