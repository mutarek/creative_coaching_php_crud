<?php
$trainer_name = $_POST['tname'];
$trainer_number = $_POST['tnumber'];
$trainer_dob= $_POST['tdob'];
$trainer_address = $_POST['taddress'];
$db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());
$insert_query = "INSERT INTO trainer (t_name,t_number,t_address,dob) VALUES 
('{$trainer_name}',{$trainer_number},'{$trainer_address}','{$trainer_dob}')";
mysqli_query($db,$insert_query) or die(mysqli_error());
header("Location: http://localhost/creative_coaching/alltrainer.php");
mysqli_close($db);
?>