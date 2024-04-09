<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}

?>

<?php include_once 'config.php'; ?>

<?php include_once 'ImVidhyarthi-teacher-header.php'; ?>

    <section id="content-section">
        <h4>WELCOME <span>VISHAL</span></h4>
        <h1>We manage everything for you</h1>
        <p>Now access all your Assignments, Attendance and Projects easily
        </p>
        <a href="#features">Let's Go</a>
    </section>

    <section id="features">
        <div class="sub-feature">
            <a href="profile_teacher.php">
                <img src="Profile.webp" alt="Profile-logo">
                <h5 class="sub-feature-head">Profile</h5>
            </a>
        </div>
        <div class="sub-feature">
            <a href="circular_teacher.php">
                <img src="Circular.png" alt="Circular-logo">
                <h5 class="sub-feature-head">Circular</h5>
            </a>
        </div>
        <div class="sub-feature">
            <a href="attendance.php">
                <img src="Attendance.png" alt="Faculty-logo" style="padding-left: 15px;">
                <h5 class="sub-feature-head">Attendance</h5>
            </a>
        </div>
        <div class="sub-feature">
            <a href="assignment_teacher.php">
                <img src="Assignments.png" alt="Assignments-logo" style="padding-left: 15px;">
                <h5 class="sub-feature-head">Assignments</h5>
            </a>
        </div>
        <div class="sub-feature">
            <a href="notes_teacher.php">
                <img src="Notes.png" alt="Notes-logo">
                <h5 class="sub-feature-head">Notes</h5>
            </a>
        </div>
        </div>
        <div class="sub-feature">
            <a href="./ChatApp/login.php">
                <img src="Students_care.png" alt="Students_care-logo">
                <h5 class="sub-feature-head">Students care</h5>
            </a>
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