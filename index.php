<?php
require('src/functions.php');
//-----------
echo '<br><p>Task1</p><br>';
$strings = ['one', 'two', '3'];
task1($strings);
echo '<br>';
echo task1($strings, true);

//---------
echo '<br><p>Task2</p><br>';
task2('+', 3, 5, 0.5);
echo '<br>';
task2('/', 3, 5, 0.5);

//----------
echo '<br><p>Task3</p><br>';
task3(3, 5);

//-----------
echo '<br><p>Task4</p><br>';
$curdate = task4_1();
$utime = task4_2('24.02.2016 00:00:00');
echo $curdate;
echo '<br>';
echo $utime;

//-----------
echo '<br><p>Task5</p><br>';
$patter = 'Карл у Клары украл Кораллы';
$twobottle = 'Две бутылки лимонада';
$res = task5_1($patter);
$threebottle = task5_2($twobottle);
echo $res;
echo '<br>';
echo $threebottle;

//---------
echo '<br><p>Task6</p><br>';
$fname = 'text.txt';
$anytext = 'array_filter() - Фильтрует элементы массива с помощью callback-функции';
createfile($fname, $anytext);
$text_from_file = task6($fname);
echo $text_from_file;
