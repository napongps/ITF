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
        header("location:show.php");
    }
}
?>
<!DOCTYPE html>
<html>
<style>
input[type=text]:focus {
  border: 3px solid #555;
}, select {
  width: 35%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

   body {
  height: 100%;
}
.bg {
  /* The image used */
  background-image: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(20).jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
<head>
	<title>Edit Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kanit" rel="stylesheet">
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>ITF lab</h1>
  <p>63070219 Napong pipatbvonkul</p> 
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="show.php">Home</a>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="form.html" class="nav-link">เพิ่ม</a>
      </li>
    </ul>
  </nav>
<div class="bg">
	<br><br>
<div class="container" aling=center>
	<div class="row h-100">
		<div class="col-sm-12 my-auto" align=center>
  <form action = "" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" id="idName" value="<?= $row['Name']; ?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment"><?php echo $row['Comment']; ?></textarea><br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" value="<?= $row['Link']; ?>"> <br><br>
    <input type="submit" name="submit" id="commentBtn" value="update">
	  </div>
		</div>
	</div>
	</div>
  </form>
</body>
</html>
