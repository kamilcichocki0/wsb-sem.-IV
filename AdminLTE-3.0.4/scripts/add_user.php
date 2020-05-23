<?php
    session_start();

    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email1']) && !empty($_POST['email2']) && !empty($_POST['pass1']) && !empty($_POST['pass2']) && 
        !empty($_POST['date'])) {
        #echo "Wypełniono wszystkie dane";
        $error=0;
        if ($_POST['email1'] != $_POST['email2']) {
            $error=1;
            $_SESSION['error'] = "Email niezgodny";
        }

        if ($_POST['pass1'] != $_POST['pass2']) {
            $error=1;
            $_SESSION['error'] = "Hasło niezgodne";
        }

        if (isset($_POST['terms'])) {
            $error=1;
            $_SESSION['error'] = "Zaznacz pole z regulaminem";
        }

        if ($error==1) {
?>
            <script>
                history.back();
            </script>
<?php
    exit();
}
    echo "ok";
    
    }else{
        echo "Nie wypełniono wszystkich danych";
    }
?>