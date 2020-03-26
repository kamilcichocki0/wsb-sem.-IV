<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wizytówka</title>
</head>
<body>
    <form method="post">
    <label>Imię:</label>
    <input type ="text" name="firstname"><br>
    <label>Nazwisko:</label>
    <input type ="text" name="lastname"><br>
    <label>Email:</label>
    <input type ="email" name="usermail"><br>
    <label>Data urodzenia:</label>
    <input type ="date" name="date"><br>
    <label>Miasto:</label>
    <input type ="text" name="city"><br><br>
    <input type ="submit" value="Wyświetl"><br>
    </form>
    <?php
    //utworzyć wizytówkę w której użytkownik będzie podawał swoje dane minimum:
    //imię, nazwisko, data urodzenia, adres email, miasto
    //dane wyświetl za pomocą funkcji (wykorzystaj heredoc)
    //utwórz funkcję, która czyści dane z białych znaków oraz zmienia pierwsze litery 
    //na duże a pozostałe na małe (imię, nazwisko, miasto)
    if (!empty($_POST['firstname'])){
        echo "Imnię: ", $_POST['firstname'], "<br>";
    }
    if (!empty($_POST['lastname'])){
        echo "Nazwisko: ", $_POST['lastname'], "<br>";
    }
    if (!empty($_POST['usermail'])){
        echo "Email: ", $_POST['usermail'], "<br>";
    }
    if (!empty($_POST['date'])){
        echo "Data urodzenia: ", $_POST['date'], "<br>";
    }
    if (!empty($_POST['city'])){
        echo "Miasto: ", $_POST['city'], "<br>";
    }



    ?>
</body>
</html>