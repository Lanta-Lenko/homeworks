<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 08.02.2016
 * Time: 22:32
 */

$r = $_POST ['textarea'];

/*function getReverse($r){
    echo strrev ($r);
    }

getReverse($r);*/
// не работает с кириллицей.

function getReverse($r)
{
    preg_match_all('/./u', $r, $array);
    $r = implode('',array_reverse($array[0])); //возвращает строку состоящую из элементов массива.
    return $r;
}
echo getReverse($r);

