<?php 

$student_id = $_POST['sid'];
$student_name = $_POST['snumber'];
$student_number = $_POST['snumber'];
$student_course = $_POST['student_course'];

$db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());

$update_query = "UPDATE student SET s_name ='$student_name',s_number = $student_number,t_address = '$trainer_address', dob= '$trainer_dob' WHERE t_id = $trainer_id ";
mysqli_query($db,$update_query) or die(mysqli_error());
header("Location: http://localhost/creative_coaching/alltrainer.php");
mysqli_close($db);

?>