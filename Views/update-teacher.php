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
    <script src="js/update-teacher-action.js"></script>
    <title>University Management System!!</title>
</head>
<body>

<?php 
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<h2 style="text-align: center; color:aquamarine; background-color:blueviolet">Update Teacher Details</h2>
    <fieldset>
          <legend> Teachers Details </legend>
        
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
    <input type="submit" name="submit" value="Update"> <br> <br>
</fieldset>
<?php require "../controllers/includes/footer.php";
 ?>
     <?php include "../controllers/update-teacher-action.php"; ?>


</body>
</html>