<?php 

include "Management-info.php";


$managementInfo = featchUpdateManagementInfo($_GET['id']);




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
<div class="management-container">
 <form action="updated-info-action.php" method="POST" >
<fieldset>
  <legend>Update Management Info</legend>

   <label for="M_pname"> Management NAME :</label><br>
  <input value="<?php echo $managementInfo['M_pname'] ?>" type="text" id="M_pnameV" name="M_pname"><br>

 <label for="M_id"> Management ID :</label><br>
  <input value="<?php echo $managementInfo['M_id'] ?>" type="text" id="M_idV" name="M_id"><br>

   <label for="M_position"> Management POSITION :</label><br>
  <input value="<?php echo $managementInfo['M_position'] ?>" type="text" id="M_positionV" name=" M_position"><br>

  <label for="M_address"> Management ADDRESS :</label><br>
  <input value="<?php echo $managementInfo['M_address'] ?>" type="text" id="M_addressV" name="M_address"><br>

  <label for="M_phone">PHONE NUMBER:</label><br>
  <input value="<?php echo $managementInfo['M_phone'] ?>" type="text" id="M_phoneV" name="M_phone"><br>

  <label for="M_email"> EMAIL ID:</label><br>
  <input  value="<?php echo $managementInfo['M_email'] ?>" type="text" id="M_emailV" name="M_email"><br><br>


  <input type="submit" class="update" name = "updatemanagementInfo" value="Update">
</fieldset>

</form> 

</div>
<?php  require "includes/footer.php"; ?>
</body>
</html>

