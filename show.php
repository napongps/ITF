<html>
<head>
<title>ITF Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kanit" rel="stylesheet">
</head>
 <style>
   body {
  height: 100%;
}
.bg {
  /* The image used */
  background-image: url("https://www.google.com/url?sa=i&url=https%3A%2F%2Fblog.prototypr.io%2F5-css-animated-backgrounds-to-inspire-your-next-project-97fdb692e852&psig=AOvVaw0D02wdIqpE6kiFh5BvvxWh&ust=1606062624119000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIiSy9iHlO0CFQAAAAAdAAAAABAQ");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.table {
  
  </style>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'napongps.mysql.database.azure.com', 'napongps@napongps', 'Jklhgdf1123', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM GuestBook');
?>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>ITF lab</h1>
  <p>63070219 Napong pipatbvonkul</p> 
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="">Home</a>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="form.html" class="nav-link">เพิ่ม</a>
      </li>
    </ul>
  </nav>
<div class="bg">
  <br><br>
<table class="table" style="width:600" border="1" align=center>
  <thead class="thead-dark">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
    <th> <div align="center">Changes</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td class="bg-light text-dark"><?php echo $Result['Name'];?></div></td>
    <td class="bg-light text-dark"><?php echo $Result['Comment'];?></td>
    <td class="bg-light text-dark"><?php echo $Result['Link'];?></td>
<!--     <td><a href="delete.php?id=<?= $Result['id']; ?>" class="btn btn-danger">ลบ</a></td> -->
<!--     <td><a href="edit.php?id=<?= $Result['id']; ?>" class="btn btn-primary">แก้ไข</a></td> -->
    <td class="bg-light text-dark"><div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Changes
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a href="delete.php?id=<?= $Result['id']; ?>" class="dropdown-item">ลบ</a>
      <a href="edit.php?id=<?= $Result['id']; ?>" class="dropdown-item">แก้ไข</a>
    </div>
  </div>
</div>
  </td>
  </tr>
<?php
}
?>
</table>
  </div>
<?php
mysqli_close($conn);
?>
</body>
</html>
