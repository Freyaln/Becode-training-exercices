<?php

$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

foreach ($pronouns as $pronouns) {
    if ($pronouns == 'He/She') {
        echo $pronouns . ' codes <br/>';
    }
    if ($pronouns != 'He/She') {
        echo $pronouns . ' code <br/>';
    }
}

$line = 1;

while ($line < 120) {
    echo "Blizzard video games themes FTW <br/>";
    $line++;
}

for ($lines = 1; $lines < 120; $lines++) {
    echo "Civilization games rocks <br/>";
}

$becodeNames = ['David', 'Sara', 'Sarah', 'Aurélien', 'Aline', 'Sylvain', 'Mess', 'Arnaud', 'Christophe', 'etc...'];

foreach ($becodeNames as $becodeNames) {
    echo $becodeNames . "<br/>";
}

$countries = ['BE' => 'Belgium', 'DE' => 'Germany', 'EN' => 'England', 'P' => 'Portugal', 'IT' => 'Italy', 'J' => 'Japan', 'N' => 'Netherlands', 'S' => 'Spain', 'L' => 'Luxembourg', 'S' => 'Switzerland'];

?>
<form method="get">
    <label for="countries">Select your country :
        <select name="country">
            <?php foreach ($countries as $countries) {
                echo "<option value=\"" . $countries[$keys] . "\">" . $countries . "</option>";
            } ?>
        </select>
    </label>
</form>