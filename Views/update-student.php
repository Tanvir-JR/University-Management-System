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
    <script src="js/update-student-action.js"></script>
    <title>University Management System!!</title>
</head>
<body>

<?php 
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<h2 style="text-align: center; color:aquamarine; background-color:blueviolet">Update Student Details</h2>
    <fieldset>
         <legend> Student Details</legend>
        <br>
        <label for="S_pname"> Student name  :</label>
        <input type="text" name="S_pname">  <span id="S_pnameV" style="color: red;"> * <?php echo $S_pnameEr ?></span> <br>

        <label for="S_idno"> Student Id       :</label>
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
    <input type="submit" name="submit" value="Update"> <br> <br>
</fieldset>
<?php require "../controllers/includes/footer.php";
 ?>
     <?php include "../controllers/update-student-action.php"; ?>


</body>
</html>