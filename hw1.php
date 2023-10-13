<?php

// Задание #1

$name = "Степан";
$age = "38";
echo "Меня зовут: " . $name . "<br/>";
echo "Мне "  . $age . " лет<br/>";
echo "\"!|/'\"\\";

//Задание #2

const PIC_ALL = 80;
const PIC_FL = 23;
const PIC_PEN = 40;
echo "На школьной выставке " . PIC_ALL . " рисунков. " . PIC_FL . " из них выполнены фломастерами, " . PIC_PEN . " карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?\n";
$pic_paint = PIC_ALL - PIC_FL - PIC_PEN;
echo "Решение: " . PIC_ALL . "-" . PIC_FL . "-" . PIC_PEN . "=" . $pic_paint ." (риунков). Ответ: рисунков выполненых красками $pic_paint.";   

//Задание #3

$age = round(1, 99);
if ($age >= 18 && $age <= 65){
    echo "Вам еще работать и работать";
}
elseif ($age > 65) {
    echo "Вам пора на пенсию";
}
elseif ($age >= 1 && $age <= 17) {
    echo "Вам ещё рано работать";
}
else {
    echo "Неизвестный возраст";
}

//Задание #4

$day = round(1,7);
switch ($day){
    case 1 : 
    case 2 : 
    case 3 : 
    case 4 : 
    case 5 : echo "Это рабочий день"; break;
    case 6 : 
    case 7 : echo "Это выходной день"; break;
    default : echo "Неизвестный день";
}

//Задание #5

$bmv = ["model" => "X5", "speed" => 130, "dors" => 5, "year" => 2013];
$toyota = ["model" => "corolla", "speed" => 120, "dors" => 3, "year" => 2014];
$opel = ["model" => "vectra", "speed" => 110, "dors" => 5, "year" => 2003];
$cars = ["bmw" => $bmv, "toyota" => $toyota, "opel" => $opel];
foreach ($cars as $brand => $car) {
    echo "CAR " . $brand . "<br/>";
    foreach($car as $subkey => $value){
        echo " " . $value;
    } 
    echo "<br/>";
}

//Задание #6

echo "<table>";
for ($col=1; $col<=10; $col++){
    echo "<tr>";
    for ($row=1; $row<=10; $row++){
        $s = $col * $row;
        if ($col % 2 == 0 && $row % 2 == 0){
            echo "<td>(" . $col . '*' . $row . '=' . $s . ")</td>";
        }
        elseif ($col % 2 == 1 && $row % 2 == 1){
            echo "<td>[" . $col . '*' . $row . '=' . $s . "]</td>";
        }
        else echo "<td>" . $col . '*' . $row . '=' . $s . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
