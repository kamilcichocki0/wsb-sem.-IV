<?php 
  if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    require_once './connect.php';
    
    $sql = "DELETE FROM `user` WHERE `user`.`id` = '$id'";
    mysqli_query($conn, $sql);
  }
  header('location: ../');
?>