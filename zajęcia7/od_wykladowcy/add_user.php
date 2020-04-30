<?php 
  session_start();
  if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday']) && !empty($_POST['city'])) {
    echo 'ok';
  }else{
    $_SESSION['error'] = 'Wypełnij wszystkie dane';
    header('location: ../?add_user=');
  }

  //header('location: ../');
?>