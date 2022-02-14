<?php 
$trainer_id = $_POST['trainer_id'];
$trainer_name = $_POST['tname'];
$trainer_number = $_POST['tnumber'];
$trainer_dob = $_POST['tdob'];
$trainer_address = $_POST['taddress'];

$db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());

$update_query = "UPDATE trainer SET t_name ='$trainer_name',t_number = $trainer_number,t_address = '$trainer_address', dob= '$trainer_dob' WHERE t_id = $trainer_id ";
mysqli_query($db,$update_query) or die(mysqli_error());
header("Location: http://localhost/creative_coaching/alltrainer.php");
mysqli_close($db);
?>