<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/table.css">
  <title>Shop</title>
</head>
<body>
  <h3>Użytkownicy</h3>
  <table>
  <tr>
    <th>Id</th>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Data urodzenia</th>
    <th>Rok urodzenia</th>
    <th>Miasto</th>
  </tr>
  
  <?php 
    require_once('./scripts/connect.php');
    require_once('./scripts/functions.php');
    
    // $sql = "SELECT * FROM `user`";
    $sql = "SELECT `user`.`id`,`user`.`name`, `user`.`surname`, `user`.`birthday`, `city`.`city` FROM `user` INNER JOIN `city` ON `user`.`cityid` = `city`.`id`";

    $result = mysqli_query($conn, $sql);
    
    while($row=mysqli_fetch_assoc($result)){
      $year = year($row['birthday']);
      echo <<<ROW
      <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[surname]</td>
        <td>$row[birthday]</td>
        <td>$year</td>
        <td>$row[city]</td>
        <td><a href="./scripts/del_user.php?id=$row[id]">Usuń</a></td>
      </tr>
ROW;
    }
    ?>
    </table>
    <?php 
      if (isset($_GET['add_user'])) {
        echo '<h3>Dodawanie użytkownika</h3>';
        if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
          unset($_SESSION['error']);
        }
?>
          <form action="./scripts/add_user.php" method="post">
            <input type="text" name="name" placeholder="Imię"><br>
            <input type="text" name="surname" placeholder="Nazwisko"><br>
            <input type="date" name="birthday">Data urodzenia<br>
            <select name="city">
            <?php 
              $sql="SELECT * FROM city";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value=\"$row[id]\">$row[city]</option>";
              }
            ?>
            </select><br>
            <input type="submit" value="Dodaj użytkownika">
        </form>
<?php
      }else{
        echo '<h3><a href="?add_user=">Dodaj użytkownika</a></h3>';
      }
    ?>  
</body>
</html>