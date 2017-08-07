<?php          
               $fname=$_POST['fname']; 
               $lname=$_POST['lname'];     
               $emailid=$_POST['emailid'];
               $password=$_POST['password']; 
               $birthday=$_POST['birthday']; 
               $phone_number=$_POST['phone_number'];     
               $sex=$_POST['sex'];
               $perm_add=$_POST['perm_add'];
               $yourself=$_POST['yourself'];
               $con = mysqli_connect("localhost","root" ,"","crackout");     
                 if (!$con)     
                  {     
                   die('Could not connect: ' . mysql_error());     
                  } 
                 $que= "select * from member where emailid='$emailid'"; 
                 $result=mysqli_query($con,$que);
                 $row=mysqli_num_rows($result);
                 if($row !=0)
                  { 
				  
                   
                  echo "Emailid already exists"; 
              
                                    }
                 else
                  { 
                  $query = "INSERT INTO member (fname,lname,emailid,password,birthday,phone_number,sex,perm_add,yourself)VALUES ('$fname','$lname','$emailid','$password','$birthday','$phone_number','$sex','$perm_add','$yourself')"; 
                  mysqli_query($con,$query);				  
              
                  echo "you are Succesflly registered"; 
                  
                
                  }
                  
?>