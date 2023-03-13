<?php

include "../DB/dbinsert.php";
$T_pname = $T_id = $T_position = $T_address = $T_phone = $T_email  = "";
$T_pnameEr = $T_idEr = $T_positionEr = $T_addressEr = $T_phoneEr=  $T_emailEr = '';
$flag = false;
$successMesg = $errorMesg = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {



    if (empty($_POST["T_pname"])) {
        $T_pnameEr = " Teacher Name required";
        $flag = true;
    }

    if (empty($_POST["T_id"])) {
        $T_idEr = " Teacher ID required";
        $flag = true;
    }
    if (empty($_POST["T_position"])) {
        $T_positionEr = " Teacher Position required";
        $flag = true;
    }
   
    if (empty($_POST["T_address"])) {
        $T_addressEr = " Address must be required";
        $flag = true;
    }
    if (empty($_POST["T_phone"])) {
        $T_phoneEr = " Phone number required";
        $flag = true;
    }
    if (empty($_POST["T_email"])) {
        $T_emailEr = " Email number required";
        $flag = true;
    }

    if (!$flag) {
        
    $T_pname = input($_POST["T_pname"]);
    $T_id = input($_POST["T_id"]);
    $T_position = input($_POST["T_position"]);
    $T_address = input($_POST["T_address"]);
    $T_phone = input($_POST["T_phone"]);
    $T_email = input($_POST["T_email"]);
    //Teacher information

        $result=addteacher($T_pname,$T_id,$T_position,$T_address,$T_phone,$T_email);

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