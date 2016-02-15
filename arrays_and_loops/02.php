<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 2' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p> Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.  </p>';

echo '<h3>' . 'Результат' . '</h3>';

$sum = array(1, 20, 15, 17, 24, 35);
foreach ($sum as $result) {
    $result = array_sum($sum);
    echo $result; break;
}