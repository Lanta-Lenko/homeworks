<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 17' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p> Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>';

echo '<h3>' . 'Результат' . '</h3>';

$arr_month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$month = date ('F');

foreach ($arr_month as $m) {
    echo $m == $month ? '<b>' . $m . ' ' . '</b>' : $m . " ";
}