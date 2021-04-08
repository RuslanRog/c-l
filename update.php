<?php
include "errors.php";
include "config.php";


if(isset($_POST['update'])){
    $user_id = $_POST['id'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password =  password_hash($_POST['password'],  PASSWORD_BCRYPT);
    $gender = $_POST['gender'];

    $sql = "UPDATE `sql_clients` SET `firstname`='$first_name',`lastname`='$last_name',`email`='$email',`password`='$password',`gender`='$gender' WHERE `id`='$user_id'";
    $result = $conn->query($sql);

    if ($result == true){
    echo  '<div class="py-3 text-center"><a class="btn btn-warning"><h1>Данные обновлены</h1></a></div>';
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}


if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

//echo $user_id . '<br>';

   $sql = "SELECT * FROM `sql_clients` WHERE `id`='$user_id'";


    $result = $conn->query($sql);

//    var_dump($result) . '<br><br>';
//exit();

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $first_name = $row['firstname'];
            $last_name = $row['lastname'];
            $email = $row['email'];
            $password = $row['password'];
            $gender = $row['gender'];
        }         //   var_dump($row) . '<br><br>';
        ?>
        <div class="bg-light">
            <div class="container">
                  <div> <a class="btn btn-info center-block" href="/">К списку</a></div>

              <div class="py-3 text-center">
                <h1>Даные криента</h1>

        <form class ="jumbotron"  action="" method="POST">
                Имя<br>
                <input type="text" name="firstname" value="<?php echo $first_name; ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <br>
                Фамилия<br>
                <input type="text" name="lastname" value="<?php echo $last_name; ?>">
                <br>
                Email<br>
                <input type="email" name="email" value="<?php echo $email; ?>">
                <br>
                Пароль<br>
                <input type="password" name="password" value="<?php echo $password; ?>">
                <br>
                Пол<br>
                <input type="radio" name="gender" value="Мужчина" <?php if($gender == 'Мужчина'){echo "checked";} ?>> Мужчина
                <br>
                <input type="radio" name="gender" value="Женщина"<?php if($gender == 'Женщина'){echo "checked";} ?>> Женщина
                <br><br>
                <input type="submit" name="update" value="Обновить" class="btn btn-info">
        </form>
      </div>
    </div>
  </div>


<?php
    } else {
        header('Location: index.php');
    }
}
?>
