<?php
include 'login.php';
include 'logout.php';

//Try to connect to the DB, if not display error
try {
    $db = new PDO('mysql:host=localhost;dbname=hiiking;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['submit'])) {
    $nameHike = $_POST['name'];
    $difficulty = $_POST['difficulty'];
    $distance = $_POST['distance'];
    $duration = $_POST['duration'];
    $height = $_POST['height'];


    $insert = "INSERT INTO hiking (name, difficulty, distance, duration, height_difference) 
values ('$nameHike', '$difficulty', '$distance', '$duration', '$height')";
    $add = $db->prepare($insert);
    $add->execute();
    if (!$add) {
        echo "\nPDO::errorInfo():\n";
        print_r($dbh->errorInfo());
    }
}
//Try succeed, connection to the DB and select info to display
$resultat = $db->query('SELECT * FROM hiking');
echo "<table border='1'>

<tr>

<th>ID</th>

<th>Name</th>

<th>Difficulty</th>

<th>Distance</th>

<th>Duration</th>

<th>Height difference</th>


</tr>";

while ($donnees = $resultat->fetch()) {
    echo "<tr>";

    echo "<td>" . $donnees['id'] . "</td>";
    echo "<td>" . '<a href=\'update.php?id=' . $donnees['id'] . '\'>' . $donnees['name'] . '</a>' . "</td>";
    echo "<td>" . $donnees['difficulty'] . "</td>";
    echo "<td>" . $donnees['distance'] . 'km' . "</td>";
    echo "<td>" . $donnees['duration'] . "</td>";
    echo "<td>" . $donnees['height_difference'] . 'm' . "</td>";
    echo "<td>" . '<button>' . '<a href=\'delete.php?id=' . $donnees['id'] . '\'>' . 'Delete' . '</a>' . '</button>' . "</td>";

    echo "</tr>";
}
$id_get = $donnees['id'];

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
        <input type="hidden" name="id" value="<?php echo $id_get; ?>"><br>
        <label for="name">Nom</label>
        <input type="text" name="name" placeholder="Ajouter une rando"><br>
        <label for="difficulty">Difficulté</label>
        <input type="text" name="difficulty" placeholder="Indiquez la difficulté"><br>
        <label for="distance">Distance</label>
        <input type="text" name="distance" placeholder="Indiquez la distance à parcourir"><br>
        <label for="duration">Durée</label>
        <input type="text" name="duration" placeholder="Indiquez la durée moyenne"><br>
        <label for="height">Dénivelé</label>
        <input type="text" name="height" placeholder="Indiquez le dénivelé"><br>
        <input type="submit" name="submit">
    </form>


</body>

</html>