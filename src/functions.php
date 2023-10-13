<?php

function task1(array $array, $concat = false)
{
        if($concat){
            return implode(",", $array);
        }
        echo "<p>".implode("</p><p>", $array)."</p>";

}

function task2_old(string $op, int|float ...$args)
{   
    if ($op == '+'){
        $res = 0;
        foreach($args as $arg){
            $res += $arg;
        }
    }
    elseif ($op == '-'){
        $res = $args[0];
        for($i =1; $i< sizeof($args); $i++){
            $res -= $args[$i];
        }
    }
    elseif ($op == '*'){
        $res = 1;
        foreach($args as $arg){
            $res *= $arg;
        }
    }
    elseif ($op == '/'){
        $res = $args[0];
        for($i =1; $i< sizeof($args); $i++){
            $res /= $args[$i];
        }
    }
    else {
            echo 'Неизвестный оператор!'; return 0;
        }
    return $res;   
}

function task2(string $op, int|float ...$args)
{
    switch ($op) {
        case '+' : $res = array_sum($args); break;
        case '-' : $res = array_shift($args) - array_sum($args); break;
        case '*' : $res = array_product($args); break;
        case '/' : $first =  array_shift($args); $res =  array_reduce($args, function($result, $item){return $result / $item;}, $first); break;
        default : $res = "Неизвестный оператор";
    }
    echo $res;
}

function task3($x, $y)
{
  if (!is_numeric($x) || !is_numeric($y)){  
    echo "Неправильный тип переменных, ожидалось целое положительное число!";
    return;
  }
    echo "<table>";
    for ($col=1; $col<=$x; $col++){
        echo "<tr>";
        for ($row=1; $row<=$y; $row++){
            $s = $col * $row;
            echo "<td>" . $col . '*' . $row . '=' . $s . "</td>";
        }
    echo "</tr>";
    }
    echo "</table>";
}

function task4_1()
{
    return date('d.m.Y H:m');  
}

function task4_2($datetime = '24.02.2016 00:00:00')
{
    return strtotime($datetime);  
}

function task5_1($str = "Карл у Клары украл Кораллы")
{
    return str_replace('К', '', $str);
}

/**
 * Summary of task5_2
 * @param mixed $str
 * @return string
 */
function task5_2($str = "Две бутылки лимонада")
{
    return str_replace('Две', 'Три', $str);
}

function createfile($fname, $text)
{
    $fp = fopen($fname, "w");
    fwrite($fp, $text);
    fclose($fp);
}

/**
 * Summary of task6
 * @param mixed $fname
 * @return bool|string
 */

 function task6($fname)
{
    return file_get_contents($fname);
}