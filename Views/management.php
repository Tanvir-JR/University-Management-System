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
    <script src="js/management-action.js"></script>
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
.management-container{
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
  include "../controllers/management-action.php";
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";

?>
<div class="management-container">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" onsubmit="return isValid()" name="`MForm">
<h2 style="text-align: center; color:aquamarine; background-color:blueviolet">ADD MANAGEMENT INFORMATION</h2>
    <fieldset>
        <legend> Management Details</legend>
        
        <label for="M_pname"> MANAGEMENT NAME  :</label>
        <input type="text" name="M_pname">  <span id="M_pnameV" style="color: red;"> * <?php echo $M_pnameEr ?></span> <br>

        <label for="M_id">MANAGEMENT ID       :</label>
        <input type="text" name="M_id">  <span id="M_idV" style="color: red;"> * <?php echo $M_idEr ?></span> <br>

        <label for="M_position">MANAGEMENT POSITION    :</label>
        <input type="text" name="M_position">  <span id="M_positionV" style="color: red;"> * <?php echo $M_positionEr ?></span> <br>

        <label for="M_address">MANAGEMENT ADDRESS  :</label>
        <input type="text" name="M_address">  <span id="M_addressV" style="color: red;"> * <?php echo $M_addressEr ?></span> <br>

        <label for="M_phone">PHONE NUMBER         :</label>
        <input type="number" name="M_phone">  <span id="M_phoneV" style="color: red;"> * <?php echo $M_phoneEr ?></span> <br>

        <label for="M_email">EMAIL ID  :</label>
        <input type="text" name="M_email">  <span id="M_emailV" style="color: red;"> * <?php echo $M_emailEr ?></span> <br>
    </fieldset>
    <input type="submit" class="add" name="submit" value="Add"> <br> <br>

    <a href="show-management.php">Show All Management</a> 
    <!-- <a href="update-management.php">Update</a> 
    <a href="delete-management.php">Delete</a>  -->

</form>
</div>

<?php require "../controllers/includes/footer.php";?>

</body>
</html>