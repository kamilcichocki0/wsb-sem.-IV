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
        <th>Rok urodzenia</th>
        <th>Miasto</th>
        <th>Województwo</th>
    </tr>
    <?php
        require_once('./scripts/connect.php');
        $sql = "SELECT `user`.`id`, `user`.`name`, `user`.`surname`, `user`.`birthday`, `city`.`city`, `voivodeship`.`voivodeship`
                  FROM `user` 
             LEFT JOIN `city` ON `user`.`cityid` = `city`.`id`
             LEFT JOIN `voivodeship` ON `city`.`voivodeshipid` = `voivodeship`.`id`;";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            //echo $row['id'];
            //echo $row['name'], '<br>';
            echo <<<ROW
            <tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[surname]</td>
                <td>$row[birthday]</td>
                <td>$row[city]</td>
                <td>$row[voivodeship]</td>
            </tr>
            ROW;
        }
        //Dodaj tabelę województwo, utwórz relację pomiędzy tabelami województwo i city, dodaj w tabeli user pole województwo. Dodaj w tabeli w pliku index.php województwo
    ?>
    </table>
</body>
</html>