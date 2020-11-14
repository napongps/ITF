<html>
<head>
<style>
text-align: center;  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>ITF Lab</title>
</style>
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
<table width="600" border="1", align="center">
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
    <td><a href="https://napong.azurewebsites.net/delete.php" class="btn btn-primary">ลบ</a></td>
    <td><a href="#" class="btn btn-primary">แก้ไข</a></td>

  </tr>
<?php
}
?>
</table>
<a href="https://napong.azurewebsites.net/form.html" class="btn btn-primary">เพิ่ม</a>
<?php
mysqli_close($conn);
?>
</body>
</html>
