 <?php include_once "feature-header.php"; ?>
 <?php
    include_once "config.php";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $project_name = $_POST['project_name'];
        $related = $_POST['related'];
        $started = $_POST['started'];
        $finished = $_POST['finished'];
        $project_link = $_POST['project-link'];
        $email = $_POST['email'];
        $sno = 1;

        $sql = "INSERT INTO `project` (`email`, `project`, `related`, `started_on`, `finished_on`, `project_link`) VALUES ('$email', '$project_name', '$related', '$started', '$finished', '$project_link');";

        mysqli_query($conn, $sql);
    }

    ?>

 <section id="feature-projects">
     <div id="project-head">
         <h1>Projects:</h1>
         <div id="project-insert" style="margin: 2rem 2rem;">
             <div class="container">
                 <button type="button" class="btn" id="upload-assignment-btn" data-bs-toggle="modal" data-bs-target="#myModal">Add Project</button>
                 <div class="modal" id="myModal">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title">Add Project</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                             </div>;
                             <div class="modal-body">
                                 <form action="" method="post">
                                     <input class="form-control form-control-lg" type="text" placeholder="Project" name="project_name" aria-label=".form-control-lg example" require>
                                     <br>
                                     <input class="form-control" type="text" placeholder="Related to" name="related" aria-label="default input example" require>
                                     <br>
                                     <input class="form-control form-control-sm" type="text" name="started" placeholder="Started On" aria-label=".form-control-lg example" require>
                                     <br>
                                     <input class="form-control form-control-sm" type="text" name="finished" placeholder="Finished On" aria-label=".form-control-lg example" require>
                                     <br>
                                     <input class="form-control form-control-sm" type="text" name="project-link" placeholder="Project Link" aria-label=".form-control-lg example" require>
                                     <br>
                                     <input class="form-control form-control-sm" type="hidden" name="email" aria-label=".form-control-lg example" value=<?php echo $_SESSION['email']; ?>>
                                     <br>
                                     <div class="modal-footer">
                                         <button class="btn" style="font-size: 1.2rem; border: 1px solid rgb(8, 143, 143); background-color: rgb(8, 143, 143); color: white;" name="update-profile-picture">Add</button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="assignment-table ">
         <?php
            $query = "SELECT * FROM project where email= '$_SESSION[email] ;";
            $result = mysqli_query($conn, $query);
            if($result){
            if (mysqli_num_rows($result) > 0) {
            ?>
             <table>
                 <tr style="background-color: aqua;">
                     <th>Sno.</th>
                     <th>Project</th>
                     <th>Related to</th>
                     <th>Started On</th>
                     <th>Finished On</th>
                     <th>Project Link</th>
                 </tr>
                 <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                     <tr style="background-color: grey;">
                         <td><?php echo "$sno"; ?></td>
                         <td><?php echo "$row[project]"; ?></td>
                         <td><?php echo "$row[related]"; ?></td>
                         <td><?php echo "$row[started_on]"; ?></td>
                         <td><?php echo "$row[finished_on]"; ?></td>
                         <td><?php echo "$row[project_link]"; ?></td>
                     </tr>
                 <?php $sno++; }
                } }else { ?>
                 <div class="alert alert-danger assignment-header" style="font-size:2rem;" role="alert">
                     No Project Found!
                 </div>
             <?php } ?>
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