<?php

/**
 * Series of exercises on PHP conditional structures.
 */

echo "1.1 Clean your room Exercise ---- I took a bit of liberty in this exo, i have made a rand instead of manually changing the array s index.";
?>
<br />
<?php

$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

$room_filthiness = array_rand($possible_states, $num = 1);

if ($room_filthiness == 0) {
    echo "Time to burn the house";
} else if ($room_filthiness == 1) {
    echo "Well, let's get to it";
} else if ($room_filthiness == 2) {
    echo "Easy peasy, 5min top";
} else if ($room_filthiness == 3) {
    echo "Nice, can do better";
} else if ($room_filthiness == 4) {
    echo "Purrfect";
}

?>
<br />
<br />
<?php

echo "2. Different greetings according to time";
?>
<br />
<?php
$now = date('h:i:s');
echo $now;

// Test the value of $now and display the right message according to the specifications.
if ($now >= "05:00:00" and $now <= "09:00:00") {
    echo "Good morning";
} else if ($now >= "09:01:00" and $now <= "12:00:00") {
    echo "Good day";
} else if ($now >= "12:01:00" and $now <= "16:00:00") {
    echo "Good afternoon";
} else if ($now >= "16:01:00" and $now <= "21:00:00") {
    echo "Good evening";
} else if ($now >= "21:01:00" and $now <= "04:59:00") {
    echo "Good night";
}

?>
<br />
<br />
<?php

echo "3-4-5. Different greetings according to age AND gender AND mothertongue";
?>
<br />
<form method="get" action="conditions.php">
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
    if ($_GET['age'] < 12) {
        if ($_GET['language'] == "yes") {
            if ($_GET['gender'] == "man") {
                echo "Hello boy";
            }
            if ($_GET['gender'] == "woman") {
                echo "Hello girl";
            }
        }
        if ($_GET['language'] == "no") {
            if ($_GET['gender'] == "man") {
                echo "Aloha boy";
            }
            if ($_GET['gender'] == "woman") {
                echo "Aloha girl";
            }
        }
    }
    if ($_GET['age'] >= 12 and $_GET['age'] <= 18) {
        if ($_GET['language'] == "yes") {
            if ($_GET['gender'] == "man") {
                echo "Hello mister teen";
            }
            if ($_GET['gender'] == "woman") {
                echo "Hello miss teen";
            }
        }
        if ($_GET['language'] == "no") {
            if ($_GET['gender'] == "man") {
                echo "Aloha mister teen";
            }
            if ($_GET['gender'] == "woman") {
                echo "Aloha miss teen";
            }
        }
    }
    if ($_GET['age'] >= 18 and $_GET['age'] <= 115) {
        if ($_GET['language'] == "yes") {
            if ($_GET['gender'] == "man") {
                echo "Hello sir";
            }
            if ($_GET['gender'] == "woman") {
                echo "Hello madam";
            }
        }
        if ($_GET['language'] == "no") {
            if ($_GET['gender'] == "man") {
                echo "Aloha sir";
            }
            if ($_GET['gender'] == "woman") {
                echo "Aloha madam";
            }
        }
    }
    if ($_GET['age'] >= 115) {
        if ($_GET['language'] == "yes") {
            if ($_GET['gender'] == "man") {
                echo "Wow mister! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
            if ($_GET['gender'] == "woman") {
                echo "Wow miss! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
        }
        if ($_GET['language'] == "no") {
            if ($_GET['gender'] == "man") {
                echo "Oi senhor! Sempre vivo ? E uma maquina, como eu ? Posso abraca-lo ?";
            }
            if ($_GET['gender'] == "woman") {
                echo "Oi senhora! Sempre vivo ? E uma maquina, como eu ? Posso abraca-lo ?";
            }
        }
    }
}
?>
<br />
<br />
<?php

echo "6. Soccer team";
?>
<br>
<form method="get" action="conditions.php">
    <label for="man">Man
        <input type="radio" name="gender" value="man">
    </label>
    <br>
    <label for="woman">Woman
        <input type="radio" name="gender" value="woman">
    </label>
    <br>
    <label for="name">Enter your name
        <input type="text" name="name">
    </label>
    <br>
    <label for="age">Enter your age.
        <input type="text" name="age">
    </label>
    <br>
    <input type="submit" name="submit" value="Join the team">
</form>

<?php

if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['name'])) {
    if ($_GET['gender'] == "man") {
        echo "Sorry you don't fit the criteria";
    }
    if ($_GET['gender'] == "woman") {
        if ($_GET['age'] > "21" and $_GET['age'] < "41") {
            echo "Welcome to the team ";
            echo $_GET['name'];
        }
        if ($_GET['age'] < "21" || $_GET['age'] > "41") {
            echo "Sorry you don't fit the criteria";
        }
    }
}
?>
<br />
<br />
<?php

echo "8. School sucks!";
?>
<br>
<form method="get" action="conditions.php">
    <label for="note">Enter a note
        <input type="text" name="note">
    </label>
    <br>
    <input type="submit" name="submit" value="Join the team">
</form>

<?php
if (isset($_GET['note'])) {
    if ($_GET['note'] <= "4") {
        echo "This work is really bad. What a dumb kid!";
    }
    if ($_GET['note'] >= "5" and $_GET['note'] <= "10") {
        echo "This is not sufficient. More studying is required.";
    }
    if ($_GET['note'] == "10") {
        echo "Barely enough.";
    }
    if ($_GET['note'] >= "11" and $_GET['note'] <= "14") {
        echo "Not bad!";
    }
    if ($_GET['note'] >= "15" and $_GET['note'] <= "18") {
        echo "Bravo, bravissimo!";
    }
    if ($_GET['note'] >= "19" and $_GET['note'] <= "20") {
        echo "Too good to be true : confront the cheater!";
    }
}
?>