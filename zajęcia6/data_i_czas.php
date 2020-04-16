<?php
    echo date("Y-m-d"), '<br>';
    echo date("j M Y"), '<br>';
    echo date("j M Y, s"), '<br>';
    echo date("j M Y, G:i:s"), '<br>';
    echo date("j M Y, h:i:s a"), '<br>';
    echo date("Y-m-d, G:m:s"), '<br>';

//data
      //echo date("Y"),"<br>"; //2017
      //echo date("y"),"<br>"; //17
      //echo date("Y-m-d"),"<br>"; //2017-10-31
      //echo date("Y-M-d"),"<br>"; //2017-Oct-31
      //echo date("Y-M-D"),"<br>"; //2017-Oct-Tue
      //echo date("d-m-Y"),"<br>"; //31-10-2017
      //echo date("e"),"<br>"; //Europe/Berlin
      //echo date("F"),"<br>"; //October

//czas

      //echo date("g"),"<br>"; //10 format 12-godzinny bez zera na początku
      //echo date("G"),"<br>"; //10 format 24-godzinny bez zera na początku
      //echo date("h"),"<br>"; //10 format 12-godzinny z zerem na początku
      //echo date("H"),"<br>"; //10 format 24-godzinny z zerem na początku

      //echo date("i"),"<br>"; //45 liczba minut z zerem na początku
      //echo date("I"),"<br>"; //0 czas letni(1)/zimowy(0)

      //echo date("j"),"<br>"; //31 dzień miesiąca bez zera
      //echo date("l"),"<br>"; //Tuesday dzień tygodnia
      //echo date("L"),"<br>"; //0 znacznik roku przestępnego
      //echo date("m"),"<br>"; //10 miesiąc z zerem na początku

      //echo date("n"),"<br>"; //10 miesiąc bez zera na początku
      //echo date("O"),"<br>"; //+0100 różnica do czasu Greenwich
      //echo date("o"),"<br>"; //2017 rok
      //echo date("P"),"<br>"; //+01:00 różnica do czasu Greenwich

      //echo date("s"),"<br>"; //09 sekundy
      //echo date("S"),"<br>"; //st

      //echo date("t"),"<br>"; //31 liczba dni miesiąca
      //echo date("T"),"<br>"; //CET strefa czasowa
      //echo date("U"),"<br>"; //1509443688 znacznik czasu Uniksa

      //echo date("w"),"<br>"; //2 dzień tygodnia
      //echo date("W"),"<br>"; //44 numer tygodnia
      //echo date("z"),"<br>"; //303 dzień roku 0-365

    //program który wyświetli ile dni pozostało do końca roku
    //oraz do nowego miesiąca, utwórz funkcję

    if(date('L')) {$dni='366';} else{$dni='365';}
    $dzienroku = date('z');
    $pozostalo = $dni-$dzienroku;
    echo 'Do końca roku pozostało '.$pozostalo.' dni.', '<br>';

    $dniwmiesiacu = date('t');
    $dzienmiesiaca = date('d');
    $pozostalo = $dniwmiesiacu-$dzienmiesiaca;
    echo 'Do nowego miesiąca pozostało '.$pozostalo.' dni.', '<br>', '<hr>';


    $date = getdate();
    //print_r($date);
    
    $dzien = $date['mday'];
    $miesiac = $date['mon'];
    $rok = $date['year'];
    $dzienTyg = $date['wday'];

    $dzienRoku = $date['yday'] + 1;
    $dzienTyg1 = $date['weekday'];
    $miesiac1 = $date['month'];
    $znacznikCzasu = $date['0'];

    echo $dzienTyg,"<br>";
    echo $dzienRoku,"<br>";
    echo $miesiac,"<br>";

    switch ($miesiac) {
        case 1:
            $miesiac = 'styczeń';
            break;
        case 4:
            $miesiac = 'kwiecień';
            break;
    }
    echo $miesiac,"<br>";


    switch ($dzienTyg) {
        case 0:
            $dzienTyg = 'niedziela';
            break;
        case 4:
            $dzienTyg = 'czwartek';
            break;
    }
    echo $dzienTyg,"<br>";

    echo "$dzien $miesiac $rok, $dzienTyg<br>";
    echo "Dzień roku: $dzienRoku, $dzienTyg1, $miesiac1, $znacznikCzasu<hr>";


    //znacznik czasu

    $r1 = 2020;
    $m1 = 4;
    $d1 = 16;

    $r2 = 2019;
    $m2 = 4;
    $d2 = 16;

    //godzina, minuta, sekunda, miesiac, dzien, rok
    $czas1 = mktime(0,0,0, $m1, $d1, $r1);
    $czas2 = mktime(0,0,0, $m2, $d2, $r2);

    //sprawdź ile czasu minęło od danej daty
    //Ilość sekund: ..., ilość dni: ..., ilość lat: ...

    $czas = abs($czas2 - $czas1);
    $dni = $czas / (60*60*24);
    $lata = floor($dni / 365);

    echo 'Ilość sekund: '.$czas.', ilość dni: '.$dni.', ilość lat: '.$lata.'', '<br>', '<hr>';



?>