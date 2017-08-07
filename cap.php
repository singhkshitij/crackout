<input name="captcha" type="text">
           <img src="captcha.php" />
           <p><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="submit" /></p>
            <?php session_start();
            if($_SESSION['code']==$_POST['captcha'])
            {
            echo "Correct Code Entered";
            }
            else
            {
            echo "Wrong Code Entered";
            }
            ?>