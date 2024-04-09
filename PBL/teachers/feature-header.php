<?php include_once "config.php";
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImVidyarthi | New World Of Student</title>
    <link rel="icon" type="image/x-icon" href="../logo.png">

    <!-- css link  -->
    <!-- <link rel="stylesheet" href="feature-style.css"> -->
    <style>
        /* font-import */
        @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,400;1,200&display=swap');


        /* css reset  */
        * {
            margin: 0%;
            padding: 0%;
        }

        /* utlity class  */
        .scroller-y {
            overflow: hidden;
            height: 450px;
            overflow-y: scroll;
            scrollbar-width: 100px;
            scrollbar-color: rgb(8, 143, 143) white;
            padding-right: 2rem;
            margin-top: 0rem;
        }

        /* navbar css */
        #navbar {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            font-family: 'Roboto Condensed', sans-serif;
            background-color: rgb(242, 233, 242);
            padding: 0rem 4rem;
        }


        #navbar:hover {
            background-color: whitesmoke;
        }

        #logo-txt {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        #logo-txt a {
            cursor: default;
            font-family: 'Satisfy', cursive;
            text-decoration: none;
            color: black;
            font-size: 20px;
        }

        #nav-logo {
            height: 75px;
        }

        .navbar-list-items {
            font-size: 1.5rem;
            padding-left: 8px;
        }

        /*/* left-navbar */
        .left-sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .left-sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .left-sidenav a:hover {
            color: #f1f1f1;
        }

        .left-sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .left-sidenav {
                padding-top: 15px;
            }

            .left-sidenav a {
                font-size: 18px;
            }
        }

        /*right navbar/**/
        .right-dropdown-menu {
            width: 200px;
        }

        .dropdown-details {
            font-size: 1.4rem;
        }

        .right-dropdown-profile-information-solid-color {
            padding-left: 10px;
            color: grey;
            font-size: 1.2rem;
        }

        /* profile css */

        #profile-feature {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: 600px;
            background: none;
        }

        #profile-feature::before {
            content: "";
            position: absolute;
            background: url(profile_bg.jpg) no-repeat center center/cover;
            height: 680px;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: -1;
            opacity: 0.89;
            filter: blur(2px);
        }

        #profile-features-box {
            border: 2px solid black;
            border-radius: 9px;
            box-shadow: 5px 10px rgb(8, 143, 143);
            width: 1000px;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #profile-name h2 {
            font-size: 3rem;
        }


        #profile-picture {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Open Sans', sans-serif;
            font-size: 1.2rem;
            padding-left: 1rem;
        }

        #profile-picture .container {
            display: flex;
            justify-content: center;
        }

        #change-profile-btn {
            text-decoration: none;
            font-size: 1.2rem;
            border: 1px solid rgb(8, 143, 143);
            background-color: rgb(8, 143, 143);
            color: white;
        }

        #change-profile-btn:hover {
            background-color: black;
            color: white;
        }

        #profile-picture img {
            height: 300px;
            width: 350px;
            margin: 1rem 1rem;
            padding: 0.5rem 0.5rem;
            border: 2px solid black;
            border-radius: 9px;
        }

        #profile-details {
            display: grid;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem 2rem;
            font-family: 'Open Sans', sans-serif;
            font-weight: bold;
            font-size: 1.4rem;
        }

        .sub-profile-details {
            padding: 0.2rem 1rem;
            display: flex;
            align-items: center;
        }

        .sub-profile-details h5 {
            padding-top: 0.5rem;
            padding-right: 2rem;
            color: slategrey;
        }


        /* circular css */

        #circular-section {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: 600px;
            background: none;
        }

        #circular-section::before {
            content: "";
            position: absolute;
            background: url(circular_bg.jpg) no-repeat center center/cover;
            height: 680px;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: -1;
            opacity: 0.89;
            filter: blur(2px);
        }

        #circular-section-box {
            border: 2px solid black;
            border-radius: 9px;
            box-shadow: 5px 10px rgb(8, 143, 143);
            width: 1000px;
            height: 400px;
            display: flex;
            flex-direction: column;
            /* justify-content: center; */
            align-items: center;
        }

        #circular-head {
            font-family: 'Quicksand', sans-serif;
            margin: 2rem 0rem;
        }

        #fetched-circular {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            height: 280px;
            overflow-y: scroll;
            scrollbar-width: 100px;
            scrollbar-color: rgb(8, 143, 143) white;
            padding-right: 2rem;
            margin-top: 0rem;
        }

        .sub-circular {
            margin-bottom: 0.5rem;
            padding: 0.5rem 1rem;
            border-bottom: 1px solid grey;
            border-radius: 2px;
            background-color: rgb(8, 143, 143);
        }

        .sub-circular a {
            text-decoration: none;
            color: white;
            font-family: 'Open Sans', sans-serif;
            font-weight: bold;
        }

        .sub-circular a:hover {
            color: black;
        }

        /* notes-web css */
        .notes-web {
            height: 600px;
            background: none;
        }

        .notes-web::before {
            content: "";
            position: absolute;
            background: url(notes_bg.jpg) no-repeat center center/cover;
            height: 680px;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: -1;
            opacity: 0.89;
            filter: blur(2px);

        }

        .sub-notes-web {
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            color: white;
            margin: 5rem 15rem;
        }

        #notes-dropdown {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }


        #notes-dropdown h1,
        #faculty-notes-link h1 {
            margin: 0.4rem 8rem;
            padding: 0.5rem 1rem;
            font-size: 30px;
            font-family: 'Open Sans', sans-serif;
            border: 2px solid white;
            border-radius: 9px;
            box-shadow: 0 0 128px 0 rgb(80, 16, 141),
                0 32px 64px -48px rgba(0, 0, 0, 0.5);
            background: black;
        }

        #notes-dropdown h1 {
            margin: 1rem 9rem;
        }

        #faculty-notes-link {
            color: white;
            text-decoration: none;
        }

        .sub-notes img {
            height: 400px;
        }

        /* write a notes css */
        #write-note-body {
            background: black;
        }

        #write-note-body section div {
            background: none;
            display: flex;
            flex-direction: column;
        }

        #search-notes {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #search-notes button {
            margin-left: 0.5rem;
        }

        .notes-head {
            font-family: 'Roboto', sans-serif;
            color: white;
            box-shadow: 0 0 128px 0 rgb(80, 16, 141),
                0 32px 64px -48px rgba(0, 0, 0, 0.5);
        }


        .card textarea {
            font-family: 'Source Code Pro', monospace;
        }

        /* draw a note css  */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        .container {
            display: flex;
            width: 100%;
            gap: 10px;
            padding: 10px;
            max-width: 1050px;
        }

        #draw-a-note-body::before {
            content: "";
            position: absolute;
            background: url(notes_bg.jpg) no-repeat center center/cover;
            background-color: black;
            height: 680px;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: -1;
            opacity: 0.89;
            filter: blur(2px);
        }

        section {
            background: #fff;
            border-radius: 7px;
        }

        .tools-board {
            width: 210px;
            padding: 15px 22px 0;
        }

        .tools-board .row {
            margin-bottom: 20px;
        }

        .row .options {
            list-style: none;
            margin: 10px 0 0 5px;
        }

        .row .options .option {
            display: flex;
            cursor: pointer;
            align-items: center;
            margin-bottom: 10px;
        }

        .option:is(:hover, .active) img {
            filter: invert(17%) sepia(90%) saturate(3000%) hue-rotate(900deg) brightness(100%) contrast(100%);
        }

        .option :where(span, label) {
            color: #5A6168;
            cursor: pointer;
            padding-left: 10px;
        }

        .option:is(:hover, .active) :where(span, label) {
            color: #4A98F7;
        }

        .option #fill-color {
            cursor: pointer;
            height: 14px;
            width: 14px;
        }

        #fill-color:checked~label {
            color: #4A98F7;
        }

        .option #size-slider {
            width: 100%;
            height: 5px;
            margin-top: 10px;
        }

        .colors .options {
            display: flex;
            justify-content: space-between;
        }

        .colors .option {
            height: 20px;
            width: 20px;
            border-radius: 50%;
            margin-top: 3px;
            position: relative;
        }

        .colors .option:nth-child(1) {
            background-color: #fff;
            border: 1px solid #bfbfbf;
        }

        .colors .option:nth-child(2) {
            background-color: #000;
        }

        .colors .option:nth-child(3) {
            background-color: #E02020;
        }

        .colors .option:nth-child(4) {
            background-color: #6DD400;
        }

        .colors .option:nth-child(5) {
            background-color: #4A98F7;
        }

        .colors .option.selected::before {
            position: absolute;
            content: "";
            top: 50%;
            left: 50%;
            height: 12px;
            width: 12px;
            background: inherit;
            border-radius: inherit;
            border: 2px solid #fff;
            transform: translate(-50%, -50%);
        }

        .colors .option:first-child.selected::before {
            border-color: #ccc;
        }

        .option #color-picker {
            opacity: 0;
            cursor: pointer;
        }

        .buttons button {
            width: 100%;
            color: #fff;
            border: none;
            outline: none;
            padding: 11px 0;
            font-size: 0.9rem;
            margin-bottom: 13px;
            background: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .buttons .clear-canvas {
            color: #6C757D;
            border: 1px solid #6C757D;
            transition: all 0.3s ease;
        }

        .clear-canvas:hover {
            color: #fff;
            background: #6C757D;
        }

        .buttons .save-img {
            background: #4A98F7;
            border: 1px solid #4A98F7;
        }

        .drawing-board {
            flex: 1;
            overflow: hidden;
        }

        .drawing-board canvas {
            width: 100%;
            height: 100%;
        }

        /* attendance css */
        #feature-attendance {
            background: none;
        }

        #feature-attendance::before {
            content: "";
            position: absolute;
            background: url(attendance_bg.jpg) no-repeat center center/cover;
            height: 680px;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: -1;
            opacity: 0.89;
            filter: blur(2px);
        }

        #attendance-box {
            margin: 2rem 10rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 9px;
            border: 2px solid rgb(8, 143, 143);
            box-shadow: 0 0 128px 0 rgb(178, 136, 218),
                0 32px 64px -48px rgba(70, 70, 70, 0.5);
        }

        #attendance-head h1 {
            font-family: 'Quicksand', sans-serif;
            margin: 2rem 2rem;
            margin-bottom: 0rem;
            padding: 0rem 2rem;
            font-size: 3.5rem;
            color: rgb(8, 143, 143);
        }

        #attendance-form form {
            display: flex;
            flex-direction: row;
            /* justify-content: center; */
            align-items: center;
        }

        .sub-attendance-form {
            display: flex;
            flex-direction: column;
            margin: 1rem 2rem;
            padding: 0rem 2rem;
        }

        .sub-attendance-form label {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 2rem;
            font-weight: 350;
            color: black;
        }

        .sub-attendance-form select {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 2rem;
            background-color: none;
            border: none;
            border-radius: 5px;
            width: 120%;
            border: 2px solid rgb(8, 143, 143);
        }

        #feature-attendance-coursewise {
            background-color: thistle;
        }

        #feature-attendance-coursewise section {
            background: none;
        }

        .course-wise-attendance {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 2rem 14rem;
            padding: 4rem 2rem;
            border: 2px solid rgb(8, 143, 143);
            align-items: center;
            margin-top: 5rem;
        }

        .course-wise-table-head {
            font-size: 2rem;
        }

        .course-wise-table-data {
            font-size: 1.5rem;
        }

        .course-wise-attendance th,
        .course-wise-attendance td {
            border: 2px solid black;
            padding: 0rem 4.9rem;
            padding-right: 4.9rem;
            text-align: center;
            font-family: 'Roboto Condensed', sans-serif;
        }

        /* assignment css */
        #feature-assignment {
            display: flex;
            flex-direction: column;
            background: none;
            margin: 2rem 5rem;
        }

        #feature-assignment::before {
            content: "";
            position: absolute;
            background: url(assignment_bg.jpg) no-repeat center center/cover;
            height: 680px;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: -1;
            opacity: 0.89;
            filter: blur(2px);
        }

        .assignment-header {
            color: white;
            font-family: 'Quicksand', sans-serif;
            font-size: 3.5rem;
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
        }

        .assignment-table {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 2rem 6rem;
            padding: 4rem 6rem;
            align-items: center;
            border: 2px solid white;
        }

        .assignment-table th {
            font-size: 2rem;
        }

        .assignment-table td {
            font-size: 1.5rem;
        }

        .assignment-table th,
        .assignment-table td {
            border: 2px solid black;
            padding: 0rem 4.9rem;
            padding-right: 4.9rem;
            text-align: center;
            font-family: 'Roboto Condensed', sans-serif;
        }

        #upload-assignment-btn {
            text-decoration: none;
            font-size: 1.2rem;
            border: 1px solid #4A98F7;
            background-color: #4A98F7;
            color: white;
        }

        #upload-assignment-btn:hover {
            background-color: black;
            border-color: black;
            color: white;
        }

        .assignment-table td a {
            /* text-decoration: none; */
            color: red;
        }

        .assignment-table td a:hover {
            color: blue;
        }

        .upload-assignment table tr tr {
            padding: 1rem 41rem;
        }

        /* projects css  */
        #feature-projects {
            background: none;
        }

        #feature-projects::before {
            content: "";
            position: absolute;
            background: url(project_bg.jpg) no-repeat center center/cover;
            height: 680px;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: -1;
            opacity: 0.89;
            filter: blur(10px);
        }

        #project-head {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        #project-head h1 {
            font-family: 'Quicksand', sans-serif;
            margin: 2rem 2rem;
            margin-bottom: 0rem;
            padding: 0rem 2rem;
            font-size: 3.5rem;
            color: black;
        }

    </style>

    <!-- css for icons -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    <!-- font links css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Qwitcher+Grypen:wght@700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Qwitcher+Grypen:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&family=Satisfy&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">

    <!-- script for icon -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- script for icon -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- link for including bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <nav id="navbar">

            <div id="left-navbar">
                <div id="left-navbar">
                    <div id="left-mySidenav" class="left-sidenav">
                        <a href="javascript:void(0)" class="left-closebtn" onclick="closeNav()">&times;</a>
                        <a href="profile.php">Profile</a>
                        <a href="circular.php
                        ">Circular</a>
                        <a href="assignment.php">Assignments</a>
                        <a href="attendance.php">Attendance</a>
                        <a href="notes.php">Notes</a>
                        <a href="project.php">Projects</a>
                        <a href="#">Faculty</a>
                        <a href="./ChatApp/login.php">Students Care</a>

                    </div>
                    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>
            </div>

            <div id="logo-txt">
                <img src="logo.png" alt="ImVidyarthi-logo" id="nav-logo">
                <h1><a href="ImVidhyarthi.php">ImVidyarthi.in</a></h1>
            </div>

            <div id="right-navbar">
                <div class="dropdown">
                    <span class="btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="profile-icon" style="background-color: none; color:none;">
                        <img src="https://img.icons8.com/doodle/48/000000/name.png" style="background-color: none; color:none;" />
                    </span>
                    <ul class="dropdown-menu right-dropdown-menu">
                        <li class="navbar-list-items">
                            <a class="dropdown-item" href="profile.php">
                                <span><?php echo $_SESSION['fname'] . " " . $_SESSION['lname'] ?></span></i>
                            </a>
                        </li>
                        <li class="navbar-list-items">
                            <hr>
                        </li>
                        <li class="navbar-list-itmes">
                            <?php
                            $sql = "SELECT rollno, sysid, course FROM students_details JOIN users WHERE students_details.email= users.email;";
                            $result = mysqli_query($conn, $sql) or die("Unsuccessfull query");
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) { ?>

                                    <p class="dropdown-details"><span class="right-dropdown-profile-information-solid-color">System ID: </span><?php echo "$row[sysid]" ?></p>
                                    <p class="dropdown-details"><span class="right-dropdown-profile-information-solid-color">Roll no: </span><?php echo "$row[rollno]" ?></p>
                                    <p class="dropdown-details"><span class="right-dropdown-profile-information-solid-color">Course: </span><?php echo "$row[course]" ?></p>

                            <?php }
                            } ?>
                        </li>
                        <li class="navbar-list-items">
                            <hr>
                        </li>
                        <li class="navbar-list-items"><a class="dropdown-item" href="/features-php/profile.html">Profile</a></li>
                        <li class="navbar-list-items"><a class="dropdown-item" href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>