<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Course</h2>
    <form class="post-form" action="functions/addstudentdata.php" method="post">
        <div class="form-group">
            <label>Student Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Student Number</label>
            <input type="number" name="snumber" />
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
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
<?php include 'footer.php'; ?>
