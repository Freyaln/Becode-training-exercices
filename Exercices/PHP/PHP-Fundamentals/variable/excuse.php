<form method="post" action="excuse.php">
    <label for="nameChild">Enter your child's name :
        <br>
        <input type="text" name="nameChild">
    </label>
    <br>
    <br>
    <label for="gender">Is your child a boy or a girl ?
        <br>
        <input type="radio" name="gender" value="son"> Son
        <br>
        <input type="radio" name="gender" value="daughter"> Daughter
    </label>
    <br>
    <br>
    <label for="nameTeacher">Enter the name of the teacher
        <br>
        <input type="text" name="nameTeacher">
    </label>
    <br>
    <br>
    <label for="reason">Choose the reason of the absence :
        <br>
        <input type="radio" name="reason" value="illness"> Illness
        <br>
        <input type="radio" name="reason" value="pet"> Death of a pet
        <br>
        <input type="radio" name="reason" value="activity"> Significant extra-curricular activity
        <br>
    </label>
    <label for="perso">
        Any other excuse of your choice :
        <input type="text" name="perso">
    </label>
    <br>
    <input type="submit" name="submit" value="Confirm">
</form>


<?php
if (isset($_POST['nameChild']) && isset($_POST['gender']) && isset($_POST['nameTeacher']) && isset($_POST['reason']) && isset($_POST['perso'])) {

    $child = $_POST['nameChild'];
    $gender = $_POST['gender'];
    $teacher = $_POST['nameTeacher'];
    $perso = $_POST['perso'];

    switch ($_POST['reason']) {
        case "illness":
            echo "Dear " . $teacher . "\n" . "I'm sorry to announce you that my " . $gender . "\n" . $child . " is ill and won't be able to attend the classes today.";
            break;
        case "pet":
            echo "Dear " . $teacher . "\n" . "I'm sorry to announce you that my " . $gender . "'s pet has died and so " . $child . " won't be able to attend the classes today.";
            break;
        case "activity":
            echo "Dear " . $teacher . "\n" . "I'm sorry to announce you that my " . $gender . "'s pet has an extra-curricular activity plan for today and so, " . $child . " won't be able to attend the classes today.";
            break;
        default:
            echo "Dear " . $teacher . "\n" . "I'm sorry to announce you that my " . $gender . "\n" . $child . " has " . $perso;
            break;
    }
}

?>