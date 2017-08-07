	
	
	
	<center><blockquote><fieldset> SIGN IN HERE ::</fieldset><form action="#" method="post">
	<br/>
          <div>
            <?php session_start();
                  if($_SERVER["REQUEST_METHOD"] == "POST")
                  {
                    $u=$_POST['emailid'];
                    $p=$_POST['password'];
					$con=mysqli_connect("localhost","root","","crackout");

                    $sql="SELECT emailid FROM member WHERE emailid='$u' and password='$p'";
                    $result=mysqli_query($con,$sql);
                    $count=mysqli_num_rows($result);

                    if($count==1)
                    {
                       
                    $_SESSION['login_user']=$u;

                    header("location:profile.php"); 
                   }
				   
				   
             else {
             echo "Wrong Username or Password";
             }}
            ?>  

            <form method="post"> 
            <span>Username or E-mail :<br/></span><input class="contact" type="text" name="emailid" placeholder="Username" required/><br/><br/>
            <span>Password :<br/></span><input class="contact" type="password" name="password" placeholder="Password" required/><br/>

            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="LOGIN" /></p>
			<p>Dont Have An Account..?<br/><a href="signup.php"> :: SIGN UP ::</a></p> 
          
           </form>
           </div>
	
       <hr/><br/>
	
	<fieldset>Newsletter</fieldset>
        <br/>
        
		<h5>TOTAL SIGN UP - 183</h5><br/>
		<form action="ins_newsletter.php" method="post">
		<p><input type="text" name="subs_eid" placeholder="someone@email.com" required></p>
		<br/>
        	<p style="padding-top: 15px"><input class="submit" onclick="subs()" type="submit" submit="submit" value="Subscribe"></p>

		</form>      
        
	<hr/><br/>
        
	<fieldset>Get sms alerts</fieldset>
        <br/>	
		<h5>TOTAL SIGN UP - 67</h5>
		<form action="ins_sms.php" method="post">
        <p><input type="text" name="num" placeholder="123456789"></p>
		<p style="padding-top: 15px"><input class="submit" type="submit" submit="submit" value="Subscribe"></p>
		</form>
	
        <hr/><br/>
        
	<fieldset>Search</fieldset>
        	<form method="post" action="#" id="search_form">
         	<p>
           	<input class="search" type="text" name="search_field" placeholder="Search.." />
           	<input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
         	</p>
        	</form>
	<hr/><br/>

	
	
		<fieldset> Downloads</fieldset>
	
	   <br/><li><a target="_blank" href="http://phoneky.com/wallpapers/?cat=0"> WALLPAPERS</a></li><br/>
		<li><a target="_blank" href="http://mymp3song.com">MP3 SONGS</a></li><br/>
		<li><a target="_blank" href="http://ANDROIDPUR.COM/"> ANDROID SECTION</li></a><br/>
		<li><a target="_blank" href="http://VUCLIP.COM/">VIDEOS</a></li><br/>
		<li><a target="_blank" href="http://phoneky.com/android-games/"> GAMES</a></li><br/>
		<li><a target="_blank" href="http://phoneky.com/android-themes/"> THEMEs</a></li><br/>
	
	
	</blockquote></center>