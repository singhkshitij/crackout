<?php session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
        


  <title>CRACKERZ</title>
  <link rel="shortcut icon" href="style/skull.png"/>
  <meta name="TRICKS" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />

	
  
</head>

<body>

<div id="main">
    <?php
	include("header.php");
	?>
      

    </div>
    <div id="site_content">
      <div class="sidebar">
          <?php
	include("sidebar.php");
	?>  
	
      </div>
      <div id="content">

		
      	<blockquote><h3>
		<b id="welcome">Welcome : <i><?php echo $_SESSION['login_user']; ?></i></b>
		</blockquote></h3>
		
		<div id="logout">
		<p style="float:right;"><b id="logout"><a href="logout.php"><img src="style/Logout.jpg" height="35%" width="35%" align="right" style="border-radius:20px;"/ ></a></b>
		</div>


		<div id="avatar">
				<p><img src="img/avatar.jpg" height="100px" width="100px" style="float:left;"><br/><br/><br/><br/><br/></p>
				<p><a href="avatars.php"><img src="img/avatar_select.jpg"  height="50%" width="50%" style="float:left;"/></a></p>
			</div>

		<div id="profile_info">
				<br/><br/><br/><br/><br/><br/>
			<p><span>First Name :</span> </p><br/>
	         <p><span>Last Name :</span></p><br/>
           <p><span>Email Address :</span></p><br/>
           <p><span>New Password :</span></p><br/>
           <p><span>Re-enter Password :</span></p><br/>
	         <p><span>Birthday :</span></p><br/>
	         <p><span>Phone Number :</span></p><br/>
	         <p><span>Sex :</span></p><br/>
           <p><span>Permanent Address :</span></p><br/>
           <p><span>About Yourself :</span></p><br/>

       </div>

			
       
  	</div>
    </div>
    <div id="footer">
         <?php
	include("footer.php");
	?>
    </div>
  </div>
</body>
</html>

