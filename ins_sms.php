<?php
$con=mysqli_connect("localhost","root","","crackout");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$num = mysqli_real_escape_string($con, $_POST['num']);

$sql="INSERT INTO news_sms (news_num)
VALUES ('$num')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>