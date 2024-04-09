<?php include_once 'header.php'; ?>
<?php
session_start();
// $_SESSION['email']= $_POST['email'];

if (isset($_SESSION['email'])) {
    header("location: ImVidhyarthi.php");
    exit;
}
require_once "config.php";

$email = $password = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST['email'])) || empty(trim($_POST['password']))) {
        $err = "Please enter username & password";
    } else {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
    }


    if (empty($error)) {
        $sql = "SELECT id, fname, lname, email, pwd, contact, img FROM users WHERE email= ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_email);
        $param_email = $email;

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $fname, $lname, $email, $hashed_password, $contact, $img);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        $_SESSION["email"] = $email;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;
                        $_SESSION['fname'] = $fname;
                        $_SESSION['lname'] = $lname;
                        $_SESSION['contact'] = $contact;
                        $_SESSION['img'] = $img;

                        header("location: ImVidhyarthi.php");
                    }
                }
            }
        }
    }
}


?>

<body>
    <form action="" method="post" id="login-form" class="form">
        <div id="logo">
            <img src="logo.png" alt="logo" class="form-img">
        </div>
        <div class="sub-signup-form sub-loginform">
            <div class="form-inputs">
                <label for="email" name="email">Email</label>
                <input type="email" name="email" id="email" maxlength="55" placeholder="Email" required>
            </div>
            <div class="form-inputs">
                <label for="password" name="password">Password</label>
                <input type="password" name="password" id="pasword" placeholder="Password" required>
            </div>
            <div class="form-inputs">
                <button class="button-sumbit" value="sumbit">Log In</button>
            </div>
        </div>
    </form>

</body>