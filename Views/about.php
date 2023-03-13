
<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ./Login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/about.css">
    <title>Document</title>
  
</head>
<body style="background-color:antiquewhite ">
<div class="about">
<h1> University Management Website </h1>
<p><b><h4><body>Dear Students,</h4></b>
 This is a University Management System (UMS) Website. UMS has user friendly interface that manages every aspects of workflow and integrates all university processes. Right from streamlining operations like student enrollment, admissions, assessments & examination management, online result publishing, to alumni management, it eliminates manual work & helps universities achieve maximum productivity by computerizing student, staff & administration lifecycles and minimizing the hassles of the university administration.</p>
 <p><b> Thank You</b></p>
<br><br><a href = "home.php" class="home-link"><b>Go back</b></a>
</div>





</body>
</html>