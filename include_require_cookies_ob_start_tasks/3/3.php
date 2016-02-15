<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 10.02.2016
 * Time: 20:54
 */

if( isset($_POST['color'])) {
    $color = $_POST['color'];
    header('Location: 3.html');
    echo  $color;
}
else {
    echo"<p>Цвет не выбран</p><br>";
}

/*
if( isset($_POST['color'])) {
    $color = $_POST['color'];
    echo  $color;
}
else {
    echo"<p>Цвет не выбран</p><br>";
}

*/