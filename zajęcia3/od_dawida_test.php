<?php
$colors = array('red', 'green', 'blue');

for ($i=0; $i< count($colors); $i++){
    echo "$colors[$i] </br>";
}

$ass = array(
    "1" => "a",
    "2" => "b",
    "3" => "c   ",
    );

foreach ($ass as $key => $value){
   echo "$key  $value </br>";
}

$student = array(
    array("Anna", "Nowak"),
    array("Test", "Testowy"),
    array("Test", "Aaaa", "Lądki Zdrój"),
);

for ($i=0; $i<count($student); $i++){
    for ($j=0; $j< count($student[$i]); $j++) {
        echo $student[$i][$j], " ";
    }
    echo "</br>";
}