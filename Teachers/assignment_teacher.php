<?php include_once "feature-header.php" ?>
<?php
include_once "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file_name = $_FILES['assignment-file']['name'];
    $subject = $_POST['subject'];
    $subject_code = $_POST['subject_code'];
    $assignment_title= $_POST['assignment_title'];
    $year= $_POST['year'];
    $class= $_POST['class'];
    $sql = "INSERT INTO assignment (`class`, `subject_name`, `subject_code`, `assignment_title`, `assignment_file`, `year`) VALUES ('$class', '$subject', '$subject_code', '$assignment_title'. '$file_name','$year');";
    $result2 = mysqli_query($conn, $sql);
    if ($result2) { ?>
        <div class="alert alert-primary" role="alert" style="font-size: 1.5rem;">
            Ciruclar Uploaded Successfully!
        </div>

        <?php if (isset($_FILES['assignment-file'])) {
            $file_size = $_FILES['assignment-file']['size'];
            $file_tmp = $_FILES['assignment-file']['tmp_name'];
            $file_type = $_FILES['assignment-file']['type'];
            move_uploaded_file($file_tmp, "assignment/" . $file_name);
        }
    } else { ?>
        <div class="alert alert-danger" role="alert" style="font-size: 1rem;">
            Unable to upload the circular. Please try again!
        </div>
<?php }
}
?>

<section id="feature-assignment" class="my-2">
    <div class="assignment-header">
        <h1>Assignments: </h1>
    </div>
    <div class="assignment-table my-0">
        <form action="" method="POST" enctype="multipart/form-data" id="circular-form" class="my-0">
            <div class="circular-sub-form">
                <input type="text" name="subject" placeholder="Subject" required>
            </div>
            <div class="circular-sub-form">
                <input type="text" name="subject_code" placeholder="Subject Code" required>
            </div>
            <div class="circular-sub-form">
                <input type="text" name="assignment_title" placeholder="Assignment Title" required>
            </div>
            <div class="circular-sub-form">
                <input type="text" name="class" placeholder="Class" required>
            </div>    
            <div class="circular-sub-form">
                <input type="text" name="year" placeholder="Year" required>
            </div>            
            <div class="circular-sub-form">
                <input type="file" name="assignment-file" accept="application/pdf">
            </div>
            <div class="circular-sub-form">
                <button class="btn btn-primary" style="font-size:1.5rem;">Submit</button>
            </div>
        </form>
    </div>
</section>

</body>



<script>
    function openNav() {
        document.getElementById("left-mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("left-mySidenav").style.width = "0";
    }
</script>

</html>