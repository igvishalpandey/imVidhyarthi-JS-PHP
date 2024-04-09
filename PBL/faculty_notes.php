<?php require_once "feature-header.php";
include_once "config.php";
$sql = "SELECT * FROM notes;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) { ?>
    ?>


    <section id="circular-section">
        <div id="circular-section-box">
            <div id="circular-head">
                <h1>Faculty Notes</h1>
                <hr>
            </div>
            <div id="fetched-circular" style="width: 910px;">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="sub-circular" style="font-size: 2rem;"><a href="<?php echo " circular/" . $row['pdf_file'] ?>" style="text-decoration: none;"><span class="cir-title">
                                <div class="sub-circular" style="font-size: 2rem;"><a href="<?php echo "notes/" . $row['notes_file'] ?>" style="text-decoration: none;"><span class="cir-title"><?php echo "$row[notes_file]" ?></span></a>
                            </span></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    </section>