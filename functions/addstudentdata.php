<?php
$student_name = $_POST['sname'];
$student_number = $_POST['snumber'];
$student_course = $_POST['student_course'];

$db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());
$fetch_query = "SELECT * FROM course WHERE c_id = $student_course";
$result = mysqli_query($db,$fetch_query) or die(mysqli_error());
$eachdata = mysqli_fetch_assoc($result);
$student_trainer = $eachdata['c_trainer'];



$insert_query = "INSERT INTO student(s_name,s_number,s_course,s_trainer) VALUES 
('{$student_name}',{$student_number},{$student_course},{$student_trainer})";
mysqli_query($db,$insert_query) or die(mysqli_error());
header("Location: http://localhost/creative_coaching/home.php");
mysqli_close();


?>