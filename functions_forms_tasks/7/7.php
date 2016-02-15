<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 09.02.2016
 * Time: 1:16
 */

if (isset($_POST ['ok'])) {
$comm = '<p>' . $_POST['username'] . '</p>' . '<p>' . $_POST['comments'] . '</p>';
file_put_contents('1.txt', $string, FILE_APPEND);// Добавляем комментарий в файл
header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
exit();
}
include ('1.txt');



/*
/* Принимаем данные из формы */
//$name = $_POST["username"];
//$text = $_POST["comments"];
//$name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
//$text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности

/*if (isset($_POST ['ok'])) {
    $comm = '<p>' . $_POST['username'] . '</p>' . '<p>' . $_POST['comments'] . '</p>';
    file_put_contents('1.txt', $string, FILE_APPEND);// Добавляем комментарий в файл
    header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
}
*/








/*
if (isset($_REQUEST['ok'])) {

    $string = '<p>'.$_REQUEST['username'].'<br>'.$_REQUEST['comments'];
    file_put_contents('1.txt', $string, FILE_APPEND);
    header("Location: /test.php");
    exit();
}
include ('1.txt');
*/