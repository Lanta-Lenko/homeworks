<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 11.02.2016
 * Time: 0:29
 */

setcookie('time', '1', time()+20);

if (isset ($_COOKIE['time'])){
    die("<h3> Вы не можете отправить сообщение повторно.</h3> Попробуйте позже. ");
} else {
    header('Location: thanks.html');
}