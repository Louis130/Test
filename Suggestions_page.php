<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Titre</title>
		<link rel="stylesheet" href="style.css" />
	</head>
    <body>
 	  	<header>
			<h1>Your Page</h1>
			<?php include("Navigation.php"); ?>
   		</header>
		<form method="post" action="pageaffiche.png">
			<p>
				<label for="suggestion">Help us to improve our website !
				</label><br /><br />
				<textarea name="suggestion" id="suggestion" rows="10"cols="50">  Make us know what you think about our website...
				</textarea>
				<input type="submit" value="Send" />
			</p>
		</form>
		<footer>
			<?php include("Footer.php") ?>
		</footer>
	</body>
</html>