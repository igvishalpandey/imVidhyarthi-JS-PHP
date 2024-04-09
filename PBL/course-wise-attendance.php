<?php include_once "feature-header.php"; ?>
<?php
include_once "config.php";
$sno = 1;
$email = $_SESSION['email'];
$year = $_SESSION['year'];
$query1 = "SELECT * FROM subject_details JOIN users where subject_details.email= users.email AND users.email= '$_SESSION[email]';";
$result1 = mysqli_query($conn, $query1) or die("das");
if (mysqli_num_rows($result1) > 0) {
?>

    <body id="feature-attendance-coursewise">
        <section>
            <div id="attendance-head">
                <h1 style="font-size: 2rem;">Coursewise Attendance (<?php echo "$year"; ?>):</h1>
            </div>
            <div>
                <table class="course-wise-attendance">
                    <tr>
                        <th class="course-wise-table-head">Sno.</th>
                        <th class="course-wise-table-head">Subject</th>
                        <th class="course-wise-table-head">Subject Code</th>
                        <th class="course-wise-table-head">Attended</th>
                        <th class="course-wise-table-head">Delivered</th>

                        <th class="course-wise-table-head">Attendance</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_assoc($result1)) {
                        $subject = $row['subject'];
                        $query2 = "SELECT * FROM attendance WHERE subject='$subject' && email='$email' && year= '$year';";
                        $result2 = mysqli_query($conn, $query2);
                        if (mysqli_num_rows($result2) > 0) {
                            while ($row1 = mysqli_fetch_assoc($result2)) {
                                $attended = $row1['attended'];
                                $deliver = $row1['delivered'];
                                $attendance = $attended / $deliver;
                                $per_attendance = $attendance * 100;
                    ?>
                                <tr>
                                    <td class="course-wise-table-data"><?php echo "$sno"; ?></td>
                                    <td class="course-wise-table-data"><?php echo "$subject"; ?></td>
                                    <td class="course-wise-table-data"><?php echo "$row1[subject_code]"; ?></td>
                                    <td class="course-wise-table-data"><?php echo "$attended"; ?></td>
                                    <td class="course-wise-table-data"><?php echo "$deliver"; ?></td>
                                    <td class="course-wise-table-data"><?php echo "$per_attendance"; ?></td>
                                </tr>
                <?php
                                $sno++;
                            }
                        }
                    }
                }
                ?>
                </table>
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