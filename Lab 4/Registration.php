 <?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["un"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      }
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      }
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["un"],  
                     'pass'               =>     $_POST['pass'],
                     'Cpass'               =>     $_POST['Cpass'],
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  



<!DOCTYPE html>  
<html>
<head>
	<title>Create a new account</title>
</head>
<body>

    <?php
    //define variables and set value empty
    $nameErr = $emailErr = $pwdErr = $pwdcErr = $genderErr = $userErr = '';
    $name = $email = $pwd = $pwdc = $gender = $user ='';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])){
        if (empty($name)){
            $nameErr = 'name is required!';
        }else{
            $name = validate($_POST['name']);
            //check if name format is correct
            if (!preg_match("/^[a-zA-Z-']*$/",$name)){
                $nameErr = 'only letters and white space allowed!';
            }
        }

        if (empty($email)){
            $emailErr = 'email is required!';
        }else{
            $email = validate($_POST['email']);
            //check if the email format is correct
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr = 'email format is not correct!';
            }
        }

        if (empty($pwd)){
            $pwdErr = 'password is required!';
        }else{
            $pwd = validate($_POST['pwd']);
            //check if the password format is correct
        }

        if (empty($pwdc)){
            $pwdcErr = 'password is not confirmed!';
        }else{
            $pwdc = validate($_POST['pwdc']);
            //check if the password is matched or not
        }

        if (empty($gender)) {
            $genderErr = 'gender is required!';
        }else{
            $gender = validate($_POST['gender']);
        }

        if (empty($user)) {
            $userErr = 'user name is required';
        }else{
            $user = validate($_POST['name']);
            
            if (!preg_match("/^[a-zA-Z-' ]*$/",$user)){
                $userErr = 'only letters and white space allowed!';
            }
        }
    }

    ?>


			<fieldset>
				<h1>Welcome</h1>
                <a href="home.php"> Home </a>
                <a href="Registration.php"> Registration </a>
                <a href="login.php"> login </a>						 
							
			<fieldset>
            <legend>Create a new account </legend>
      <body>  
           <br />  
           <div class="container" style="width:500px;">               
               <p><span class="error">* required field</span></p>
                     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

                     <?php  
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />
                     

                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
                     <span class="error">* <?php echo $nameErr;?></span><br />

                     <label>E-mail</label>
                     <input type="text" name="email" class="form-control" value="<?php echo $email;?>">
                     <span class="error">* <?php echo $emailErr;?></span><br />

                     <label>User Name</label>
                     <input type="text" name="un" class="form-control" value="<?php echo $user;?>">
                     <span class="error">* <?php echo $userErr;?></span><br />

                     <label>Password</label>
                     <input type="password" name="pass" class="form-control" value="<?php echo $pwd;?>">
                     <span class="error">* <?php echo $pwdErr;?></span><br />

                     <label>Confirm Password</label>
                     <input type="password" name="Cpass" class="form-control" value="<?php echo $pwdc;?>">
                     <span class="error">* <?php echo $pwdcErr;?></span><br />
                     

                    <fieldset>
                    <legend>Gender</legend>
                     <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
                    <span class="error">* <?php echo $genderErr;?></span><br>

                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob"> <br><br>
                    </fieldset>
                     <input type="reset" name="submit" value="reset" class="btn btn-info" />
                     <input type="submit" name="submit" value="submit" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
           
  
            	
            	</fieldset>
            	</fieldset>


</body>
</html>