<?php
//Mandatory since I'm not using PHP 8+ -- Found on stackoverflow -> https://stackoverflow.com/questions/834303/startswith-and-endswith-functions-in-php
function str_starts_with($haystack, $needle)
{
    return strpos($haystack, $needle) === 0;
}


class Voiture
{


    private $immatriculation;
    private $dateCirculation;
    public $mileage;
    public $newMileage;
    private $model;
    private $brand;
    private $color;
    private $weight;
    private $availability;
    private $typeOfUse;
    private $origin;
    private $hasServed;
    private $age;
    private $picture;



    function __construct($immatriculation, $dateCirculation, $mileage, $model, $brand, $color, $weight)
    {

        $this->immatriculation = $immatriculation;
        $this->dateCirculation = $dateCirculation;
        $this->mileage = $mileage;
        $this->model = $model;
        $this->brand = $brand;
        $this->color = $color;
        $this->weight = $weight;

        if ($brand == 'Audi') {
            $this->availability = 'Reserved';
        } else {
            $this->availability = 'Available';
        }

        if (str_starts_with($immatriculation, 'BE')) {
            $this->origin = 'Belgium';
        }
        if (str_starts_with($immatriculation, 'FR')) {
            $this->origin = 'France';
        }
        if (str_starts_with($immatriculation, 'DE')) {
            $this->origin = 'Deutschland';
        }

        if ($weight >= '2000') {
            $this->typeOfUse = 'Utility vehicule';
        } else {
            $this->typeOfUse = 'City car';
        }


        if ($mileage < '100000') {
            $this->hasServed = 'Low';
        }
        if ($mileage > '100000' and $mileage < '200000') {
            $this->hasServed = 'Middle';
        }
        if ($mileage >= '200000') {
            $this->hasServed = 'Hight';
        }

        //$this->date - $dateCirculation = $this->age;
        $this->age = date('Y') - $dateCirculation;

        $this->picture = './img/' . $this->model . '.webp';
    }

    public function displayCars()
    {
        echo "<tr>
        <td>" . $this->origin . "</td>
        <td>" . $this->brand . "</td>
        <td>" . $this->model . "</td>
        <td>" . $this->color . "</td>
        <td>" . $this->mileage . "</td>
        <td>" . $this->hasServed . "</td>
        <td>" . $this->weight . "</td>
        <td>" . $this->immatriculation . "</td>
        <td>" . $this->dateCirculation . "</td>
        <td>" . $this->age . "</td>
        <td>" . $this->availability . "</td>
        <td>" . $this->typeOfUse . "</td>
        <td><img src= " . $this->picture . " id='pic' ></td>
    </tr>";
    }

    public function augmentMileage()
    {
        $this->mileage = $this->mileage + '100000';
        if ($this->mileage < '100000') {
            $this->hasServed = 'Low';
        }
        if ($this->mileage > '100000' and $this->mileage < '200000') {
            $this->hasServed = 'Middle';
        }
        if ($this->mileage >= '200000') {
            $this->hasServed = 'Hight';
        }
    }

    public function displayNewMileage()
    {
        $this->augmentMileage();
        echo "<tr>
        <td>" . $this->origin . "</td>
        <td>" . $this->brand . "</td>
        <td>" . $this->model . "</td>
        <td>" . $this->color . "</td>
        <td>" . $this->mileage . "</td>
        <td>" . $this->hasServed . "</td>
        <td>" . $this->weight . "</td>
        <td>" . $this->immatriculation . "</td>
        <td>" . $this->dateCirculation . "</td>
        <td>" . $this->age . "</td>
        <td>" . $this->availability . "</td>
        <td>" . $this->typeOfUse . "</td>
        <td><img src= " . $this->picture . " id='pic' ></td>
    </tr>";
    }
}

$car = new Voiture('BE-1-ABC-123', '2021', '15456', 'S5', 'Audi', 'Red', '1745');
$car2 = new Voiture('BE-1-XYZ-987', '2020', '87350', '620d', 'BMW', 'Grey', '1810');
$car3 = new Voiture('FR-AA-235-AD', '2020', '76954', 'Grand-Cherokee', 'Jeep', 'White', '2431');
$car4 = new Voiture('DE-KA-PA-777', '2021', '28792', 'Corolla-Hybrid-GR-Sport', 'Toyota', 'Red', '1315');
$car5 = new Voiture('DE-KA-GF-623', '2019', '96032', 'E-Jumpy', 'Citroen', 'Red', '1837');
$car6 = new Voiture('BE-1-FGT-079', '2001', '260354', '316i', 'BMW', 'Darkgrey', '1285');
$car7 = new Voiture('BE-1-TTH-321', '2012', '125321', 'Europa-S', 'Lotus', 'White', '995');
$car8 = new Voiture('FR-DD-759-BT', '2016', '102654', 'Expert-Combi', 'Peugeot', 'Orange', '2134');
$car9 = new Voiture('FR-AC-456-EP', '2019', '76215', 'AMG-GT', 'Mercedes', 'Yellow', '1515');
