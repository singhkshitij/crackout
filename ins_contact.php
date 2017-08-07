<?php
$con=mysqli_connect("localhost","root","","crackout");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$cname = mysqli_real_escape_string($con, $_POST['cname']);
$ceid = mysqli_real_escape_string($con, $_POST['ceid']);
$cque = mysqli_real_escape_string($con, $_POST['cque']);

$sql="INSERT INTO contact_us (contact_name,contact_eid,contact_que)
VALUES ('$cname','$ceid','$cque')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>