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
$sql = "SELECT zakaz.id, yahta.name FROM zakaz, yahta where zakaz.id_yahta = yahta.id";
$result = $db->query($sql);

?>
<div class="container">
    <div class="row">
<table class="table">
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Яхта</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach($result as $row){
    echo '
        <tr>
      <th scope="row">'.$row['id'].'</th>
      <td>'.$row['name'].'</td>
    </tr>
    ';
}

?>

   
  </tbody>
</table>
    </div>
</div>
