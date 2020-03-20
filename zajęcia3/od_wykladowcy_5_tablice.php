<?php 
  $colors = array("white", "green", "red");

  for ($i=0; $i < count($colors); $i++) { 
    $count = $i + 1;
    echo "Element $count: $colors[$i]<br>";
  }

  $colors[0] = "orange";
  $colors[2] = "aqua";

  function show($array){
    for ($i=0; $i < count($array); $i++) { 
    $count = $i + 1;
    echo "Element $count: $array[$i]<br>";
  }
  }

  show($colors);

//tablice asocjacyjne
  $data = array(
    "name" => "Janusz",
    "surname" => "Nowak",
    "birthday" => "20.02.2020",
    "city" => "Poznań"
  );

  echo <<<TABLE
    Imię: $data[name]<br>
    Nazwisko: $data[surname]<br>
TABLE;

//foreach
  foreach ($data as $value) {
    echo "$value ";
  }

  foreach ($data as $key => $value) {
    echo "$key: $value<br>";
  }

//tablice wielowymiarowe
  $student = array(
    array("Anna", "Nowak"),
    array("Paweł"),
    array("Agnieszka", "Nowak", "Poznań")
  );

//wyświetl dane za pomocą dwóch pętli for

  foreach ($student as $key => $value) {
    foreach ($value as $value) {
      echo $value, " ";
    }
    echo "<br>";
  }


  $cyfry = array(
    array(1,2,3,4),
    array(5,6,7),
    array(8),
    array(9,10)
);

  foreach($cyfry as $wartosc){
    echo "<br>";
    foreach($wartosc as $x){
        echo "$x ";
    }
}

//sortowanie

  $tab = array(10, 1, 5, 1, 75, -4, 100);

  function showArray($tab){
    foreach ($tab as $value) {
      echo $value;
    }
    echo "<br>";
  }

  showArray($tab);
  
//niemalejąco
  sort($tab);
  showArray($tab);
  
//nierosnąco
  rsort($tab);
  showArray($tab);
  
  #####################################
  
  $tab2 = array("Janina", "anna", "Zenon", "krystyna", "1abc");
  showArray($tab2);
  
  sort($tab2);
  showArray($tab2);
  
  $name = array("Janina", "anna", "Zenon", "krystyna", "andrzej");
  

/*
zad. 1 Utwórz tablicę 3-wymiarową i napisz dla niej funkcję wyświetlającą zawartość (wykorzystaj w funkcji foreach)
Proszę wysłać na Moodle
*/

//zad. 2
//Posortuj prawidłowo dane (niemalejąco), dane jakie chcemy uzyskać to:
//Andrzej, Anna, Janina, Krystyna, Zenon
//Napisz funkcję sortującą dane 
//wysietl prawidłowe dane na ekranie za pomocą funkcji

//zad. 2* Dane podaje użytkownik w formularzu i zatwierdza formularz przyciskiem


?>