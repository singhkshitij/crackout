<?php 
session_start();
$upass=$_POST['upass'];
$uead = mysql_real_escape_string($uead);
$upass = mysql_real_escape_string($upass);
$connection = mysqli_connect("localhost", "root", "","crackout");
$sql="SELECT * from member where pass='$upass' AND Ead='$uead'";
$result=mysqli_query($connection,$sql);
echo $result;
$row=mysqli_num_rows($result);
if($row==1)
{
$_session['login_user']=$uead;
header("location:profile.php");
}
else
{
die('Invalid username or password');
}

mysqli_close($connection); // Closing Connection*/
?>