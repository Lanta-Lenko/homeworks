<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 14' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p> Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть — выведите на экран \'Есть!\', иначе выведите \'Нет!\'.</p>';

echo '<h3>' . 'Результат' . '</h3>';

$num2 = array(4, 2, 5, 19, 13, 0, 10);

foreach ($num2 as $e2) {
    if ($e2 = 2) {
        echo 'Есть!' . '<br>'; break;
    }
    elseif ($e2 = 3) {
        echo 'Есть!' . '<br>'; break;
    }
    elseif ($e2 = 4) {
        echo 'Есть!' . '<br>'; break;
    }
    else{
        echo 'Нет!' . '<br>';
    }
}

//или

$s = array(2, 3, 4);
$p = 0;
foreach ($num2 as $e2) {
    if (in_array ($e2, $s)) {
        $p = 1;
    }
}
echo $p ? 'Есть!' : 'Нет!';