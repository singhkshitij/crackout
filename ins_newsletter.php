<?php
$con=mysqli_connect("localhost","root","","crackout");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$subs_eid = $_POST['subs_eid'];

$sql="INSERT INTO newsletter (subs_eid)
VALUES ('$subs_eid')";
if(mysqli_query($con,$sql))
{
echo "<script type='text/javascript'>\n"; 
echo "alert('You Will Now Receive our newsletter')\n"; 
echo "</script>"; 
}
header("location:index.php");
mysqli_close($con);
?>