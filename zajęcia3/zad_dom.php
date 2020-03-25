<?php
/*
Zadanie. 1 
Utwórz tablicę 3-wymiarową i napisz dla niej funkcję wyświetlającą zawartość (wykorzystaj w funkcji foreach)
Proszę wysłać na Moodle
*/
$persons1 = array(
    array("Anna", "Kowalska", "Warszawa"),
    array("Karol", "Nowak", "Kraków"),
    array("Marcin", "Jankowski", "Poznań")
  );

function showArray1($persons1){
  foreach ($persons1 as $key => $value) {
      foreach ($value as $value) {
        echo $value, " ";
        }
      echo "<br>";
    }
}
  
  showArray1($persons1);
  echo "<br>";
  echo "<hr>";
  echo "<br>";
/*
Zadanie. 2
Posortuj prawidłowo dane (niemalejąco), dane jakie chcemy uzyskać to:
Andrzej, Anna, Janina, Krystyna, Zenon
Napisz funkcję sortującą dane 
wysietl prawidłowe dane na ekranie za pomocą funkcji
*/

$persons2 = array("Janina", "anna", "Zenon", "krystyna", "andrzej");
$persons2_new = array_map('ucwords', $persons2);

function showArray2($persons2_new){
    foreach ($persons2_new as $value) {
      echo $value, ", ";
      }
    echo "<br>";
  }
  
  sort($persons2_new);
  showArray2($persons2_new);
  echo "<br>";
  echo "<hr>";
  echo "<br>";

/*
Zadanie. 2*
Dane podaje użytkownik w formularzu i zatwierdza formularz przyciskiem
*/

echo <<<FORM
<form method="post">
    <input type="text" name="text1"><br>
    <input type="text" name="text2"><br>
    <input type="text" name="text3"><br>
    <input type="text" name="text4"><br>
    <input type="text" name="text5"><br>
    <input type="submit">
</form>
FORM;

if(isset($_POST['text1'])){
    $words1 = $_POST['text1'];
    $words2 = $_POST['text2'];
    $words3 = $_POST['text3'];
    $words4 = $_POST['text4'];
    $words5 = $_POST['text5'];
    $table = array($words1, $words2, $words3, $words4, $words5);
    $table_new = array_map('ucwords', $table);
}
function showArray3($table_new){
    foreach ($table_new as $value) {
      echo $value, ", ";
      }
    echo "<br>";
  }
  
 sort($table_new);
 showArray3($table_new);
 echo "<br>";
 echo "<hr>";
 echo "<br>";


?>