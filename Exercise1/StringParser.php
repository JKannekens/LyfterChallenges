<?php
$sentences = file("input.txt");
foreach ($sentences as $value) {
    $purified = preg_replace('/[^a-zA-Z]/',' ', $value);
    echo "$purified <br>";
}
?>