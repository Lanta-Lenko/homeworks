<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 07.02.2016
 * Time: 11:28
 */

//$file_text="text.txt";

$file_text = file_get_contents('./text.txt');
$words = explode (" ", $file_text);
$n = $_POST ['number'];

foreach ($words as $w) {
    if ($w > $n) {
        unset ($w);
    } else {
        echo $w;
    }
}