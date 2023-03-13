<?php 

include "Student-info.php";


$apartmentInfo = featchUpdateStudentInfo($_GET['id']);




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
.apartment-container{
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
<div class="student-container">
 <form action="updated-info-action.php" method="POST" >
<fieldset>
  <legend>Update Student Info</legend>

   <label for="S_pname"> Student Name :</label><br>
  <input value="<?php echo $studentInfo['S_pname'] ?>" type="text" id="S_pnameV" name="S_pname"><br>

 <label for="S_id"> Student Id :</label><br>
  <input value="<?php echo $studentInfo['S_id'] ?>" type="text" id="S_idV" name="S_id"><br>

   <label for="S_batch"> Student Batch :</label><br>
  <input value="<?php echo $studentInfo['S_batch'] ?>" type="text" id="S_batchV" name="S_batch"><br>

  <label for="S_address"> Student Address :</label><br>
  <input value="<?php echo $studentInfo['S_address'] ?>" type="text" id="S_addressV" name="S_address"><br>

  <label for="S_phone">Phone no:</label><br>
  <input value="<?php echo $studentInfo['S_phone'] ?>" type="text" id="S_phoneV" name="S_phone"><br>

  <label for="S_email"> Email Id:</label><br>
  <input  value="<?php echo $studentInfo['S_email'] ?>" type="text" id="S_emailV" name="S_email"><br><br>


  <input type="submit" class="update" name = "updatestudentInfo" value="Update">
</fieldset>

</form> 

</div>
<?php  require "includes/footer.php"; ?>
</body>
</html>

