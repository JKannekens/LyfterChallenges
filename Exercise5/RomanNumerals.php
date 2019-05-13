<?php
function RomanNumber($number)
{
    $map = array(1000 => 'M', 
                 900 => 'CM', 500 => 'D', 
                 400 => 'CD', 100 => 'C', 
                 90 => 'XC', 50 => 'L', 
                 40 => 'XL', 10 => 'X', 
                 9 => 'IX', 5 => 'V', 
                 4 => 'IV', 1 => 'I');

    foreach ($map as $value => $sign) {
        while ($number >= $value) {
            $number -= $value;
            echo $sign;
        }
    }
    echo "<br>";
}

RomanNumber(159);
RomanNumber(296);
RomanNumber(3992);
