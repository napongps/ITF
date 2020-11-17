<?php
  $conn = mysqli_init();
  $conn = mysqli_real_connect($conn, 'napongps.mysql.database.azure.com', 'napongps@napongps', 'Jklhgdf1123', 'ITFlab', 3306);
  $id = $_GET['id'];
  $result = mysqli_query($conn,"SELECT * FROM GuestBook WHERE id='$id'");
  $row = mysqli_fetch_assoc($result);

  if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $name = $POST['name'];
    $comment = $POST['comment'];
    $link = $POST['link'];

    $sql = "UPDATE GuestBook SET Name='$name',Comment='$comment', Link='$link' WHERE id='id'";

    if(mysqli_query($conn,$sql)){
      echo"The record has been update";
      header("location:show.php");
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
  <!-- <form action = "insert.php" method = "post" id="CommentForm" > -->
    Name:<br>
    <input type="text" name = "name" id="idName" value="<?= $row['name']; ?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" value="<?= $row['comment']; ?>"></textarea><br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" value="<?= $row['link']; ?>"> <br><br>
    <input type="submit" name = "submit" id="commentBtn">
  </form>
</body>
</html>
