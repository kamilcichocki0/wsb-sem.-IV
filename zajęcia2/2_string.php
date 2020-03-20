<?php
//heredoc
//echo phpinfo();
$name = "Janusz";
echo <<<TEXT
    WSB -<br>
    Wyższa Szkoła<br>
    Bankowa<br>
    Imię: $name
    <hr>
TEXT;
$data = <<<A
    Pierwsza linia
    Druga
    Trzecia
    <hr>
A;
//echo $data;
echo nl2br($data);
$name = "JanuSZ";
echo "$name<br>";
echo strtoupper($name),"<br>";
echo strtolower($name),"<br>";
$name=strtolower($name);
echo $name,"<br><hr>";
$lorem = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$col = wordwrap($lorem, 100, "<br>");
echo $col;
echo "<hr>";
//usuwanie białych znaków
$name1 = "Filip";
$name2 = "Filip";
echo strlen($name1);//5
echo strlen($name2);//5
echo "<hr>";
$name3 = "Filip";
$name4 = "   Filip";
echo strlen($name3);//5
echo strlen($name4);//8
echo "<hr>";
$name3 = "Filip";
$name4 = "   Filip";
echo strlen(ltrim($name4));//5
echo strlen(rtrim($name4));//8
echo strlen(trim($name4));//5
echo "<hr>";
$address = "Poznań, ul. Wolności 8, tel. (51) 666-77-88";
$find = strstr($address, "tel.");
echo "$find<br>"; //tel. (51) 666-77-88
$find = stristr($address, "Tel.");
echo "$find<br>"; //tel. (51) 666-77-88
echo "<hr>";
$mail = strstr("wsb@poznan.pl", "@");
echo $mail, "<br>";
$mail1 = strstr("wsb@poznan.pl", 64);
echo $mail1, "<br>";
echo "<hr>";
//przetwarzanie ciągów znaków/cenzura
$replace = str_replace("Poznaniu", " ### ", "Mam na imię Janusz, mieszkam w Poznaniu");
echo $replace,"<br>";
echo "<hr>";
//zamiana polskich znaków
$login = "Bączek";
$cenzura = array("ą", "ę", "ś", "ż", "ź", "ć", "ó", "ń", "ł");
$replace = array("a", "e", "s", "z", "z", "c", "o", "n", "l");
$validlogin = str_replace($cenzura, $replace, $login);
echo "Login przed poprawą: ",$login;
echo "<br>Login po poprawie: ",$validlogin,"<br>";
echo "<hr>";












 ?>
