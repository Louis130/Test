isset($bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf-8', 'root', '');
/* on teste si la variable qu'on veut ajouter existe */
{
$bdd->exec('INSERT INTO suggestions VALUES(\'\', \'$_POST[suggestion]\', \'\')'); /* on crée une nouvelle entrée dans la base de données */
$mes=$bdd->query('SELECT contenu FROM Suggestion');
$message=array($mes); /* on crée un tableau contenant la nouvelle base de données */
$mes->closeCursor();
}