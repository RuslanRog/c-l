<?php
include "config.php";

if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password =  password_hash($_POST['password'],  PASSWORD_BCRYPT);
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `sql_clients`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";


    $result = $conn->query($sql);

    if($result == true){
        echo  '<div class="py-3 text-center"><a class="btn btn-warning"><h1>Клиент добавлен успешно</h1></a></div>';
    }else{
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

?>
<div class="bg-light">
    <div class="container">
          <div> <a class="btn btn-info center-block" href="/">К списку</a></div>

      <div class="py-3 text-center">
        <h1>Добавить клиента</h1>

<form class ="jumbotron" action="" method="POST">
        Имя<br>
        <input type="text"  name="firstname">
        <br>
        Фамилия<br>
        <input type="text" name="lastname">
        <br>
        Email<br>
        <input type="email" name="email">
        <br>
        Пароль<br>
        <input type="password" name="password">
        <br>
        Пол<br>
        <input type="radio" name="gender" value="Мужчина"> Мужчина
        <br>
        <input type="radio" name="gender" value="Женщина"> Женщина
        <br><br>
        <input type="submit" name="submit" value="Отправить" class="btn btn-info">
</form>
</div>

</body>
</html>
