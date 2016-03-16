<?php
	include("SQL.png");
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
			<tr>
				<th>Suggestions</th>
			</tr>
			<tr>
				<?php
					include("tablecreation.php");
				?>
			</tr>
		</table>
	<footer>
		<?php include("Footer.php"); ?>
</html>