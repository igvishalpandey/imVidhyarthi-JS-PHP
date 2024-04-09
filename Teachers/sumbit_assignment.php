<?php include_once "feature-header.php"; ?>
<?php 
include_once "config.php";
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $file_name= $_FILES['assignment-file']['name'];
        $sql= "INSERT INTO assignment ('$file_name.'pdf'') VALUES ('$sumbit_file.pdf') WHERE assginemnt_title= '$row[assignment_title];'";
        $result2=mysqli_query($conn, $sql);
        if($result2){
            if (isset($_FILES['assignment-file'])) {
                $file_size = $_FILES['assignment-file']['size'];
                $file_tmp = $_FILES['assignment-file']['tmp_name'];
                $file_type = $_FILES['assignment-file']['type'];
                move_uploaded_file($file_tmp, "assignment/sumbitted_assignment" . $file_name);
            }
        }
    }
?>

    <section id="feature-assignment">
        <div class="assignment-header">
            <h1>Assignments: </h1>
        </div>
        <div class="upload-assignment assignment-table">
            <table>
                <tr>
                    <th>Subject: </th>
                    <td><?php echo $_SESSION['subject']?></td>
                </tr>
                <tr>
                    <th>Subject Code: </th>
                    <td><?php echo $_SESSION['subject_code']?></td>
                </tr>
                <tr>
                    <th>Assignment Title: </th>
                    <td><?php echo $_SESSION['assignment_title']?></td>
                </tr>
                <tr>
                    <th>Assignment File: </th>
                    <td><a href=""><?php echo $_SESSION['assignment_file']?></a></td>
                </tr>
                <tr>
                    <th>Status: </th>
                    <td>Uploaded</td>
                </tr>
            </table>
            <div class="mx-5 my-5">
                <h1>Upload Assignment:</h1>
            </div>
                <form action="" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: row; justify-content: space-around;" >
                    <input type="file" name="assignment-file" accept="application/pdf" style="font-size: 1.5rem;">
                    <br>
                    <button class="btn" style="margin-left:2rem; font-size: 1.5rem; border: 1px solid black; background-color:black; color: white;"
                        name="update-assignment-file">Update</button>
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