<?php include_once "feature-header.php"; ?>
<?php
include_once "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file_name = $_FILES['circular-file']['name'];
    $title = $_POST['circular_title'];
    $course = $_POST['course'];
    $sql = "INSERT INTO circular (title, pdf_file, course ) VALUES ('$title','$file_name.pdf','$course');";
    $result2 = mysqli_query($conn, $sql);
    if ($result2) { ?>
        <div class="alert alert-primary" role="alert" style="font-size: 1.5rem;">
            Ciruclar Uploaded Successfully!
        </div>

        <?php if (isset($_FILES['circular-file'])) {
            $file_size = $_FILES['circular-file']['size'];
            $file_tmp = $_FILES['circular-file']['tmp_name'];
            $file_type = $_FILES['circular-file']['type'];
            move_uploaded_file($file_tmp, "circular/" . $file_name);
        }
    } else { ?>
        <div class="alert alert-danger" role="alert" style="font-size: 1rem;">
            Unable to upload the circular. Please try again!
        </div>
<?php }
}
?>

<body>
    <section id="circular-section">
        <div id="circular-section-box">
            <div id="circular-head">
                <h1>Circular</h1>
                <hr>
            </div>
            <div id="fetched-circular" style="width: 910px;">
                <form action="" method="POST" enctype="multipart/form-data" id="circular-form">
                    <div class="circular-sub-form">
                        <input type="text" name="circular_title" placeholder="Circular Title" required>
                    </div>
                    <div class="circular-sub-form">
                        <input type="text" name="course" placeholder="Course" required>
                    </div>
                    <div class="circular-sub-form">
                        <input type="file" name="circular-file" accept="application/pdf">
                    </div>
                    <div class="circular-sub-form">
                        <button class="btn btn-primary" style="font-size:1.5rem;">Submit</button>
                    </div>
                </form>
            </div>
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