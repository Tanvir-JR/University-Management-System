
<?php  
include "../DB/dbinsert.php";


if (isset($_POST['updatestudentInfo'])) {
    $S_pname = $_POST["S_pname"];
    $S_id = $_POST["S_id"];
    $S_batch= $_POST["S_batch"];
    $S_address  = $_POST["S_address"];
    $S_phone = $_POST["S_phone"];
    $S_email = $_POST["S_email"];
   
    $result =updateStudent($S_pname,$S_id,$S_batch,$S_address,$S_phone,$S_email);

   
       
        header('Location: ../Views/show-student.php');
        echo "Hi"; 
}

if (isset($_POST['updateteacherInfo'])) {
    $T_pname = $_POST["T_pname"];
    $T_id = $_POST["T_id"];
    $T_position = $_POST["T_position"];
    $T_address  = $_POST["T_address"];
    $T_phone = $_POST["T_phone"];
    $T_email = $_POST["T_email"];
   
    $result =updateTeacher($T_pname,$T_id,$T_position,$T_address,$T_phone,$T_email);

   
       
        header('Location: ../Views/show-teacher.php');
        echo "Hello"; 
}



?>