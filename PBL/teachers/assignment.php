<?php include_once "feature-header.php" ?>
<?php
$count = 1;
include_once "config.php";

$email = $_SESSION['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST['year'];
    $query = "SELECT * FROM assignment WHERE email='$email' && year='$year';";
    $result = mysqli_query($conn, $query);
}
?>

<section id="feature-assignment">
    <div class="assignment-header">
        <h1>Assignments: </h1>
        <h2>
            <form action="" method="post">
                <select name="year" id="year">
                    <option value="2020-2021">2020-2021</option>
                    <option value="2021-2022">2021-2022</option>
                    <option value="2022-2023">2022-2023</option>
                </select>
                <button value="sumbit" name="submit" class="btn btn-primary" style="font-size:1.2rem; margin-bottom: 0.5rem;">Sumbit</button>
            </form>
        </h2>
    </div>
    <?php

    if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="assignment-table scroller-y">
            <table>
                <tr>
                    <th>Sno.</th>
                    <th>Subject</th>
                    <th>Subject Code</th>
                    <th>Assignment Title</th>
                    <th>Assignment File</th>
                    <th>Upload / Update</th>
                    <th>Status</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) {
                    // $_SESSION['subject']=$row['subject_name'];
                    // $_SESSION['subject_code']=$row['subject_code'];
                    // $_SESSION['assignment_title']=$row['assignment_title'];
                    // $_SESSION['assignment_file']=$row['assignment_file'];

                ?>
                    <tr>
                        <td><?php echo "$count";
                            $count++ ?></td>
                        <td><?php echo "$row[subject_name]" ?></td>
                        <td><?php echo "$row[subject_code]" ?></td>
                        <td><?php echo "$row[assignment_title]" ?></td>
                        <td><a href="<?php echo "assignment/" . $row['assignment_file'] ?>">Download</a></td>
                        <td>
                            <div class="container">
                                <button type="button" id="upload-assignment-btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Update Profile Picture</button>
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Upload Assignment</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?php
                                                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                                                    $file_name = $_FILES['assignment-file']['name'];
                                                    $sql = "UPDATE assignment SET sumbitted_file= '$file_name' WHERE assginemnt_title= '$row[assignment_title];'";
                                                    $result2 = mysqli_query($conn, $sql);
                                                    if ($result2) {
                                                        if (isset($_FILES['assignment-file'])) {
                                                            $file_size = $_FILES['assignment-file']['size'];
                                                            $file_tmp = $_FILES['assignment-file']['tmp_name'];
                                                            $file_type = $_FILES['assignment-file']['type'];
                                                            move_uploaded_file($file_tmp, "assignment/sumbitted_assignment" . $file_name);
                                                        }
                                                    }
                                                }
                                                ?>
                                                <form action="" method="GET" enctype="multipart/form-data">
                                                    <input type="file" name="assignment-file" id="" accept="application/pdf">
                                                    <br>
                                                    <div class="modal-footer">
                                                        <button class="btn" style="font-size: 1.2rem; border: 1px solid rgb(8, 143, 143); background-color: rgb(8, 143, 143); color: white;" name="update-assignment-file">Upload Assignment</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </td>
                        <td><span>&#9745;</span> <span>&#9746;</span> </td>
                    </tr>
                <?php
                }
            } else { ?>
                <div class="alert alert-danger assignment-header" style="font-size:2rem;" role="alert">
                    No Assignment Found!
                </div>
            <?php } ?>
            </table>
        </div>
</section>

</body>



<script>
    // function redirect_fn(){
    //     window.location= "sumbit_assignment.php";
    // }
    function openNav() {
        document.getElementById("left-mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("left-mySidenav").style.width = "0";
    }
</script>

</html>