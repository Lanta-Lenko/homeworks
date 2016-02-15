<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 3' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p> Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result. </p>';

echo '<h3>' . 'Результат' . '</h3>';

$square = array(26, 17, 136, 12, 79, 15);

foreach ($square as $element){
    $element2 = array ($element*$element);

    echo $element2;
}