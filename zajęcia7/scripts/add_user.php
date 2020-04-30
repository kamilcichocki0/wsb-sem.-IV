<?php 
  session_start();
  if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday']) && !empty($_POST['city'])) {
    //echo $_POST['city'],"<br>";
    //echo $_POST['name'],"<br>";
    //echo $_POST['surname'],"<br>";
    //echo $_POST['birthday'],"<br>";
    $city = $_POST['city'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthday = $_POST['birthday'];

    require_once './connect.php';
    $sql = "INSERT INTO `user` (`id`, `cityid`, `name`, `surname`, `birthday`) VALUES (NULL, '$city', '$name', '$surname', '$birthday')";
    mysqli_query($conn, $sql);

    header('location: ../');
  }else{
    $_SESSION['error'] = 'Wypełnij wszystkie dane';
    header('location: ../?add_user=');
  }

  //header('location: ../');
?>