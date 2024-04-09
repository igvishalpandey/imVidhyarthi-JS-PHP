<?php include_once "feature-header.php"; ?>
<?php
include_once "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file_name = $_FILES['notes-file']['name'];
    $subject = $_POST['subject'];
    $subject_code = $_POST['subject_code'];
    $faculty_name= $_POST['faculty_name'];
    $year= $_POST['year'];
    $course= $_POST['course'];
    $sql = "INSERT INTO `notes` (`subject_name`, `subject_code`, `course`, `year`, `notes_file`, `faculty_name`) VALUES ('$subject', '$subject_code', '$course', '$year', '$file_name', '$faculty_name');";
    $result2 = mysqli_query($conn, $sql);
    if ($result2) { ?>
        <script>
            alert ("Uploaded Successfully!");
        </script>

        <?php if (isset($_FILES['notes-file'])) {
            $file_size = $_FILES['notes-file']['size'];
            $file_tmp = $_FILES['notes-file']['tmp_name'];
            $file_type = $_FILES['notes-file']['type'];
            move_uploaded_file($file_tmp, "notes/" . $file_name);
        }
    } else { ?>
        <script>
            alert ("Unable to upload. Please try again!");
        </script>
<?php }
}
?>

<div class="notes-web">
    <div class="assignment-header my-3 mx-5">
        <h1>Notes</h1>
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
                <input type="text" name="faculty_name" placeholder="Faculty Name" required>
            </div>
            <div class="circular-sub-form">
                <input type="text" name="course" placeholder="Course" required>
            </div>
            <div class="circular-sub-form">
                <input type="text" name="year" placeholder="Year" required>
            </div>
            <div class="circular-sub-form">
                <input type="file" name="notes-file" accept="application/pdf">
            </div>
            <div class="circular-sub-form">
                <button class="btn btn-primary" style="font-size:2rem;">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openNav() {
        document.getElementById("left-mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("left-mySidenav").style.width = "0";
    }
</script>

