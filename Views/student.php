<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ./Login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/student-action.js"></script>
    <title>University Management System!!</title>
    <style>
        input[type=text], select {
  width: 30%;
  margin: 0 auto;
  padding: 12px 20px;
  margin: 8px 0;
 
}
        input[type=number] {
  width: 30%;
  margin: 0 auto;
  padding: 12px 20px;
  margin: 8px 0;
 
}
.student-container{
    width: 50%;
    margin: 0 auto;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
}
fieldset{
    margin-top: 10px;
}
.add{
    font-size: 18px;
    color: whitesmoke;
    border: 1px solid black;
    margin-top: 10px;
    display: inline-block;
    margin: 10px;
    padding: 10px;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
    cursor:pointer;
    background-color: brown;
    
}
    </style>
</head>
<body style="background-color:antiquewhite ">
<?php
include "../controllers/student-action.php";
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";
?>
<div class="student-container">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" onsubmit="return isValid()" name="SForm">
<h2 style="text-align: center; color:aquamarine; background-color:blueviolet">Add New Student</h2>
    <fieldset>
        <legend> Student Details</legend>
        <br>
        <label for="S_pname"> Student name  :</label>
        <input type="text" name="S_pname">  <span id="S_pnameV" style="color: red;"> * <?php echo $S_pnameEr ?></span> <br>

        <label for="S_id"> Student Id       :</label>
        <input type="text" name="S_id">  <span id="S_idV" style="color: red;"> * <?php echo $S_idEr ?></span> <br>

        <label for="S_batch"> Student Batch    :</label>
        <input type="text" name="S_batch">  <span id="S_batchV" style="color: red;"> * <?php echo $S_batchEr ?></span> <br>

        <label for="S_address"> Student Address  :</label>
        <input type="text" name="S_address">  <span id="S_addressV" style="color: red;"> * <?php echo $S_addressEr ?></span> <br>

        <label for="S_phone"> Phone number         :</label>
        <input type="number" name="S_phone">  <span id="S_phoneV" style="color: red;"> * <?php echo $S_phoneEr ?></span> <br>

        <label for="S_email"> Email Id  :</label>
        <input type="text" name="S_email">  <span id="S_emailV" style="color: red;"> * <?php echo $S_emailEr ?></span> <br>
    </fieldset>
    <input type="submit" class="add" name="submit" value="Add"> <br> <br>
    <a href="show-student.php"> Show All Student</a> 

    <!-- <a href="update-student.php">Update</a> 
    <a href="delete-student.php">Delete</a>  -->

</form>
</div>
<?php require "../controllers/includes/footer.php" ?>
</body>
</html>