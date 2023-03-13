<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/login-action.js"></script>
   
    <title>UNIVERSITY MANAGEMENT SYSTEM!!</title>
</head>
<body >



<?php 


$username="";
$password="";

include "../controllers/Login_action.php";

?>


    <div class="login">    
    <h1 style="color: whitesmoke;">Login Page</h1><br>    

    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" id="login" method="POST" onsubmit="return isValid()" name="LForm"> 
    <label  for="username" id="name">User Name :</label>
    <input type="text" id="Uname" name="username">
    <span id="usernamejsE" style="color: red;"> * <?php echo $User_NameEr;  ?></span> <br> <br>   
    <label for="password" id="name">password :</label>
    <input type="password" id="Pass" name="password">
    <span id="passwordjsE" style="color: red;"> * <?php echo $User_passwordEr;  ?> </span><br> <br>
    <div class = "remember">
    <input type="checkbox" name="remember">Remember me
   </div>
    <br> 
    <a href="forgotPassword.php"> Forgot password </a>
    <br><br>
    <label for="Rule" id="name">Role :</label> <br>
        <select  name="rule" id="Rule">
            <option value="">Select one</option>
            <option value="Admin">Admin</option>
            <option value="Student">Student</option>
            <option value="Teacher">Teacher</option>
            <option value="Management">Management</option>

        </select>    <span id="rulejsE" style="color: red;"> * <?php echo $User_ruleEr;  ?> </span><br> <br>
        <input  id="log" type="submit" name="submit" id="login-btn" value="Login"> <br> <br>

        
        <br><br>    
         <a href="./Signup.php">Sign Up</a>    
    </form>     
</div>    

</body>
</html>