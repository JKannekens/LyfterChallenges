<?php
namespace App\Http\Controllers;
class StringParser extends Controller
    { 
        public static function Parse($array){
            foreach ($array as $value) {
                $purified = preg_replace('/[^a-zA-Z]/',' ', $value);
                echo "$purified <br>";
            }
        }
}
?>

