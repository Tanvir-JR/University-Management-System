
<?php 

require_once '../DB/dbdelete.php';

if (deleteStudent($_GET['id'])) {
    header('Location: ../Views/show-student.php');
}

 ?>

?>