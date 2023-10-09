<?php

function task1(Array $array, $concat = false){

        if($concat){
            return implode(",", $array);
        }
        echo "<p>".implode("</p><p>", $array)."</p>";

}

function task2(string $op, int|float ...$args){
    
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

function task3($x, $y){
  if (is_int($x) && is_int($y)){    
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
} else echo "Неправильный тип";

function task4_1(){
    return date('d.m.Y H:m');  
}

function task4_2($datetime = '24.02.2016 00:00:00'){
    return strtotime($datetime);  
}

function task5_1($str = "Карл у Клары украл Кораллы"){
 return str_replace('К', '', $str);
}

function task5_2($str = "Две бутылки лимонада"){
    return str_replace('Две', 'Три', $str);

}

function task6($fname){
    file_get_contents($fname);
}

?>  
