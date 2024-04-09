<?php include_once 'header.php' ?>
<?php
require_once "config.php";

$fname = $lname = $email = $password = $confirm_password = $contact = "";

$email_error = $password_error = $confirm_password_error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $image= $_FILES['profile-picture']['name'];

    if (empty(trim($_POST['email']))) {
        $email_error = "use valid email";
    } else {
        $sql = "SELECT email FROM teachers WHERE email= ?";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = trim($_POST['email']);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_error = "Email already exits";
                } else {
                    $email = trim($_POST['email']);
                }
            } else {
                echo "something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


    if (empty(trim($_POST['password']))) {
        $password_error = "Password cannot be blank";
    } elseif (strlen(trim($_POST['password'])) < 5) {
        $password_error = "Password should be more than 5 characters";
    } else {
        $password = trim($_POST['password']);
    }

    if (trim($_POST['password']) != trim($_POST['confirm-password'])) {
        $confirm_password_error = "Passwords do not match!";
    }

    if (empty($email_error) && empty($password_error) && empty($confirm_password_error)) {
        $sql = "INSERT INTO teachers (fname, lname, email, pwd, c_pwd, contact, img) VALUES (?,?,?,?,?,?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssssss", $param_fname, $param_lname, $param_email, $param_password, $param_c_password, $param_contact, $param_img);

            $param_fname = $fname;
            $param_lname = $lname;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_c_password = password_hash($confirm_password, PASSWORD_DEFAULT);
            $param_contact = $contact;
            $param_img=$image;

            if (mysqli_stmt_execute($stmt)) {    
                header("location: login.php");
                if (isset($_FILES['profile-picture'])) {
                    $file_name = $_FILES['profile-picture']['name'];
                    $file_size = $_FILES['profile-picture']['size'];
                    $file_tmp = $_FILES['profile-picture']['tmp_name'];
                    $file_type = $_FILES['profile-picture']['type'];
                    move_uploaded_file($file_tmp, "profile_pictures/" . $file_name);
                }
            } else {
                echo "Something went wrong..";
            }
        }
        mysqli_stmt_close($stmt);
    }

    mysqli_close($conn);
}
?>
<!-- <?php
if (isset($_FILES['profile-picture'])) {
    $file_name = $_FILES['profile-picture']['name'];
    $file_size = $_FILES['profile-picture']['size'];
    $file_tmp = $_FILES['profile-picture']['tmp_name'];
    $file_type = $_FILES['profile-picture']['type'];
    move_uploaded_file($file_tmp, "profile_pictures/" . $file_name);
}
?> -->

<body>
    <form action="" method="POST" id="signup-form" class="form" enctype="multipart/form-data">
        <div id="logo">
            <img src="logo.png" alt="logo" class="form-img">
        </div>
        <div class="sub-signup-form">
            <div id="form-name-section">
                <div class="form-inputs">
                    <label for="fname" name="fname">First Name</label>
                    <input type="text" name="fname" id="fname" maxlength="55" placeholder="First Name" required>
                </div>
                <div class="form-inputs">
                    <label for="lname" name="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" maxlength="55" placeholder="Last Name" required>
                </div>
            </div>
            <div class="form-inputs">
                <label for="email" name="email">Email</label>
                <input type="email" name="email" id="email" maxlength="55" placeholder="Email" required>
            </div>
            <div class="form-inputs">
                <label for="password" name="password">Password</label>
                <input type="password" name="password" id="pasword" placeholder="Password" required>
            </div>
            <div class="form-inputs">
                <label for="password" name="confirm-password">Confirm Password</label>
                <input type="password" name="confirm-password" id="confirm-pasword" placeholder="Confirm Password" required>
            </div>
            <div class="form-inputs">
                <label for="contact-no." name="contact">Phone no.</label>
                <input type="tel" name="contact" id="Contact-no" placeholder="Phone Number" maxlength="10">
            </div>

            <div class="form-inputs">
                <label for="image" name="image">Select Image</label>
            </div>
            <input type="file" name="profile-picture" id="profile-img" style="padding-left: 1rem;" accept="image/*">


            <div class="form-inputs">
                <button class="button-sumbit" name="sumbit">Sign Up</button>
            </div>
        </div>
    </form>
</body>

