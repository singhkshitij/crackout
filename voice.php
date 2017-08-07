



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
	
	<ul><blockquote><h2>YOUR COMPUTER CAN WELCOME U ON STARTUP !!</h2></blockquote>
		
		<p>Do you watch movies? Have you always loved the way how Computers in movies welcome their users by calling out their names? I bet that you too would want to know how you can achieve similar results on your PC and have a computer said welcome.</p><br/>
		
<p>You are at the right place,
 this article describes exactly how you can make your computer welcome you like this.
With this trick, you can make your Computer welcome you in its computerized voice.
 You can make your Windows based computer say "Welcome to your PC, Username."</p>
 <p>Make Windows Greet you with a Custom Voice Message at Startup
To use this trick, followthe instructions given below:-</p>
<p>1. Click on Start . Navigate to All Programs, Accessories and Notepad .<br/>
2. Copy and paste the exact code given below.<br/><br/>
<r>Dim speaks, speech<br/>
speaks="Welcome to your PC,
Username"<br/>
Set speech=CreateObject("sapi.spvoice")<br/>
speech.Speak speaks</r><br/><br/>
3. Replace Username with your own
name .<br/>
4. Click on File Menu, Save As, select All Types in Save as Type option, and save the file as Welcome.vbs or "*.vbs".<br/>
5. Copy the saved file.<br/>
6. Navigate to C:\Documents and Settings\All Users\Start Menu\Programs\Startup(in Windows XP) and to C:\Users\ {User-Name}\AppData\Roaming\Microsoft\Windows\StartMenu\Programs\Startup (in Windows 8, Windows 7 and Windows Vista) if C: is your System drive. AppData is a hidden folder. So, you will need to select showing hidden folders in Folder optionsto locate it.
<br/>7. Paste the file.<br/>
Now when the next time you start your computer,Windows will welcome you in its own computerized voice.<br/>
<r>Note :</r> For best results, it is recommended to change sound scheme to No Sounds.<br/></p>
<p>Youcan change the sound scheme to No Sounds by following the steps given below:-<br/>
1. Go to Control Panel.<br/>
2. Then click on Switch to Classic View.<br/>
3. Then Click on Sounds and Audio Devices.<br/>
4. Then Click on the Sounds Tab.<br/>
5. Select No Sounds from the Sound Scheme option.<br/>
6. If you wish to save your Previous SoundScheme, you can save it by clicking Yes in the popup menu.<br/>
7. Click on OK.<br/></p><br/>
<p>Try it yourself to see how it works. In my personalopinion, this is an excellent trick. Whenever I start my PC in front of anybody and the PC welcomes me, the fellow is left wonderinghow brilliant a computerdo I have.
</p>
		

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

