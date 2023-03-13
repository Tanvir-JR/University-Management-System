
<?php 

require_once '../DB/dbdelete.php';

if (deleteTeacher($_GET['id'])) {
    header('Location: ../Views/show-teacher.php');
}

 ?>

?>