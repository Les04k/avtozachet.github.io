<?php
include 'db/db.php';
include 'temp/head.php';
include 'temp/nav.php';
?>
<div class="container">
<form method="post">
      <div class="mb-3">
    <label for="fio" class="form-label">ФИО</label>
    <input type="text" class="form-control" id="fio" name="fio">
  </div>
  <div class="mb-3">
    <label for="login" class="form-label">Логин</label>
    <input type="text" class="form-control" id="login" name="login">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password" name="pass">
  </div>
  <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
</form>
</div>
<?php
if(!empty($_POST)){
$fio = $_POST['fio'];
$login = $_POST['login'];
$pass = $_POST['pass'];
$sql = "INSERT INTO `users` (`id`, `fio`, `login`, `pass`, `role`) VALUES (NULL, '$fio', '$login', '$pass', 'клиент')";
$result = $db->query($sql);  
var_dump($sql);  
header("location: login.php");
}


?>