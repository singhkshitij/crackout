

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
	
	<blockquote><h2>CONTACT US !!</h2></blockquote>
       
	<form action="ins_contact.php" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="cname" value="" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="ceid" value="" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="cque"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
          </div>
        </form>

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

