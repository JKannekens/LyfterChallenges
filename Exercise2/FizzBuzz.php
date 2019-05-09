<?php
function FizzBuzz($x, $y) {
    for($i = 0; $i <= 100; $i++) {
        if($i % $x == 0) {
            echo("Fizz <br>");
        } elseif($i % $y == 0) {
            echo("Buzz <br>");
        } elseif($i % $x == 0 && $i % $y == 0) {
            echo("FizzBuzz <br>");
        } else {
            echo("$i <br>");
        }
    }
}

FizzBuzz(3,5);
?>