<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'napongps.mysql.database.azure.com', 'napongps@napongps', 'Jklhgdf1123', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $query = "DELETE FROM GuestBooak WHERE id=$id"; 
    $result = mysqli_query($con,$query) or die ( mysqli_error());
    header("Location: show.php");
}


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
