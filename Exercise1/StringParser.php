<?php
$sentences = file("input.txt");
function StringParser($array) {
    foreach ($array as $value) {
        $purified = preg_replace('/[^a-zA-Z]/',' ', $value);
        echo "$purified <br>";
    }
}

StringParser($sentences);
?>