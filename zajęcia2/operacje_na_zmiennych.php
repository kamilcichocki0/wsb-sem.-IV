<?php
$a = 1.0;
$b = 1;
if ($a == $b){
  echo "Równe";
} else {
  echo "Różne";
}
echo"<hr>";
echo gettype($a),"<br>";//doubl
echo gettype($b),"<br>";//integer
echo"<hr>";
if ($a === $b){
  echo "Identyczne";
} else {
  echo "Różne";
}
echo"<hr>";
//operatory rzutowania
//bool, int, float, string, array, object, unset
$text = "123ssd";
$x = (int)$text;
echo $x;//123
echo"<hr>";
$text = -2;
$x = (bool)$text;
echo $x;//1
echo"<hr>";
$text = 10;
$x = (unset)$text;
echo gettype($x);//NULL
echo"<hr>";
 ?>
