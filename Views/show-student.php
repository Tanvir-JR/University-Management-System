<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ./Login.php");
}
?>
<?php  

include "../DB/dbconnect.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
#student-details {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#student-details td, #student-details th {
  border: 1px solid #ddd;
  padding: 8px;
}
#student-details tr{
	transition: all 0.6s;
}

#student-details tr:nth-child(even){background-color: #f2f2f2;}

#student-details tr:hover {background-color: #ddd;}

#student-details th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: brown;
  color: white;
}
	</style>
</head>
<body>
    
<?php 
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";
?>
<?php $conn=connect();
    $sql =$conn->prepare("SELECT * FROM student_details");
    $sql->execute();
    $result=$sql->get_result(); ?>
<table id="student-details">
	<thead>
		<tr style="padding:5px; background-color:yellow;">
			<th style="margin:5px;"> Student Name </th>
			<th > Student Id </th>
			<th> Student Batch </th>
			<th> Student Address</th>
			<th> Phone number </th>
			<th> Email Id</th>   

		</tr>
	</thead>
	<tbody>
		<?php    foreach($result as $value):?>
			<tr>
            
                <td><?php echo $value["S_pname"] ?></td>

                <td><?php echo $value["S_id"] ?></td>

                <td><?php echo $value["S_batch"] ?></td>
                <td><?php echo $value["S_address"]?></td>
                <td><?php echo $value["S_phone"]?></td>
                <td><?php echo $value["S_email"]?></td>
                
				<td><a href="../controllers/delete_Student_user.php?id=<?php echo $value['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">delete</a> &nbsp<a href="../controllers/update-student-user.php?id=<?php echo $value['id'] ?>">Update</a></td> 
   

				
				
			</tr>
			<?php endforeach ?>
	
		

	</tbody>
	

</table>
<?php require "../controllers/includes/footer.php";
 ?>

</body>
</html>