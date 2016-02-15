<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 18' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p>Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.  </p>';

echo '<h3>' . 'Результат' . '</h3>';

$arr_week = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
$weekend1 =  'Saturday';
$weekend2 =  'Sunday';

foreach ($arr_week as $d) {
    if ($d == $weekend1) {
        echo $d3 = '<b>' . $d . ' ' . '</b>';
    }
    elseif ($d == $weekend2) {
        echo $d3 = '<b>' . $d . ' ' . '</b>';
    }
    else {
        echo $d3 =  $d . ' ';
    }
}