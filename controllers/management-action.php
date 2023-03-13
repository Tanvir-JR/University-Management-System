<?php

include "../DB/dbinsert.php";
$M_pname = $M_id = $M_position = $M_address = $M_phone = $M_email  = "";
$M_pnameEr = $M_idEr = $M_positionEr = $M_addressEr = $M_phoneEr=  $M_emailEr = '';
$flag = false;
$successMesg = $errorMesg = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {



    if (empty($_POST["M_pname"])) {
        $M_pnameEr = " Management Name required";
        $flag = true;
    }

    if (empty($_POST["M_id"])) {
        $M_idEr = " Management ID required";
        $flag = true;
    }
    if (empty($_POST["M_position"])) {
        $M_positionEr = " Position required";
        $flag = true;
    }
   
    if (empty($_POST["M_address"])) {
        $M_addressEr = "Address required";
        $flag = true;
    }
    if (empty($_POST["M_phone"])) {
        $M_phoneEr = "Phone number required";
        $flag = true;
    }
    if (empty($_POST["M_email"])) {
        $M_emailEr = "Email number required";
        $flag = true;
    }

    if (!$flag) {
        
    $M_pname = input($_POST["M_pname"]);
    $M_id = input($_POST["M_id"]);
    $M_position = input($_POST["M_position"]);
    $M_address = input($_POST["M_address"]);
    $M_phone = input($_POST["M_phone"]);
    $M_email = input($_POST["M_email"]);
    
    //Management information

        $result=addmanagement($M_pname,$M_id,$M_position,$M_address,$M_phone,$M_email);

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
    $fileName = "../Views/management.json";
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