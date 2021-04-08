<?php
include "errors.php";
include "config.php";

if(isset($_GET['id'])){
    $user_id = $_GET['id'];

    $sql = "DELETE FROM `sql_clients` WHERE `id`='$user_id'";
    $result = $conn->query($sql);

    if($result){
        echo '<div class="container"><div> <a class="btn btn-info center-block" href="/">К списку</a></div>';
        echo  '<div class="py-3 text-center"><a class="btn btn-warning"><h1>Клиент удален успешно</h1></a></div>';
    }else{
        echo 'Ошибка:' . $sql . '<br>' . $conn->error;
    }
}
