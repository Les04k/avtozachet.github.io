<?php
session_start();
include 'db/db.php';
include 'temp/head.php';
include 'temp/nav.php';
?>
<div class="container">
    <form method="post">
  <div class="mb-3">
    <label for="login" class="form-label">Логин</label>
    <input type="text" class="form-control" id="login" name="login">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password" name="pass">
  </div>
  <button type="submit" class="btn btn-primary">Войти</button>
</form>
</div>
<?php
if(!empty($_POST)){
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM users WHERE `login` = '$login' and `pass` = '$pass'";
    $result = $db->query($sql);
$user = mysqli_fetch_assoc($result);
$id = $user['id'];
$fio = $user['fio'];
$role = $user['role'];
mysqli_free_result($result);
 if($id and $role == 'клиент'){
    session_start();
    $_SESSION['fio'] = $fio;
    $_SESSION['role'] = $role;
    $_SESSION['id'] = $id;
    header("Location: mycab.php");
  }
}

?>