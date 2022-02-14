<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Update Course</h2>
    <?php 
    $course_id = $_GET['cid'];
    $db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());

    $fetch_query1 = "SELECT * FROM course WHERE c_id = $course_id";

    $result1 = mysqli_query($db,$fetch_query1) or die(mysqli_error());
    if (mysqli_num_rows($result1) > 0) {
        while ($coursedata = mysqli_fetch_assoc($result1)) {

    ?>
    <form class="post-form" action="functions/updatecoursedata.php" method="post">
        <div class="form-group">
            <label>Course Name</label>
            <input type="hidden" name="cid" value="<?php echo$coursedata['c_id'] ?>" />
            <input type="text" name="cname" value="<?php echo$coursedata['c_name'] ?>" />
        </div>
        <div class="form-group">
            <label>Course Trainer</label>
            <select name="c_trainer">
                <option value=""selected disabled>Select Trainer</option>
                <?php
                $db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());
                $fetch_query = "SELECT * FROM trainer";
                $result = mysqli_query($db,$fetch_query) or die(mysqli_error()); 
                while ($trainer = mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $trainer['t_id']; ?>"><?php echo $trainer['t_name']; ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Course Price</label>
            <input type="number" name="cprice" value="<?php echo$coursedata['c_price'] ?>" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
    <?php } } ?>
</div>
</div>
<?php include 'footer.php'; ?>
