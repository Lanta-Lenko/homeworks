
 <?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 10.02.2016
 * Time: 23:05
 */

 echo '<h2>Задание 2</h2>
<p> Воспроизвести сообщение "headers already sent"</p>
1. Перед < ?php поставила пробел и пустую строку. <br>
2. Сохраняю файл в кодировке utf-8 (надеясь, что в начале запишется BOM). <br>
3. Вывожу сначала этот текст через echo, а потом пытаюсь установить cookies. <br>';

 $value = 5;
 setcookie ("TestCookie", $value);

 echo 'и, на всякий случай, header  <br>  </p>';
 header("My header: Test_content");

 echo '<p> 4. После ?> тоже ставлю пробел и пустую строку.</p> А ошибки все равно нет :(';

 ?>

