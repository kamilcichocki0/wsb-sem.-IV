<?php
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        //echo $id;
        require_once './connect.php';
        //string w apostrofach id nie musi być
        $sql = "DELETE FROM `user` WHERE `user`.`id` = '$id'";
        mysqli_query($conn, $sql);
    }
    header('location: ../');
?>