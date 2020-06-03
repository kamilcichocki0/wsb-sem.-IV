<?php
    session_start();

    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email1']) && !empty($_POST['email2']) && !empty($_POST['pass1']) && !empty($_POST['pass2']) && 
        !empty($_POST['birthday'])) {
        #echo "Wypełniono wszystkie dane";
        $error=0;
        if ($_POST['email1'] != $_POST['email2']) {
            $error=1;
            $_SESSION['error'] = "Adresy email są niezgodne!";
        }

        if ($_POST['pass1'] != $_POST['pass2']) {
            $error=1;
            $_SESSION['error'] = "Hasła są niezgodne!";
        }

        if (!isset($_POST['terms'])) {
            $error=1;
            $_SESSION['error'] = "Zaznacz pole z regulaminem !";
        }

        if ($error==1) {
    ?>
            <script>
                history.back();
            </script>
    <?php
    exit();
    }
    
    require_once './connect.php';
    if($conn->connect_errno){
        //echo 'error';
        $_SESSION['error'] = 'Błędne połączenie z bazą danych';
        header('location: ../pages/register.php');
        exit();
    }

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email1'];
    $pass = $_POST['pass1'];
    $birthday = $_POST['birthday'];

    //szyfrowanie hasła za pomocą ARGON2ID
    $pass = password_hash($pass, PASSWORD_ARGON2ID);

    $city = 1;

    $sql = "INSERT INTO user(id_city, name, surname, email, pass, birthday)
                 VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $city, $name, $surname, $email, $pass, $birthday);

    if ($stmt->execute()) {
        header('location: ../?register=success');
        $stmt->close();
        exit();
    }else{
        //sprawdzenie czy istnieje w bazie danych email podany przez użytkownika
        $sql = "SELECT * FROM 'user' WHERE 'email' = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        //echo $conn->affected_rows;
        //if ($conn->affected_rows == 1) {
            //echo 'Podany adres email już istnieje!';
        //}else{
            //echo 'Błąd w zapytaniu';
        //}
        if ($conn->affected_rows){
            $_SESSION['error'] = 'Podany adres email już istnieje!';
        ?>
            <script>
                history.back();
            </script>
        <?php
        }

        $stmt->close();
    }

    }else{
        $_SESSION['error'] = 'Wypełnij wszystkie pola!';
    ?>
        <script>
            history.back();
        </script>
    <?php
    }
?>