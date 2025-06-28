<?php
session_start();
include 'db/db.php';
include 'temp/head.php';
if($_SESSION['role'] == 'клиент'){
include 'temp/nav_client.php';
}
else{
include 'temp/nav.php';
}

?>
<div class="container">
    <form method="post">
       <h2>Ваша аренда:</h2>
    <?php
    $user_id=$_SESSION['id'];

    $yahta_id = $_GET['id'];
    $name = $_GET['name'];
    $price = $_GET['price'];
    echo'<h4>Название: '.$name.'</h4>';
    echo'<h4>Цена: '.$price.'</h4>';
      $btn = '<button type="submit" class="btn btn-primary">Арендовать</buton>';
      echo $btn;
    ?>   
    </form>
  
    <?php
    if(!empty($_POST)){
           $sql = "INSERT INTO zakaz (id_user, id_yahta) VALUES($user_id, $yahta_id)";
    $result = $db->query($sql);
    header("location: mycab.php"); 
    }
    ?>
</div>