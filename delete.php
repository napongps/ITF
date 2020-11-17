<?php

$conn = mysqli_init();
$conn = mysqli_real_connect($conn, 'napongps.mysql.database.azure.com', 'napongps@napongps', 'Jklhgdf1123', 'ITFlab', 3306);

$id = $_REQUEST['id'];
$sql = "DELETE FROM GuestBook WHERE id='$id'";
if(mysqli_query($conn,$sql)){
  echo"The record has been deleted"
  header("location:show.php");
} else{
  echo"$id" . $sql .  mysqli_error($conn);
}
  
mysqli_close($conn);
?>
