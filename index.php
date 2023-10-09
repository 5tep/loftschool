<?php
require('src/functions.php');
//-----------
$strings = ['one', 'two', '3'];
task1($strings);
echo task1($strings, true);

//---------
task2('+', 3, 5, 0.5);
task2('/', 3, 5, 0.5);

//----------
task3(3,5);

//-----------
$curdate = task4_1();
$utime = task4_2('24.02.2016 00:00:00');

//-----------
$patter = 'Карл у Клары украл Кораллы';
$twobottle = 'Две бутылки лимонада';
$res = task5_1($patter);
$threebottle = task5_2($twobottle);

//---------
$fname = 'text.txt';
$fp = fopen($fname, "w");
fwrite($fp, $text);
fclose($fp);
$text_from_file = task6($fname);
?>
