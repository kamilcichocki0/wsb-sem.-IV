<?php
function value($a):string{
    if ($a >= 0) {
        return "Większa od 0";
    }elseif($a == 0){
        return "Równa 0";
    }else {
        return "Mniejsze od zera";
    }
}

$x = value(-5);
echo $x, "<br>";

  function getValue($a):float{
    return $a;
}

echo getValue(1.5); echo "<br>";
echo gettype(getValue(1)); echo "<br>";

//zasięg zmiennych

$x = 10;

function show(){
    echo "Zmienna globalna x: ", $GLOBALS['x'], "<br>";
}

show();

function show1(){
  global $x;
  echo "Zmienna globalna funkcja: ",  $x, "<br>";
}

show1();


function add(){
    $number = 10;
    echo "\$number  = $number";
    $number += 5;
}


add(); //10
add(); //10

function add1(){
    static $number = 10;
    echo "\$number  = $number";
    $number += 5;
}

add1(); //10
add1(); //15
add1(); //20
echo "<br>";

function multi($x, $y=1){
    return $x * $y;
}

echo multi(2); //2
echo multi(2,3); //6
echo multi(2.4,3); //
echo "<br>";

//argumenty i typy danych

function multi1(float $x, int $y){
    return $x * $y;
}

echo multi1(1.5, 3); //4,5
echo multi1(3, 1.5); //3
echo "<br>";

//









?>