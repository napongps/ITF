<?php
  $conn = mysqli_init();
  $conn = mysqli_real_connect($conn, 'napongps.mysql.database.azure.com', 'napongps@napongps', 'Jklhgdf1123', 'ITFlab', 3306);
  $id = $_GET['id'];
  $result = mysqli_query($conn,"SELECT * FROM GuestBook WHERE id='$id'");
  $row = mysql_fetch_array($result);

  if(isset($_POST['update'])){
    $name = $POST['name'];
    $comment = $POST['comment'];
    $link = $POST['link'];

    $sql = "UPDATE GuestBook SET Name='$name',Comment='$comment', Link='$link' WHERE id='id'";

    if(mysqli_query($conn,$sql)){
      echo"The record has been update";
    }else
      echo"ERROR" . mysqli_error($conn);
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
</head>
<body>
  <form action = "edit.php" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" id="idName" value="<?= echo $row['name']; ?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" value="<?= echo $row['comment']; ?>"></textarea><br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" value="<?= echo $row['link']; ?>"> <br><br>
    <input type="submit" name = "update" id="commentBtn">
  </form>
</body>
</html>
