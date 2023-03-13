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
#management-details {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#management-details td, #management-details th {
  border: 1px solid #ddd;
  padding: 8px;
}
#teachers-details tr{
	transition: all 0.6s;
}

#management-details tr:nth-child(even){background-color: #f2f2f2;}

#management-details tr:hover {background-color: #ddd;}

#management-details th {
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
    $sql =$conn->prepare("SELECT * FROM management_details");
    $sql->execute();
    $result=$sql->get_result(); ?>
<table id="management-details">
	<thead>
		<tr style="padding:5px; background-color:yellow;">
			<th style="margin:5px;"> MANAGEMENT NAME </th>
			<th > MANAGEMENT ID </th>
			<th> MANAGEMENT POSITION </th>
			<th> MANAGEMENT ADDRESS</th>
			<th> PHONE NUMBER </th>
			<th> EMAIL ID</th>   

		</tr>
	</thead>
	<tbody>
		<?php    foreach($result as $value):?>
			<tr>
            
                <td><?php echo $value["M_pname"] ?></td>

                <td><?php echo $value["M_id"] ?></td>

                <td><?php echo $value["M_position"] ?></td>
                <td><?php echo $value["M_address"]?></td>
                <td><?php echo $value["M_phone"]?></td>
                <td><?php echo $value["M_email"]?></td>
                
				<td><a href="../controllers/delete_Management_user.php?id=<?php echo $value['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">delete</a> &nbsp<a href="../controllers/update-management-user.php?id=<?php echo $value['id'] ?>">Update</a></td> 
   

				
				
			</tr>
			<?php endforeach ?>
	
		

	</tbody>
	

</table>
<?php require "../controllers/includes/footer.php";
 ?>

</body>
</html>