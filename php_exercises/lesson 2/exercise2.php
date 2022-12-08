<?php

header('Content-Type: text/plain');
$prime = array(1, 3, 5, 7, 9);

foreach ($prime as $val) {
    $byTwo = ($val * 2);
    $power = ($val * $val);
    $cube = $power * $val;

    echo "$byTwo\t$power\t$cube\n";
}


?>