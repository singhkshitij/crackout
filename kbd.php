

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
	
	<blockquote><h2>LET THE LIGHTS OF YOUR KEYBOARD DANCE !!</h2></blockquote>
		
	<p>Keyboards usually have small LEDs which indicate whether different types of locks are activated or not.</p>

	<p>Here is a trick to use the lights of your keyboard in a more creative manner in Windows.<br/>
	This trick uses a simple Visual Basic Script which when activated makes your Scroll lock, <b>Caps lock and Num lock LEDs</b> flash in a cool rhythmic way which gives the perception of a <r>live disco</r>
	on your keyboard.</p>
	<img src="img/kbd.jpg">
	<p> To make your own live disco, followthe steps given below:-</p><br/>
	<p>1. Open Notepad.<br/>
	2. Copy paste the exact code given below:-<br/>
	<r>Set wshShell =wscript.CreateObject("WScript.Shell")<br/>
	do<br/>
	wscript.sleep 100<br/>
	wshshell.sendkeys "{CAPSLOCK}"<br/>
	wshshell.sendkeys "{NUMLOCK}"<br/>
	wshshell.sendkeys "{SCROLLLOCK}"<br/>
	loop<br/></r>
	3. Save the file as Disco.vbs or "*.vbs".<br/></p>
	<p>Double click on the Saved file to see the LED lights on your keyboard go crazy and make your own cool disco.<br/>
	This trick has been tested on Windows XP, Windows Vista, Windows 7 and Windows 8 and found to be working perfectly.<br/></p>
	<p>You can disable the keyboard disco by starting Task Manager and ending the wscript.exe process.</p>	
		

	<?php
include("query.php");
?>

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

