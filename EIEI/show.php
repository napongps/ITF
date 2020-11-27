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
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070219', 'RDQhch34', 'it63070219_test', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM test');
?>
<table class="table" style="width:600" border="1" align=center>
  <thead class="thead-dark">
  <tr>
    <th width="100"> <div align="center">A</div></th>
    <th width="350"> <div align="center">B </div></th>
    <th width="150"> <div align="center">C</div></th>
    <th width="50"> delete</th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td class="bg-light text-dark"><?php echo $Result['A'];?></td>
    <td class="bg-light text-dark"><?php echo $Result['B'];?></td>
    <td class="bg-light text-dark"><?php echo $Result['C'];?></td>
    <td class="bg-light text-dark"><a href="delete.php?id=<?= $Result['Id']; ?>" class="dropdown-item">ลบ</a>
</tr>
<?php
}
?>

<div class='container' align=center>
<a href=form.html>add</a>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>