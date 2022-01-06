<?php

$name = "aurélien";

function capitalize($str)
{
    $str = ucfirst($str);
    return $str;
};
echo capitalize($name) . '<br/>';

$year = date('Y');
echo $year . '<br/>';

$fullDate = date('r');
echo $fullDate . '<br/>';

$num1 = 10;
$num2 = 87;

function sumNum($a, $b)
{
    if (is_nan($a) == false && is_nan($b) == false) {
        $sum = $a + $b;
        return $sum;
    } else {
        echo "Error: argument is the not a number.";
    }
}

echo sumNum($num1, $num2) . '<br/>';

$string = "Hey did you hear the news ?";

function acronym($str)
{
}
