<?php

//Assignment 1

/*use PHPUnit\Framework\Constraint\Operator;

function jema(int $a, float $b, string $c){
    $floatToInt = intval($b) + $a;
    $newFloat = $floatToInt/1000;
    return  $c . " your answer is "  . $newFloat;
}
echo jema(7, 2.45, 'Dara') . '<br>';


//Assignment 2
function neutral($x, $y, $z){
    $k = gettype($x);
    $l = gettype($y);
    $m = gettype($z);
    $result = $k . '<br>' . $l . '<br>' . $m;
    return $result;
}
    var_dump (8, 5.5, 'Sola') . '<br>';

//Assignment 5
function myName($name){
    return $name;
}
echo myName ('Oluwadarasimi') . '<br>';


//Assignment 4
function calAdd($x, $y){
    $result = $x + $y;
    return $result;
}
echo calAdd (2, 4) . '<br>';

function calDiv($a, $b){
    $result = $a/$b;
    return $result;
}
echo calDiv (4, 2) . '<br>';

function calsub($x, $y){
    $result = $x - $y;
    return $result;
}
echo calSub (4, 2) . '<br>';

function calMult($x, $y){
    $result = $x * $y;
    return $result;
}
echo calMult (2, 4) . '<br>';

function calMod($x, $y){
    $result = $x % $y;
    return $result;
}
echo calMod (5, 2) . '<br>';

//Assignment 3
$assoc = [
    [
        "name" => 'First',
        "age" => 100,
        "phone" => 12345,
        "class" => 'JSS2',
        "food" => 'Rice'
    ],

    [
        "name" => 'Second',
        "age" => 100,
        "phone" => 12345,
        "class" => 'JSS2',
        "food" => 'Rice'
    ],

    [
        "name" => 'Third',
        "age" => 100,
        "phone" => 12345,
        "class" => 'JSS2',
        "food" => 'Rice'
    ],
];
// $emp = [];
// $item =2;
// array_push($emp,$assoc);
// var_dump($emp);

function myFunction(array $net ){
    foreach($net as $x => $value){
        echo "the" . $x + 1 . 'array <br>';
        foreach($value as $y => $value1){
            echo ucfirst($y) . 'is' . $value1 . '<br>';
        }
        
        echo '<br>';
    }
}
     echo myFunction($assoc);

     function calSwt(array $something){
        foreach ($something as $s){
           if (is_array($s)) {
                calSwt($s);
            }
            else{
                echo $s . '<br>';
            }
        }
     }*/

use PhpParser\Node\Stmt\Switch_;

$something = [1, 2, [1, 2], 3];

    function calculator($a, $b, $user_operator){
        $operator = ['+', '-', '*', '/', '%',];
        if (in_array($user_operator, $operator)){
            $ourA = (float) $a;
            $ourB = (float) $b;

            if($user_operator == '+'){
                return $ourA + $ourB;
            }
            elseif($user_operator == '-'){
                return $ourA - $ourB;
            }
            elseif($user_operator == '/'){
                return $ourA / $ourB;
            }
            elseif($user_operator == '*'){
                return $ourA * $ourB;
            }
            elseif($user_operator == '%'){
                return $ourA % $ourB;
            }
        }
        else{
            echo 'Have a nice day';
        }
    }
    calculator('1.8', 3, '+');

    function calcutata($a, $b, $user_operator){

        
    }







