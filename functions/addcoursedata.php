<?php
$course_name = $_POST['cname'];
$courses_trainer = $_POST['c_trainer'];
$course_price = $_POST['cprice'];
echo $course_name.$course_trainer.$course_price;
$db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());
$insert_query = "INSERT INTO course (c_name	,c_price,c_trainer) VALUES 
('{$course_name}',{$course_price},{$courses_trainer})";
mysqli_query($db,$insert_query) or die(mysqli_error());
header("Location: http://localhost/creative_coaching/allcourse.php");
mysqli_close($db);

?>