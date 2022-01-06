<form method="post" action="unicorn.php">
    <label for="human">Human
        <input type="radio" name="origin" value="human">
    </label>
    <br>
    <label for="cat">Cat
        <input type="radio" name="origin" value="cat">
    </label>
    <br>
    <label for="unicorn">Unicorn
        <input type="radio" name="origin" value="unicorn">
    </label>
    <br>
    <input type="submit" name="submit" value="Click me !">
    <br>
</form>

<?php

$unicorn = "<img src=\"./img/unicorn.gif\"/>";
$cat = "<img src=\"./img/cat.gif\"/>";
$human = "<img src=\"./img/human.gif\"/>";
$empty = "<img src=\"./img/empty.gif\"/>";

$img = $empty;
if (isset($_POST['origin'])) {
    $img = $_POST['origin'] == "unicorn" ? $unicorn : ($_POST['origin'] == "cat" ? $cat : $human);
}
echo $img;

?>