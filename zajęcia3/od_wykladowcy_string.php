<?php
    $text = <<<TEKST
    zsk - Zespół
    szkół
    komunikacji
TEKST;

    echo "Przed użyciem funkcji nl2br:<br> $text";
    echo "<br>Po użyciu funkcji nl2br:<br>";
    echo nl2br($text);
    echo "<br><br>";

//zamiana na małe litery
    echo strtolower($text);
    echo "<br>";

//zamiana na duże litery
    echo strtoupper($text);
    echo "<br><br>";

//zamiana pierwszej litery na dużą
    $tekst = "rAZ DWA trzy";
    echo ucfirst($tekst);
    echo "<br>";

//Zamiana wszystkich pierwszych liter na duże
    echo ucwords($tekst);
    echo "<br>";

//***********************************************

    $lorem = "Ipsum officia relinqueret, nulla ullamco ad duis varias. Iudicem aute labore do
    aute, fugiat consequat ut aliqua varias e quae ut doctrina quo ingeniis nulla
    noster e dolor. Qui magna litteris relinqueret, illum e de quis proident. Velit
    arbitrantur ingeniis noster litteris, aliqua quamquam iis enim irure, esse si
    singulis, tamen quamquam sed fugiat multos. Nulla ea occaecat ita dolore. Non
    ipsum anim ad incididunt, appellat sunt voluptate ingeniis. Ad esse tempor de
    voluptate si probant. Excepteur quo quis pariatur, pariatur legam excepteur
    ingeniis, quo fabulas eu mandaremus, vidisse ubi quibusdam, occaecat culpa aut
    pariatur tractavissent quo id quis iudicem offendit eu nisi incididunt ex
    arbitror, et dolor nescius relinqueret.";

    $kolumna = wordwrap($lorem,40,"<br>");
    echo $kolumna;
    echo "<br>";

//usuwanie białych znaków

    $imie1 = "Filip";
    $imie = "  Filip ";

    echo strlen($imie1); //5
    echo strlen($imie); //8
    echo strlen(ltrim($imie)); //6
    echo strlen(rtrim($imie)); //7
    echo strlen(trim($imie)); //5
    echo "<br>";

//przeszukiwanie

    $adres = "Poznań, ul. Fredry 13, tel. (61) 445-44-58";
    $szukaj = strstr($adres, "tel"); //tel. (61) 445-44-58
    echo $szukaj,"<br>";

    $szukaj1 = strstr($adres, "tel", true);
    echo $szukaj1,"<br>"; //Poznań, ul. Fredry 13,

    $szukaj2 = stristr($adres, "Tel");
    echo $szukaj2; //nic nie wyświetli


    $mail = strstr("zsk@gmail.com","@");
    echo $mail; //@gmail.com

    $mail1 = strstr("zsk@poznan.pl",64);
    echo $mail1; //@poznan.pl

//*********************************

    $ciag1 = "a";
    $ciag2 = "aa";

    echo strcmp($ciag1, $ciag2); //-1
    echo strcmp("zzz", "zzz"); //0
    echo strcmp("zza", "zzz"); //-1
    echo strcmp("zzz", "zza"); //1
    echo strcmp("zzza", "zzz"); //1
    echo "<br>";

//*********************************

    $poz = strpos("abcdefg","cde");
    echo $poz; //2

    $poz = strpos("abcabc","abc");
    echo $poz; //0

//zad.1

    $tekst1 = "abcdabcd";
    $tekst2 = "ab";

    if (strpos($tekst1,$tekst2) === false){
        echo "Ciąg $tekst2 nie została znaleziona w ciągu $tekst1";
    }else{
        echo "Ciąg $tekst2 została znaleziona w ciągu $tekst1";
    }

 //*************************

//przetwarzanie ciągu znaków

    $zamien = str_replace("%imie%", "Janusz", "%imie% to nie imie %imie% to styl życia");
    echo $zamien;

//***************************

    $nazwisko = substr("Janusz Nowak", 7, 5);
    echo $nazwisko; //Nowak

//***************************

//przetwarzanie ciągów znaków

    $login = "bączek";
    $cenzura = array("ą","ę","ś","ż","ź","ć","ó","ń","ł");
    $zamiana = array("a","e","s","z","z","c","o","n","l");

    $poprawnyLogin = str_replace($cenzura, $zamiana, $login);
    echo $poprawnyLogin;


/*Napisz funkcję, która będzie obliczała wystąpienia określonego ciągu znaków w danym tekście. Tekst i szukany ciąg znaków powinny byćprzekazywane w postaci argumentów. */

/*Napisz program, który pozwoli cenzurować zdanie podane przez użytkownika
Formularz do wprowadzenia słów niewłaściwych oraz prawidłowych

*/

    echo <<<FORM
    <form method="post">
        <input type="text" name="dane"><br>
        <input type="submit">
    </form>
FORM;

    if(isset($_POST['dane'])){
        $dane = $_POST['dane'];
        $niedozwolone = array("czarny", "biały");
        $zamiana = "#$******";
        $poprawne = str_ireplace($niedozwolone, $zamiana, $dane);
        echo "<h1>$poprawne</h1>";
    }


?>
