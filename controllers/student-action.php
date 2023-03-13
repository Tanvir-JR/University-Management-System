<?php

include "../DB/dbinsert.php";
$S_pname = $S_id = $S_batch = $S_address = $S_phone = $S_email  = "";
$S_pnameEr = $S_idEr = $S_batchEr = $S_addressEr = $S_phoneEr=  $S_emailEr = '';
$flag = false;
$successMesg = $errorMesg = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {



    if (empty($_POST["S_pname"])) {
        $S_pnameEr = " Student Name required";
        $flag = true;
    }

    if (empty($_POST["S_id"])) {
        $S_idEr = " Student ID No required";
        $flag = true;
    }
    if (empty($_POST["S_batch"])) {
        $S_batchEr = " Student Batch required";
        $flag = true;
    }
   
    if (empty($_POST["S_address"])) {
        $S_addressEr = "Student Address must be required";
        $flag = true;
    }
    if (empty($_POST["S_phone"])) {
        $S_phoneEr = "Student Phone number required";
        $flag = true;
    }
    if (empty($_POST["S_email"])) {
        $S_emailEr = "Student Email number required";
        $flag = true;
    }

    if (!$flag) {
        
    $S_pname = input($_POST["S_pname"]);
    $S_id = input($_POST["S_id"]);
    $S_batch = input($_POST["S_batch"]);
    $S_address = input($_POST["S_address"]);
    $S_phone = input($_POST["S_phone"]);
    $S_email = input($_POST["S_email"]);
    //Student information

        $result=addstudent($S_pname,$S_id,$S_batch,$S_address,$S_phone,$S_email);

        if ($result) {
            $successMesg = "Successfully Saved";
        } else {
            $errorMesg = "Error While saving";
        }
    }
}


function input($v)
{
    $v = htmlspecialchars($v);
    $v = trim($v);
    $v = stripslashes($v);
    return $v;
}
/*function write($value)
{
    $fileName = "../Views/apartment.json";
    $resors = fopen($fileName, "w");
    $fileWrite = fwrite($resors, $value);
    fclose($resors);
    return $fileWrite;
}
function read()
{
    $fileName = "../Views/apartment.json";
    $fileSize = filesize($fileName);
    $fr = "";
    if ($fileSize > 0) {
        $resource = fopen($fileName, "r");
        $fr = fread($resource, $fileSize);
        fclose($resource);
        return $fr;
    }
}*/

?>