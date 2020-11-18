<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'napongps.mysql.database.azure.com', 'napongps@napongps', 'Jklhgdf1123', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM GuestBook WHERE id='$id'");
$row=mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $link = $_POST['link'];

    $sql = "UPDATE GuestBook SET Name='$name', Comment='$comment', Link='$link' WHERE id='$id'";

    if(mysqli_query($conn, $sql)){
        echo "Hooray";
    }
}
?>