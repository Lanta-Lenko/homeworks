<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 16' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p>Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано на картинке. <br>
1, 2, 3<br>
4, 5, 6<br>
7, 8, 9<br>
 </p>';

echo '<h3>' . 'Результат' . '</h3>';

$table = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$el = 0;
foreach ($table as $column) {
    echo $column . ' ';
    $el++;
    if ($el == 3) {
        echo '<br>';
        $el = 0;
    }
}
