<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'napongps.mysql.database.azure.com', 'napongps@napongps', 'Jklhgdf1123', 'ITFlab', 3306);
$id = $_POST['id'];

$sql="DELETE FROM GuestBook WHERE ID=$id";
if(mysqli_query($conn,$sql)){
  header("location:show.php");
}
else{
  echo"ERROR";
}
  
mysqli_close($conn);
?>
