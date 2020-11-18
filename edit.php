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
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $link = $_POST['link'];

    $sql = "UPDATE GuestBook SET Name='$name', Comment='$comment', Link='$link' WHERE id='$id'";

    if(mysqli_query($conn, $sql)){
        echo "Hooray";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
</head>
<body>
  <form action = "insert.php" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" id="idName" value="<?= $row['Name']; ?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" value="<?  $row['Comment']; ?>"></textarea><br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" value="<?= $row['Link']; ?>"> <br><br>
    <input type="submit" name="submit" id="commentBtn" value="update">
  </form>
</body>
</html>
