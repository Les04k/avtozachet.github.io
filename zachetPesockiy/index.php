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
    <div class="row">
       <?php 
$sql = "SELECT * FROM yahta";
$result = $db->query($sql);

foreach($result as $row){
  $btn = '<a href="add_zakaz.php?id='.$row['id'].'&& name='.$row['name'].'&& price='.$row['price'].'" type="button" class="btn btn-primary">Арендовать</a>';
    echo'<div class="card-group">
  <div class="card">
   <div class="" hidden>'.$row['id'].'</div>
    <img src="'.$row['image'].'" class="card-img-top" alt="cards">
    <div class="card-body">
      <h5 class="card-title">'.$row['name'].'</h5>
      <p class="card-text">'.$row['descipt'].'</p>
      <p class="card-text"><small class="text-body-secondary">'.$row['price'].' руб.</small></p>
      ';
      if($_SESSION['role'] == 'клиент'){
echo $btn;
}
else{

}
echo'
    </div>
  </div>
</div>';
}
?>    
    </div>

</div>



<?php
include 'temp/foot.php';
?>