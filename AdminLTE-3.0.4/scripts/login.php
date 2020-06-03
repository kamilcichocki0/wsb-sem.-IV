<?php
    session_start();
    if ($_POST['email'] && ($_POST['pass']) {
        require_once './connect.php';
        if ($conn->connect_errno){
            $_SESSION['error'] = 'Błędne połączenie z bazą danych!';
            header('location: ../');
            exit();
        }

        $email = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
        $pass = htmlentities($_POST['pass'], ENT_QUOTES, "UTF-8");

        $sql = sprintf("SELECT * FROM user WHERE email = '%s'", mysqli_real_escape_string ($conn, $email));
        $result = mysqli_query($conn, $sql);

        if ($result = $conn->query($sql)) {
            $conn->close();
            $count = $result->num_rows;
            if ($count != 1) {
                $_SESSION['error'] = 'Błedny login lub hasło!';
                header('location: ../');
                exit();
            }
            //porównanie haseł
            $user = $result->fetch_assoc();
            $passdb = $user['pass'];
            if (!password_verify($pass, $passdb)) {
                $_SESSION['error'] = 'Błedny login lub hasło!';
                header('location: ../');
                exit();
            }
            if ($user['status_id' == 3]) {
                $_SESSION['error'] = 'Brak możliwości zalogowania, skontaktuj się z administartorem!';
                header('location: ../');
                exit();
            }elseif($user['status_id'] == 2) {
                $_SESSION['error'] = 'Aktywuj swoje konto!';
                header('location: ../');
            }else{
                $_SESSION['logged']['name'] = $user['name'];
                $_SESSION['logged']['surname'] = $user['surname'];
                $_SESSION['logged']['email'] = $user['email'];
                $_SESSION['logged']['permission'] = $user['permission_id'];
                switch ($user['permission_id']) {
                    case '1':
                        header('location: ../pages/logged/admin.php');
                        exit();
                        break;
                    case '2':
                        header('location: ../pages/logged/user.php');
                        exit();
                        break;
                    case '3':
                        header('location: ../pages/logged/moderator.php');
                        exit();
                        break;
                }
            }
        }else{
            echo "Błędne zapytanie!";
        }
    }else{
        $_SESSION['error'] = 'Wypełnij wszystkie dane!';
        header('location: ../');
    }
?>