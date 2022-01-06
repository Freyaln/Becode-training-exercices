<?php

echo "9. The switch structure.";
?>
<br>
<?php

$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

$room_filthiness = array_rand($possible_states, $num = 1);

switch ($room_filthiness) {
    case '0':
        echo "Time to burn the house";
        break;
    case "1":
        echo "Well, let's get to it";
        break;
    case "2":
        echo "Easy peasy, 5min top";
        break;
    case "3":
        echo "Nice, can do better";
        break;
    case "4":
        echo "Purrfect";
        break;
}

?>
<br />
<br />
<?php
$now = date('h');

switch ($now) {
    case "05":
    case "06":
    case "07":
    case "08":
    case "09":
        echo "Good morning";
        break;
    case "09":
    case "10":
    case "11":
    case "12":
        echo "Good day";
        break;
    case "12":
    case "13":
    case "14":
    case "15":
    case "16":
        echo "Good afternoon";
        break;
    case "16":
    case "17":
    case "18":
    case "19":
    case "20":
    case "21":
        echo "Good evening";
        break;
    case "21":
    case "22":
    case "23":
    case "00":
    case "01":
    case "02":
    case "03":
    case "04":
    case "04":
        echo "Good night";
        break;
}

?>
<br />
<br />
<form method="get" action="switch-structure.php">
    <label for="man">Man
        <input type="radio" name="gender" value="man">
    </label>
    <br>
    <label for="woman">Woman
        <input type="radio" name="gender" value="woman">
    </label>
    <p>Do you speak english ?
        <label for="language">Yes
            <input type="radio" name="language" value="yes">
        </label>
        <label for="language">No
            <input type="radio" name="language" value="no">
        </label>
    </p>
    <label for="age">Enter your age.
        <input type="text" name="age">
    </label>
    <input type="submit" name="submit" value="Greet me now">
</form>
<?php

if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['language'])) {
    if ($_GET['age'] < "12") {
        switch ($_GET['language']) {
            case "yes":
                switch ($_GET['gender']) {
                    case "woman":
                        echo "Hello girl";
                        break;
                    case "man":
                        echo "Hello boy";
                        break;
                    default:
                        echo "STOP ERROR MALANDRIN";
                }
                break;
            case "no":
                switch ($_GET['gender']) {
                    case "woman":
                        echo "Aloha girl";
                        break;
                    case "man":
                        echo "Aloha boy";
                        break;
                    default:
                        echo "STOP ERROR MALANDRIN";
                }
                break;
        }
    }
    if ($_GET['age'] >= 12 and $_GET['age'] <= 18) {
        switch ($_GET['language']) {
            case "yes":
                switch ($_GET['gender']) {
                    case "woman":
                        echo "Hello miss teen";
                        break;
                    case "man":
                        echo "Hello mister teen";
                        break;
                    default:
                        echo "STOP ERROR MALANDRIN";
                }
                break;
            case "no":
                switch ($_GET['gender']) {
                    case "woman":
                        echo "Aloha miss teen";
                        break;
                    case "man":
                        echo "Aloha mister teen";
                        break;
                    default:
                        echo "STOP ERROR MALANDRIN";
                }
                break;
        }
    }
    if ($_GET['age'] >= 18 and $_GET['age'] <= 115) {
        switch ($_GET['language']) {
            case "yes":
                switch ($_GET['gender']) {
                    case "woman":
                        echo "Hello madam";
                        break;
                    case "man":
                        echo "Hello sir";
                        break;
                    default:
                        echo "STOP ERROR MALANDRIN";
                }
                break;
            case "no":
                switch ($_GET['gender']) {
                    case "woman":
                        echo "Aloha madam";
                        break;
                    case "man":
                        echo "Aloha sir";
                        break;
                    default:
                        echo "STOP ERROR MALANDRIN";
                }
                break;
        }
    }
    if ($_GET['age'] >= 115) {
        switch ($_GET['language']) {
            case "yes":
                switch ($_GET['gender']) {
                    case "woman":
                        echo "Wow miss! Still alive ? Are you a robot, like me ? Can I hug you ?";
                        break;
                    case "man":
                        echo "Wow mister! Still alive ? Are you a robot, like me ? Can I hug you ?";
                        break;
                    default:
                        echo "STOP ERROR MALANDRIN";
                }
                break;
            case "no":
                switch ($_GET['gender']) {
                    case "woman":
                        echo "Oi senhora! Sempre vivo ? E uma maquina, como eu ? Posso abraca-lo ?";
                        break;
                    case "man":
                        echo "Oi senhor! Sempre vivo ? E uma maquina, como eu ? Posso abraca-lo ?";
                        break;
                    default:
                        echo "STOP ERROR MALANDRIN";
                }
                break;
        }
    }
}
?>