<?php

include 'login.php';
include 'logout.php';

//Try to connect to the DB, if not display error
try {
    $db = new PDO('mysql:host=localhost;dbname=hiiking;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$id_get = $_GET['id'];

if (isset($_POST['submit'])) {


    $delete = "DELETE FROM hiking WHERE id='$id_get'";
    $rem = $db->prepare($delete);
    $rem->execute();
    if (!$rem) {
        echo "\nPDO::errorInfo():\n";
        print_r($dbh->errorInfo());
    }
    echo $id_get;
}
$resultat = $db->query("SELECT * FROM hiking where id='$id_get'");
echo "<table border='1'>

<tr>

<th>ID</th>

<th>Name</th>

<th>Difficulty</th>

<th>Distance</th>

<th>Duration</th>

<th>Height difference</th>
</tr>";



$donnees = $resultat->fetch();
echo "<tr>";

echo "<td>" . $donnees['id'] . "</td>";
echo "<td>" . $donnees['name'] . '</a>' . "</td>";
echo "<td>" . $donnees['difficulty'] . "</td>";
echo "<td>" . $donnees['distance'] . 'km' . "</td>";
echo "<td>" . $donnees['duration'] . "</td>";
echo "<td>" . $donnees['height_difference'] . 'm' . "</td>";

echo "</tr>";

echo "</table><br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="read.php" method="post">
        <input type="submit" name="delete" value="Delete this hike">
    </form>
</body>

</html>