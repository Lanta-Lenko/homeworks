<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 20' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p>Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.<br>

					 	x<br>
						xx<br>
						xxx<br>
						xxxx<br>
						xxxxx<br>
 </p>';

echo '<h3>' . 'Результат' . '</h3>';

for ($coun = 1; $coun <=20; $coun++) {
    for ($x3 = 1; $x3 <= $coun; $x3++) {
        echo "*";
    }
}
