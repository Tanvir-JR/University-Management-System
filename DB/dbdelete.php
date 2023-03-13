<?php

require "dbconnect.php";



function deleteStudent($id)
{
    $conn = connect();
    $sql = $conn->prepare("DELETE FROM student_details WHERE id=?");
    $sql->bind_param("s", $id);
    $respone = $sql->execute();
    $sql->close();
    $conn->close();
    return $respone;
}

function deleteTeacher($id)
{
    $conn = connect();
    $sql = $conn->prepare("DELETE FROM teacher_details WHERE id=?");
    $sql->bind_param("s", $id);
    $respone = $sql->execute();
    $sql->close();
    $conn->close();
    return $respone;
}

