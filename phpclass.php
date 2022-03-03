<?php 
/*$string = "Adebayo";
$float = 10.5;
$int = 50;
$boolean = true;
echo "string is ". $string . "<br>" . "float is " . $float . "<br>" . "int is" . $int . "<br>" . "boolean is " . $boolean;
echo gettype([1234]);*/

/*$names[] ="ade";
$names[] ="bola";
$names[] ="sola";
$names[] ="bayo";
$names[] ="ayo";
//var_dump($names [2]);
echo($names [2]);*/

/*$arr1 = [1,2,3,4];
$arr2 = $arr1;
$arr1[2] = 100;
var_dump($arr1, $arr2); */


$array =[1, 2.3, "welcome", true, [1, 3.2, "hello"], [1, 3.2, "hello"]];
for($i=0;$i < count($array); $i++){

if(gettype($array[$i]) =='array'){
    $childarr = $array[$i];
    for($j=0; $j < count ($childarr); $j++){
        echo $childarr[$j] . "<br>";
    }
}
else{
    echo $array[$i] . '<br>';
}

}
foreach ($array as $single) {
    if(gettype($single) =='array') {
        foreach($sigle as $one) {

        }
    }
}

/*$assoc = [
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
    foreach($assoc as $x => $value){
        echo "the" . $x + 1 . 'array <br>';
        foreach($value as $y => $value1){
            echo ucfirst($y) . 'is' . $value1 . '<br>';
        }
        
    
        echo '<br>';
        
    }
    $assoc[1]['age'] = 50;*/

    /*function print_name($name){
        echo $name;
    }

    function divide(int $a, int$b){
        echo $a/$b;
    }
    print_name('Adebayo');
    divide('10', '2'); */



?>