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
#teacher-details {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#teacher-details td, #teacher-details th {
  border: 1px solid #ddd;
  padding: 8px;
}
#teachers-details tr{
	transition: all 0.6s;
}

#teacher-details tr:nth-child(even){background-color: #f2f2f2;}

#teacher-details tr:hover {background-color: #ddd;}

#teacher-details th {
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
    $sql =$conn->prepare("SELECT * FROM teacher_details");
    $sql->execute();
    $result=$sql->get_result(); ?>
<table id="teacher-details">
	<thead>
		<tr style="padding:5px; background-color:yellow;">
			<th style="margin:5px;"> TEACHER NAME </th>
			<th > TEACHER ID </th>
			<th> TEACHER POSITION </th>
			<th> TEACHER ADDRESS</th>
			<th> PHONE NUMBER </th>
			<th> EMAIL ID</th>   

		</tr>
	</thead>
	<tbody>
		<?php    foreach($result as $value):?>
			<tr>
            
                <td><?php echo $value["T_pname"] ?></td>

                <td><?php echo $value["T_id"] ?></td>

                <td><?php echo $value["T_position"] ?></td>
                <td><?php echo $value["T_address"]?></td>
                <td><?php echo $value["T_phone"]?></td>
                <td><?php echo $value["T_email"]?></td>
                
				<td><a href="../controllers/delete_Teacher_user.php?id=<?php echo $value['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">delete</a> &nbsp<a href="../controllers/update-teacher-user.php?id=<?php echo $value['id'] ?>">Update</a></td> 
   

				
				
			</tr>
			<?php endforeach ?>
	
		

	</tbody>
	

</table>
<?php require "../controllers/includes/footer.php";
 ?>

</body>
</html>