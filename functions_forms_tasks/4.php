<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 07.02.2016
 * Time: 11:32
 */

echo '<h3>' . 'Задание 4' . '</h3>';

echo 'Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.' . '<br>' . '<br>';

$dir = __DIR__;

echo 'Файлы в директории' . $dir . ':';

function getDirList ($dir) {
    $list = scandir($dir);
    foreach ($list as $item) {
        echo "{$item}" . '<br>';
    }
}

echo getDirList($dir);