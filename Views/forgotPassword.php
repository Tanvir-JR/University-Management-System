<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forgotpassword.css">
    <script src="js/forgot.js"></script>


    <title>UNIVERSITY MANAGEMENT SYSTEM!!</title>
</head>

<body>
  
<?php

  include "../controllers/forgotPasswordAction.php";
  ?>
  

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" onsubmit="return isValid()" name="PForm">
   
  <div class="login">    
    <h1 style="color: white;">Forgot password Page</h1><br>  
        <label for="p_email"> Previous Email  :</label>
        <input type="text" id="Uname" name="pemail" value="<?php echo $p_email;  ?>">
        <span id="pemailjsE" style="color: red;"> * <?php echo $p_emailEr;  ?></span>
        <br>
  <br>

   <label for="n_pass"> New Password  :</label>
        <input type="text" id="Uname" name="n_pass" value="<?php echo $n_pass;  ?>">
        <span id="npassjsE" style="color: red;"> * <?php echo $n_passEr;  ?></span>
        <br><br>
  <br>
  <input type="submit" id="log" value="Submit">

  </form>

  </div>
	<span><?php echo $successMesg ?></span>
  <span><?php echo $errorMesg ?></span>
<?php

?>
</body>

</html>