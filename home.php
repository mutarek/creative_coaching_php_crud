<?php
include "header.php";
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());
    $fetch_query = "SELECT * FROM student INNER JOIN course ON student.s_course = course.c_id 
    INNER JOIN trainer ON student.s_trainer = trainer.t_id ORDER BY s_id";
    $result = mysqli_query($db,$fetch_query) or die(mysqli_error());
    if (mysqli_num_rows($result) > 0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Number</th>
        <th>Course</th>
        <th>Trainer</th>
        </thead>
        <tbody>
            <?php 
            while ($student = mysqli_fetch_assoc($result)) {
                # code...
            ?>
            <tr>
                <td><?php echo $student['s_id']; ?></td>
                <td><?php echo $student['s_name']; ?></td>
                <td><?php echo $student['s_number']; ?></td>
                <td><?php echo $student['c_name']; ?></td>
                <td><?php echo $student['t_name']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

<?php } ?>
</div>
</div>
<?php
include 'footer.php';
?>
