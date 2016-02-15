<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 07.02.2016
 * Time: 9:54
 */
$a = explode(" ", $_POST ['textarea1']);
$b = explode(" ", $_POST ['textarea2']);

function getCommonWords($a, $b){

    foreach ($a as $value1) {
        foreach ($b as $value2) {
            if ($value1 == $value2) {
                echo $value1 . "   ";
            }
        }

    }
    echo '.';

}

echo getCommonWords($a, $b);


