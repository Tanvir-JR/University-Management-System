<?php 
include "dbconnect.php";
 function login($username,$password,$rule){
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM user WHERE username = ? and password = ? and rule = ?");
    $sql->bind_param("sss", $username,$password,$rule);
    $sql->execute();
    $result=$sql->get_result();
    return $result->num_rows === 1 ;

}
function searchUser($username){
    $conn=connect();
    $sql =$conn->prepare( "SELECT * FROM `user` WHERE username = ?");
    $sql->bind_param("s",$username);
    $sql->execute();
    $result=$sql->get_result();
    return $result->fetch_assoc();
}

function uStudentInfo($id){
	$conn = connect();
    $sql = $conn->prepare("SELECT * FROM student_details where id = ?");
    $sql-> bind_param("s",$id);
    $sql->execute();
    $result=$sql->get_result();
    return $result->fetch_assoc();
    $sql->close();
    $conn->close();
}

function uTeacherInfo($id){
   $conn = connect();
    $sql = $conn->prepare("SELECT * FROM teacher_details where id = ?");
    $sql-> bind_param("s",$id);
    $sql->execute();
    $result=$sql->get_result();
    return $result->fetch_assoc();
    $sql->close();
    $conn->close();
}

function uManagementInfo($id){
   $conn = connect();
    $sql = $conn->prepare("SELECT * FROM management_details where id = ?");
    $sql-> bind_param("s",$id);
    $sql->execute();
    $result=$sql->get_result();
    return $result->fetch_assoc();
    $sql->close();
    $conn->close();
}


?>