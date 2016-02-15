<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 25' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p>Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.</p>';

echo '<h3>' . 'Результат' . '</h3>';

$my_arr2 = array();
$lenth = 15;
$min = 1;
$max = 100;

for ($k=0; $k<$lenth; $k++) {
    $my_arr2[] = rand($min, $max);
}

print_r($my_arr2) . '<br>';

echo "min = ".min($my_arr2) . '<br>';
echo "max = ".max($my_arr2) . '<br>';
echo '<br>';

