<?php include_once "feature-header.php"; ?>
<?php include_once "config.php";
$sql = "SELECT * FROM circular;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) { ?>

    <body>
        <section id="circular-section">
            <div id="circular-section-box">
                <div id="circular-head">
                    <h1>Circular</h1>
                    <hr>
                </div>
                <div id="fetched-circular" style="width: 910px;">
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="sub-circular" style="font-size: 2rem;"><a href="<?php echo "circular/" . $row['pdf_file'] ?>" style="text-decoration: none;"><span class="cir-title"><?php echo "$row[title]" ?></span></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>
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