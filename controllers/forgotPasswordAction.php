<?php
include "../DB/dbinsert.php";
	$p_email = $n_pass = "";
	$p_emailEr = $n_passEr = "";
$valid = false;
$successMesg = $errorMesg = "";


 if($_SERVER["REQUEST_METHOD"]=="POST"){

if (empty($_POST["pemail"])) {

        $p_emailEr = "Email is required";
        $valid = true;
    }

if (empty($_POST["n_pass"])) {

        $n_passEr = "Password is required";
        $valid = true;
    }

 if (!$valid) {
        $p_email = ($_POST["pemail"]);
        $n_pass = ($_POST["n_pass"]);   

          $result=password($n_pass,$p_email);
 
         header("Location: ../Views/Login.php");


}

}
function input($v)
{
    $v = htmlspecialchars($v);
    $v = trim($v);
    $v = stripslashes($v);
    return $v;
}

    ?>



