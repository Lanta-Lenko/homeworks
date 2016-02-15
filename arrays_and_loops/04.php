<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 4' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p> Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов. 	<br>

$arr = array(\'green\'=>\'зеленый\', \'red\'=>\'красный\',\'blue\'=>\'голубой\'); 	</p>';

echo '<h3>' . 'Результат' . '</h3>';

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key => $val) {
    echo $key . '<br>';
}

echo '<br>';

foreach ($arr as $key => $val) {
    echo $val . '<br>';
}