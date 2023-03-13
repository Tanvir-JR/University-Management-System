
<?php 

require_once '../DB/dbdelete.php';

if (deleteManagement($_GET['id'])) {
    header('Location: ../Views/show-management.php');
}

 ?>

?>