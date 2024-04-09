<?php include_once "feature-header.php"; ?>
<?php
include_once "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $_SESSION['year']=  $_POST['year'];
    $_SESSION['subject']= $_POST['subject'];
    // echo "$_SESSION[subject]";
    if ($_POST['class'] === "class") {?>
        <script>
            window.location = "attendance-faculty.php";
        </script>
    <?php }
    }
?>

<body>
    <section id="feature-attendance">
        <div id="attendance-head">
            <h1>Attendance:</h1>
        </div>
        <div id="attendance-box">
            <div id="attendance-form">
                <form action="" method="POST">
                    <div class="sub-attendance-form">
                        <label for="year">Year:</label>
                        <select name="year" id="attedance-year">
                            <option value="2020-2021">2020-2021</option>
                            <option value="2021-2022">2021-2022</option>
                            <option value="2022-2023">2022-2023</option>
                        </select>
                    </div>
                    <div class="sub-attendance-form">
                        <label for="displaytype">Display Type: </label>
                        <select name="class" id="attedance-display-type">
                            <option value="class">CS-D</option>
                            <option value="class"></option>
                        </select>
                    </div>
                    <div class="sub-attendance-form">
                        <label for="displaytype">Display Type: </label>
                        <select name="subject" id="attedance-display-type">
                            <option value="DAA">DAA</option>
                            <option value="DSA">DSA</option>
                        </select>
                    </div>
                    <div class="sub-attendance-form">
                        <button name="submit" class="btn btn-primary" style="font-size:1.5rem; margin-bottom: 1rem;">Submit</button>
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