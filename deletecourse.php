<?php 
$course_id = $_GET['courseid'];

$db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());

$delete_query = "DELETE FROM course WHERE c_id = $course_id";

mysqli_query($db,$delete_query) or die(mysqli_error());

header("Location: http://localhost/creative_coaching/allcourse.php");

mysqli_close($db);

?>