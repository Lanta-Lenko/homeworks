<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 08.02.2016
 * Time: 22:26
 */

$dir = __DIR__ . DIRECTORY_SEPARATOR . 'gallery';

 if ($_FILES && isset($_FILES['photo'])) {
     //move_uploaded_file($_FILES['photo']['tmp_name'], $dir . DIRECTORY_SEPARATOR .  $_FILES['photo']['name']);

     foreach ($_FILES['photo']['tmp_name'] as $k => $tmp_name) {
         move_uploaded_file($tmp_name, $dir . DIRECTORY_SEPARATOR .  $_FILES['photo']['name'][$k]);
     }

    echo "Файл успешно загружен";
}
else {
    echo "Ошибка загрузки файла";
}



/*
$uploaddir = './gallery/';
$uploadfile = $uploaddir.basename($_FILES['photo']['name']);

if (copy($_FILES['photo']['tmp_name'], $uploadfile))
{
    echo "<h3>Файл успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

function getImage (){


}*/