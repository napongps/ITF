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
<table class="table" width="600" border="1">
  <thead class="thead-dark">
  <tr>
    <th width="50"> <div align="center">ID</div></th>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['ID'];?></div></td>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td><a href="https://napong.azurewebsites.net/delete.php?delete=<?php echo row['id']; ?>" class="btn btn-danger">ลบ</a></td>
    <td><a href="#" class="btn btn-primary">แก้ไข</a></td>
  </tr>
<?php
}
?>
</table>
<div class = container>
  <div class="row justify-content-center">
    <a href="https://napong.azurewebsites.net/form.html" class="btn btn-primary">เพิ่ม</a>
  </div>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
