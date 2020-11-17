<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'napongps.mysql.database.azure.com', 'napongps@napongps', 'Jklhgdf1123', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


if (isset($_REQUEST['id'])){
    $id = $_REQUEST['id']
    mysqli_query($conn, "DELETE FROM GuestBook WHERE id = $id");
    header('Location:show.php')
}

  
mysqli_close($conn);
?>
