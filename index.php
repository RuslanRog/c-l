<?php
include "config.php";

$sql = "SELECT * FROM sql_clients";
$result = $conn->query($sql);


?>

<!doctype html>
<head>
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">-->
    <title>View page</title>
</head>
<body>

<div class="container">
    <div> <a class="btn btn-info center-block" href="create.php">Добавить клиента</a></div>
    <div class="py-3 text-center">
    <h1>Список клиентов</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Email</th>
            <th>Пол</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Редактировать</a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Удалить</a>
                    </td>
                </tr>
                <?php

            }
        }
        ?>
        </tbody>
    </table>
</div>
</div>
</body>
