<?php

function create_people()
{
    $names = ['Петр', 'Иван', 'Марья', 'Дарья', 'Семен'];
    //$users = [];
    for ($i = 1; $i <= 50; $i++){
        $users[] = [
            'id' => $i,
            'name' => $names[mt_rand(0,4)],
            'age' => mt_rand(18, 45)
        ];
    }
    return $users;  
}

function task1($array)
{
    $filename = 'users.json'; 
    return file_put_contents($filename, json_encode($array));
}

function task2()
{
    $filename = 'users.json';
    $string = file_get_contents($filename);
    return json_decode($string, true);
}

function task3($array)
{  
    return array_count_values(array_column($array, 'name'));
}

function task4 ($array)
{
   return array_sum(array_column($array, 'age'))/count($array);
}
?>
