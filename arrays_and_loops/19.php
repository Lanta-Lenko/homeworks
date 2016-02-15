<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 19' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p>Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.  </p>';

echo '<h3>' . 'Результат' . '</h3>';

$arr_week = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
$day2 = date ('l');

foreach ($arr_week as $d) {
    echo $d == $day2 ? '<i>' . $d . ' ' . '</i>' : $d . " ";
}