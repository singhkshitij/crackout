

<!DOCTYPE HTML>
<html>

<head>
        


  <title>CRACKERZ</title>
  
  <link rel="shortcut icon" href="style/skull.png"/>
  <meta name="TRICKS" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <script type="text/javascript">
  
function validation_for_signup()
{

                
                var check_name = /^[a-zA-Z]{3,16}$/;
                var check_phone_number = /^[0-9]{3,16}$/;
                
                                
                                if(document.signup.password.length<6)
                                {
                                                alert("Password is too short.");
                                                document.signup.password.focus();
                                                return false;
                                }
                                if(document.signup.password.value!=document.signup.passconf.value)
                                {
                                                alert("Password does not match.");
                                                document.signup.password.focus();
                                                return false;
                                }
                               
                                if(check_name.test(document.signup.fname.value) == false)
                                {
                                                alert('Invalid  firstname');
                                                document.signup.fname.focus();
                                                return false;
                                }
                                if(check_name.test(document.signup.lname.value) == false)
                                {
                                                alert('Invalid  lastname');
                                                document.signup.lname.focus();
                                                return false;
                                }
                                if(check_phone_number.test(document.signup.phone_number.value) == false)
                                {
                                                alert('Invalid  phone');
                                                document.signup.phone_number.focus();
                                                return false;
                                }
}
                   
    </script>
	
  
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
	
	<blockquote><h2>SIGN UP !!</h2></blockquote>
       
	     <form name="signup" action="" method="post" onsubmit="validation_for_signup()">
        <div class="form_settings">
         
 	         <p><span>First Name :</span><input class="contact" type="text" name="fname" placeholder="First name" required/></p>
	         <p><span>Last Name :</span><input class="contact" type="text" name="lname" placeholder="Last name" /></p>
           <p><span>Email Address :</span><input class="contact" type="text" name="emailid" placeholder="Enter E-mail" required/></p>
           <p><span>New Password :</span><input class="contact" type="password" name="password" placeholder="Enter Password" required /></p>
           <p><span>Re-enter Password :</span><input class="contact" type="password" name="cnf_password" placeholder="Re-Enter Password" required /></p>
	         <p><span>Birthday :</span><input class="contact" type="text" name="birthday" placeholder="dd/mm/yyyy"/></p>
	         <p><span>Phone Number :</span><input class="contact" type="text" name="phone_number" placeholder="Add country code (+91-India)"/></p>
	         <p><span>Sex :</span><input type="text" name="sex" placeholder="M/F"></p>
           <p><span>Permanent Address :</span><textarea class="contact textarea" rows="3" cols="10" name="perm_add" placeholder="Residential Address.."/></textarea></p>
           <p><span>About Yourself :</span><textarea class="contact textarea" rows="8" cols="50" name="yourself" placeholder="Say Few Things About Yourself in Short.."/></textarea></p>
           <p><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="submit" /></p>
            
    

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

