<?php

function connect(){
    $conn = new mysqli("localhost","root","","ums_final");
if($conn->connect_errno){
    die("Failed To Connect");
   
}
return $conn;

}




?>