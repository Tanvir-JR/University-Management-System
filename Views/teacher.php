<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ./Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/teacher-action.js"></script>
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
.teacher-container{
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
  include "../controllers/teacher-action.php";
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";

?>
<div class="teacher-container">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" onsubmit="return isValid()" name="`TForm">
<h2 style="text-align: center; color:aquamarine; background-color:blueviolet">ADD TEACHER INFORMATION</h2>
    <fieldset>
        <legend> Teachers Details</legend>
        
        <label for="T_pname"> TEACHER NAME  :</label>
        <input type="text" name="T_pname">  <span id="T_pnameV" style="color: red;"> * <?php echo $T_pnameEr ?></span> <br>

        <label for="T_id">TEACHER ID       :</label>
        <input type="text" name="T_id">  <span id="T_idV" style="color: red;"> * <?php echo $T_idEr ?></span> <br>

        <label for="T_position">TEACHER POSITION    :</label>
        <input type="text" name="T_position">  <span id="T_positionV" style="color: red;"> * <?php echo $T_positionEr ?></span> <br>

        <label for="T_address">TEACHER ADDRESS  :</label>
        <input type="text" name="T_address">  <span id="T_addressV" style="color: red;"> * <?php echo $T_addressEr ?></span> <br>

        <label for="T_phone">PHONE NUMBER         :</label>
        <input type="number" name="T_phone">  <span id="T_phoneV" style="color: red;"> * <?php echo $T_phoneEr ?></span> <br>

        <label for="T_email">EMAIL ID  :</label>
        <input type="text" name="T_email">  <span id="T_emailV" style="color: red;"> * <?php echo $T_emailEr ?></span> <br>
    </fieldset>
    <input type="submit" class="add" name="submit" value="Add"> <br> <br>

    <a href="show-teacher.php">Show All Teachers</a> 
    
</form>
</div>

<?php require "../controllers/includes/footer.php";?>

</body>
</html>