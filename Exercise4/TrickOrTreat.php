<?php

function candyCounter()
{
    $string = fopen("input.txt", 'r');

    while (false !== ($line = fgets($string))) {
        $data = array();
        preg_match('/Vampires: (\d+), Zombies: (\d+), Witches: (\d+), Houses: (\d+)/', $line, $data);
        $candies = ($data[1] * 3 + $data[2] * 4 + $data[3] * 5) * $data[4];
        $children = $data[1] + $data[2] + $data[3];
        $amount = floor($candies / $children);
        echo ("$amount <br>");
    }
}

candyCounter()
?>
