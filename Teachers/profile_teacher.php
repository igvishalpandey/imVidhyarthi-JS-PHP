<?php include_once "feature-header.php"; ?>
<?php include_once "config.php";
$sql = "SELECT * FROM teachers;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>

        <body>
            <section id="profile-feature">
                <div id="profile-features-box">
                    <div id="profile-picture">
                        <img src="<?php echo "profile_pictures/". $row['img'] ?>" alt="profile-picture">
                        <div class="container">
                            <button type="button" class="btn" id="change-profile-btn" data-bs-toggle="modal" data-bs-target="#myModal">Update Profile Picture</button>
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update Profile Picture</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <input type="file" name="profile-picture" id="" accept="image/*">
                                                <input type="hidden" name="profile-picture-old" value="<?php echo $row['img'] ?>">
                                                <br>
                                                <div class="modal-footer">
                                                    <button class="btn" style="font-size: 1.2rem; border: 1px solid rgb(8, 143, 143); background-color: rgb(8, 143, 143); color: white;" name="update-profile-picture" >Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="profile-details">
                        <div id="profile-name">
                            <h2><span><?php echo "$row[fname] $row[lname]" ?></span></h2>
                        </div>
                        
                        <div class="sub-profile-details">
                            <h5>Email: </h5>
                            <p><span><?php echo "$row[email]" ?></span></p>
                        </div>
                        
                    </div>
                </div>
            </section>
    <?php }
} ?>
        </body>

        <script>
            function openNav() {
                document.getElementById("left-mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("left-mySidenav").style.width = "0";
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        </html>

<?php
if(isset($_POST["update-profile-picture"])){
    $new_img= $_FILES['profile-picture']['name'];
    $old_img= $_POST['profile-picture-old'];
    $email= $_SESSION['email'];

    if($new_img !=""){
        $update_filename= $new_img;
    }
    else{
        $update_filename= $old_img;
    }

    if(file_exists("profile-pictuers". $_FILES['profile-picture']['name'])){
        $filename= $_FILES['profile-pictures']['name'];
        header('location: profile.php');
    }
    else{
        $query= "UPDATE teachers SET img='$update_filename' WHERE email= '$email';";
        $query_run= mysqli_query($conn, $query);

        if($query_run){
            if(($_FILES['profile-picture']['name']) != ""){
                move_uploaded_file($_FILES['profile-picture']['tmp_name'], "profile_pictures/" . $_FILES['profile-picture']['name']);
                unlink("profile_pictures/". $old_img);
            }
            $result= "success";?>
            <script> alert(`Profile Picture Changed!`)</script>
        <?php }
        else{
            $result= "failure";?>
            <script> alert(`Profile Picture Changed!`)</script>

       <?php }
    }
}
?>