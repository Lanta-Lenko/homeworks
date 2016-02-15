<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 11' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p>Выведите столбец четных чисел в промежутке от нуля до 100. </p>';

echo '<h3>' . 'Результат' . '</h3>';

for ($t = 0; $t <= 100; $t++) {
    if ($t % 2 == 0) {
        echo "{$t} <br>";
    }
}