<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Update Students</h2>
    <?php 
    $course_id = $_GET['sid'];
    $db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());
    $fetch_query1 = "SELECT * FROM student WHERE s_id = $course_id";
    $result1 = mysqli_query($db,$fetch_query1) or die(mysqli_error());
    if (mysqli_num_rows($result1) > 0) {
        while ($studentdata = mysqli_fetch_assoc($result1)) {

    ?>
    <form class="post-form" action="functions/.php" method="post">
        <div class="form-group">
            <label>Student Name</label>
            <input type="hidden" name="sid" value="<?php echo$studentdata['s_name']; ?>" />
            <input type="text" name="sname" value="<?php echo$studentdata['s_name']; ?>" />
        </div>
        <div class="form-group">
            <label>Student Number</label>
            <input type="number" name="snumber" value="<?php echo$studentdata['s_number']; ?>" />
        </div>
        <div class="form-group">
            <label>Select Course</label>
            <select name="student_course">
                <option value=""selected disabled>Select Course</option>
                <?php
                $db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());
                $fetch_query = "SELECT * FROM course";
                $result = mysqli_query($db,$fetch_query) or die(mysqli_error()); 
                while ($course = mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $course['c_id']; ?>"><?php echo $course['c_name']; ?></option>
            <?php } ?>
            </select>
        </div>
        <input class="submit" type="submit" value="Update"  />
    </form>
<?php } } ?>
</div>
</div>
<?php include 'footer.php'; ?>
