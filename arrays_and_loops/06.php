<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 6' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p>Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.<br>

$arr = array(\'green\'=>\'зеленый\', \'red\'=>\'красный\',\'blue\'=>\'голубой\');<br>
$en = array(\'green\', \'red\',\'blue\');<br>
$ru = array(\'зеленый\', \'красный\', \'голубой\'); <br>
 </p>';

echo '<h3>' . 'Результат' . '</h3>';

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $k => $v){
    $en = compact($k);

    print_r($en);
//    $en = array ($key);
  //  $ru = array ($value);


}

