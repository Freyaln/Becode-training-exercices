<?php

$familyMembers = ['Jean-Marc', 'Ariane', 'Virginie', 'Tanguy', 'Tania'];
echo '<pre>';
print_r($familyMembers);
echo '</pre>';
?>
<br>
<?php
$favRecipes = ['Chicons au gratin', 'Hachis parmentier', 'Kare raicu'];
echo '<pre>';
print_r($favRecipes);
echo '</pre>';
?>
<br>
<?php
$favMovies = ['Matrix', 'Stargate', 'Star-trek', 'Lord of the Rings'];
echo '<pre>';
print_r($favMovies[3]);
echo '</pre>';
?>
<br>
<br>
<br>

<?php

$tania = array(
    'firstname' => 'Tania',
    'lastname' => 'Gomes',
    'age' => 37,
    'favourite season' => 'summer',
    'soccer' => true,
);
$tania['favourite recipes'] = ['Kare raicu', 'Bolognese pasta', 'Chocolat cake'];
$tania['favourite movies'] = ['Harry Potter', 'Taxi driver', 'Joker'];
$tania['hobbies'] = ['Reading', 'Hiking', 'Cooking', 'Doing nothing'];

$me = array(
    'firstname' => 'Aurélien',
    'lastname' => 'Freyling',
    'age' => 34,
    'favourite season' => 'summer',
    'soccer' => false,
    'family members' => $familyMembers,
    'favourite recipes' => $favRecipes,
    'favourite movies' => $favMovies,
);

$me['hobbies'] = ['Gaming', 'Hiking', 'Cooking', 'Doing nothing'];
$me['tania'] = $tania;
array_push($me['hobbies'], 'Taxidermy');
$me['lastname'] = 'Durand';
echo '<pre>';
print_r($me);
echo '</pre>';

$sumMe = count($me['hobbies']);
$sumTania = count($tania['hobbies']);
echo $sumMe + $sumTania;
