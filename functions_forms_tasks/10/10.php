<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 09.02.2016
 * Time: 17:07
 */

$words = explode(" ", $_POST ['textarea']);
//$count = array_count_values($words);
print_r(array_count_values($words));