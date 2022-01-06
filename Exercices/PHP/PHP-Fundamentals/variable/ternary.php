<?php

$gender = ["M", "F"];
$randGender = array_rand($gender);
$res = strtoupper($gender[$randGender]);
echo ($res == "F") ? "Hello bobette" : "Hello bobby";
