<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 21' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p>Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.  <br>
1<br>
22<br>
333<br>
4444<br>
55555<br>
 </p>';

echo '<h3>' . 'Результат' . '</h3>';

for ($number = 1; $number <= 9; $number++ ) {
    echo str_repeat($number, $number) . '<br>';
}
