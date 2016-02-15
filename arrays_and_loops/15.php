<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 15' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p> Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10. </p>';

echo '<h3>' . 'Результат' . '</h3>';

$arr2 = array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr2 as $count) {
    $count = count ($arr2);
}
echo $count;