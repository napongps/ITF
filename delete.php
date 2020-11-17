<?php
include 'Connect_to_db';

$id = $_REQUEST['id'];
$sql="DELETE FROM GuestBook WHERE id='$id'";
if(mysqli_query($conn,$sql)){
  header("location:show.php");
} else{
  echo"$id";
}
  
mysqli_close($conn);
?>
