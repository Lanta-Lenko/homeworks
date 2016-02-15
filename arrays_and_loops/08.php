<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 8' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p>Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку \'-1-2-3-4-5-6-7-8-9-\'.  </p>';

echo '<h3>' . 'Результат' . '</h3>';

$num_stroke = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($num_stroke as $line) {
    echo '-';
    echo $line;
}
echo '-';