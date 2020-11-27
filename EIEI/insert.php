  
<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070219', 'RDQhch34', 'it63070219_test', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$A = $_POST['A'];
$B = $_POST['B'];
$C = $A+ $B;


$sql = "INSERT INTO test (A , B , C) VALUES ('$A', '$B', '$C')";


if (mysqli_query($conn, $sql)) {
    header("location:show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>