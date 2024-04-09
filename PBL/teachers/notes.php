<?php include_once "feature-header.php"; ?>

<div class="notes-web">
    <div class="sub-notes-web">
        <div class="sub-notes">
            <img src="create-node.png" alt="create a note">
            <div class="btn-group dropend" id="notes-dropdown">
                <h1 type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Create Notes
                </h1>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="draw-a-notes.php" style="font-size:2rem; font-family: 'Open Sans', sans-serif; padding-bottom:10px;">Draw Notes</a></li>
                    <li><a class="dropdown-item" href="write-a-node.php" style="font-size:2rem; font-family: 'Open Sans', sans-serif; padding-bottom:10px;">Write Notes</a></li>
                </ul>
            </div>
        </div>
        <div class="sub-notes">
            <img src="faculty-notes.png" alt="Faculty Notes">
            <a href="#" id="faculty-notes-link">
                <h1>Faculty Notes</h1>
            </a>
        </div>
    </div>

</div>
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