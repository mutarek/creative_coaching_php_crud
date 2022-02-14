<?php 
$trainer_id = $_GET['trainer_id'];

$db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());

$delete_query = "DELETE FROM trainer WHERE t_id = $trainer_id";

mysqli_query($db,$delete_query) or die(mysqli_error());

header("Location: http://localhost/creative_coaching/alltrainer.php");

mysqli_close($db);

?>