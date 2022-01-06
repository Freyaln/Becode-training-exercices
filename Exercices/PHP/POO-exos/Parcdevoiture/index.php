<?php

require 'voiture.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>

<body>

    <table id="table">
        <tr>
            <th>From</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Color</th>
            <th>Mileage (km)</th>
            <th>Has been used</th>
            <th>Weight (kg)</th>
            <th>Immatriculation</th>
            <th>Release date</th>
            <th>Age(Years)</th>
            <th>Reserved</th>
            <th>Type of use</th>
            <th>Picture of the vehicule</th>
        </tr>
        <?php
        echo $car->displayNewMileage();
        echo $car2->displayCars();
        echo $car3->displayNewMileage();
        echo $car4->displayCars();
        echo $car5->displayCars();
        echo $car6->displayCars();
        echo $car7->displayCars();
        echo $car8->displayCars();
        echo $car9->displayCars();
        ?>
    </table>


</body>

</html>