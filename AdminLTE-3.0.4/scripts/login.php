<?php
    session_start();

    if (!empty($_POST['email']) && !empty($_POST['pass'])) {
        require_once './connect.php';
        if ($conn->connect_errno){
            $_SESSION['error'] = 'Błędne połączenie z bazą danych!';
            header('location: ../');
            exit();
        }

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = "SELECT id_user, email FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (!empty($row = mysqli_fetch_assoc($result))) {
            $sql = "SELECT id_user, email  FROM user WHERE email = '$email' AND pass = '$pass'";
            $result = mysqli_query($conn, $sql);
            if (!empty($row = mysqli_fetch_assoc($result))) {
                echo $row['id_user'], '<br>';
                echo $row['email'];
            }else{
                $_SESSION['error'] = 'Niepoprawne hasło!';
            ?>
                <script>
                    history.back();
                </script>
            <?php
            }
        }else{
            $_SESSION['error'] = 'Niepoprawny adres email !';
        ?>
            <script>
                history.back();
            </script>
        <?php
        }
    }else{
        $_SESSION['error'] = 'Wypełnij wszystkie dane!';
    ?>
        <script>
            history.back();
        </script>
    <?php
    }

?>