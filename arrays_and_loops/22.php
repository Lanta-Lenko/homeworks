<?php
/**
 * Created by PhpStorm.
 * User: Iolanta
 * Date: 15.02.2016
 * Time: 20:19
 */

echo '<h3>' . 'Exercise 22' . '</h3>';

echo '<h3>' . 'Условие' . '</h3>';

echo '<p>Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br>
				 		xx<br>
						xxxx<br>
						xxxxxx<br>
						xxxxxxxx<br>
						xxxxxxxxxx<br>

 </p>';

echo '<h3>' . 'Результат' . '</h3>';

for ($x = 'xx'; $x <='xxxxxxxxxx'; $x = $x . "xx") {
    echo $x . '<br>';
}
