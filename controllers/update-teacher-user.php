<?php 

include "Teacher-info.php";


$teacherInfo = featchUpdateTeacherInfo($_GET['id']);




 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
.update{
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
<body>

<?php 
require "includes/header.php";
require "includes/sidebar_links.php";
?>
<div class="teacher-container">
 <form action="updated-info-action.php" method="POST" >
<fieldset>
  <legend>Update Teacher Info</legend>

   <label for="T_pname"> TEACHER NAME :</label><br>
  <input value="<?php echo $teacherInfo['T_pname'] ?>" type="text" id="T_pnameV" name="T_pname"><br>

 <label for="T_id"> TEACHER ID :</label><br>
  <input value="<?php echo $teacherInfo['T_id'] ?>" type="text" id="T_idV" name="T_id"><br>

   <label for="T_position"> TEACHER POSITION :</label><br>
  <input value="<?php echo $teacherInfo['T_position'] ?>" type="text" id="T_positionV" name="T_position"><br>

  <label for="T_address"> TEACHER ADDRESS :</label><br>
  <input value="<?php echo $teacherInfo['T_address'] ?>" type="text" id="T_addressV" name="T_address"><br>

  <label for="T_phone">PHONE NUMBER:</label><br>
  <input value="<?php echo $teacherInfo['T_phone'] ?>" type="text" id="T_phoneV" name="T_phone"><br>

  <label for="T_email"> EMAIL ID:</label><br>
  <input  value="<?php echo $teacherInfo['T_email'] ?>" type="text" id="T_emailV" name="T_email"><br><br>


  <input type="submit" class="update" name = "updateteacherInfo" value="Update">
</fieldset>

</form> 

</div>
<?php  require "includes/footer.php"; ?>
</body>
</html>

