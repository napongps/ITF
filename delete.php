<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'napongps.mysql.database.azure.com', 'napongps@napongps', 'Jklhgdf1123', 'ITFlab', 3306);
$id=$_REQUEST['ID'];
$query = "DELETE FROM GuestBook WHERE ID=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: show.php"); 
?>
