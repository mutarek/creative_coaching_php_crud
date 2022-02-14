<?php 

$course_id = $_POST['cid'];
$course_name = $_POST['cname'];
$course_price = $_POST['cprice'];
$course_trainer = $_POST['c_trainer'];

$db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());

$update_query = "UPDATE course SET c_name ='$course_name', c_price = $course_price,c_trainer = $course_trainer WHERE c_id = $course_id ";

mysqli_query($db,$update_query) or die(mysqli_error());

header("Location: http://localhost/creative_coaching/allcourse.php");

mysqli_close($db);
?>