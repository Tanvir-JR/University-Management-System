<?php

require "dbconnect.php";



   function register($full_name, $username, $password,$email, $User_Rule){
       $conn =connect();
    $sql = $conn->prepare("INSERT INTO user (full_name, username, password, email, rule) VALUES (?, ?, ?, ?, ?)");
    $sql-> bind_param("sssss", $full_name, $username, $password, $email, $User_Rule);
   
   $sql->execute();
   $sql->close();
    $conn->close();
  
}

function addstudent($S_pname, $S_id, $S_batch, $S_address, $S_phone, $S_email){
    $conn =connect();
 $sql = $conn->prepare("INSERT INTO student_details (S_pname, S_id, S_batch, S_address, S_phone, S_email) VALUES (?,?,?,?,?,?)");
 $sql-> bind_param("ssssss",$S_pname, $S_id, $S_batch, $S_address, $S_phone, $S_email);

$sql->execute();
$sql->close();
 $conn->close();
}

function updateStudent($S_pname, $S_id, $S_batch, $S_address, $S_phone, $S_email){
    $conn =connect();
 $sql = $conn->prepare("UPDATE student_details set S_pname=?,S_id=?,S_batch=?,S_address=?,S_phone=?,S_email=? where id = ?");
 $sql-> bind_param("ssssss",$S_pname, $S_id, $S_batch, $S_address, $S_phone, $S_email);

$sql->execute();
$sql->close();
 $conn->close();

}

function addteacher($T_pname, $T_id, $T_position, $T_address, $T_phone, $T_email){
    $conn =connect();
 $sql = $conn->prepare("INSERT INTO teacher_details (T_pname, T_id, T_position, T_address, T_phone, T_email) VALUES (?,?,?,?,?,?)");
 $sql-> bind_param("ssssss",$T_pname, $T_id, $T_position, $T_address, $T_phone, $T_email);

$sql->execute();
$sql->close();
 $conn->close();
}

function updateTeacher($T_pname, $T_id, $T_position, $T_address, $T_phone, $T_email){
    $conn =connect();
 $sql = $conn->prepare("UPDATE teacher_details set T_pname=?,T_id=?,T_position=?,T_address=?,T_phone=?,T_email=? where id = ?");
 $sql-> bind_param("ssssss",$T_pname, $T_id, $T_position, $T_address, $T_phone, $T_email);

$sql->execute();
$sql->close();
$conn->close();

}

function addmanagement($M_pname, $M_id, $M_position, $M_address, $M_phone, $M_email){
 $conn =connect();
 $sql = $conn->prepare("INSERT INTO management_details (M_pname, M_id, M_position, M_address, M_phone, M_email) VALUES (?,?,?,?,?,?)");
 $sql-> bind_param("ssssss",$M_pname, $M_id, $M_position, $M_address, $M_phone, $M_email);

$sql->execute();
$sql->close();
 $conn->close();
}

function updateManagement($M_pname, $M_id, $M_position, $M_address, $M_phone, $M_email){
 $conn =connect();
 $sql = $conn->prepare("UPDATE management_details set M_pname=?,M_id=?,M_position=?,M_address=?,M_phone=?,M_email=? where id = ?");
 $sql-> bind_param("ssssss",$M_pname, $M_id, $M_position, $M_address, $M_phone, $M_email);

$sql->execute();
$sql->close();
 $conn->close();
}

function password($n_pass,$p_email){
    $conn =connect();
 $sql = $conn->prepare("UPDATE user set password = ? where email = ?");
 $sql-> bind_param("ss",$n_pass,$p_email,);

$sql->execute();
$sql->close();
 $conn->close();
}


function s(){
    $conn=connect();
    $sql =$conn->prepare( "SELECT * FROM chat");
    $sql->execute();
    $result=$sql->get_result();
   return $result; 
}
function addv($message,$user){
    $conn=connect();
    $sql = $conn->prepare('INSERT INTO chat (message,user) VALUES (?,?)');
    $sql->bind_param("ss",$message,$user);

    $sql->execute();
    $sql->close();
    $conn->close();
}
?>