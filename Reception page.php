<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf-8', 'root', '');
}
catch (Exception $e)
{
		die('Erreur : ' . $e->getMessage());
}
$bdd->exec('INSERT INTO suggestions VALUES(\'\', \'$_POST[suggestion]\', \'\')'); /* on crée une nouvelle entrée dans la base de données */
$mes=$bdd->query('SELECT contenu FROM Suggestion');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Suggestions</title>
		<link rel="stylesheet" href="style2.css" />
	</head>
	<body>
		<header>
			<h1>Secret Page</h1>
			<?php include("Navigation.php"); ?>
		</header>
	</body>
		<table>
			<ul>
				<?php
					while($message = $mes->fetch())
						<li> echo '<p>' . htmlspecialchars($message['contenu']) . '</p>' <li>
				?>
			</ul>
		</table>
</html>