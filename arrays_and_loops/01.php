<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 1' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p> Дан массив с элементами \'html\', \'css\', \'php\', \'js\', \'jq\'. С помощью цикла foreach выведите эти слова в столбик.  </p>';

echo '<h3>' . 'Результат' . '</h3>';

$words = array ('html', 'css', 'php', 'js', 'jq');
foreach ($words as $v) {
    echo $v . '<br>';
}