<?php

$conn = mysqli_init();
$conn = mysqli_real_connect($conn, 'napongps.mysql.database.azure.com', 'napongps@napongps', 'Jklhgdf1123', 'ITFlab', 3306);
$id = $_GET['id'];

$sql="DELETE FROM GuestBook WHERE id=$id";
if(mysqli_query($conn,$sql)){
  header("location:show.php");
}
else{
  echo"ERROR";
}
  
mysqli_close($conn);
?>
