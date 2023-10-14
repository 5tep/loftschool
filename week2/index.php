<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

require('src/functions.php');

// Преобразуйте массив в json и сохраните в файл users.json

echo task1(create_people()) ? "OK": "Save error"; 

// преобразуйте данные из файла обратно ассоциативный массив РНР
$array = task2();
echo '<pre>';
var_dump($array);

// Посчитайте количество пользователей с каждым именем в массиве
echo '<pre>';
var_dump(task3($array));

// Посчитайте средний возраст пользователей
echo '<pre>';
var_dump(task4($array));

?>
