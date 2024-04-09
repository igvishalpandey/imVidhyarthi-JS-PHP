<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImVidyarthi | New World Of Student</title>
    <link rel="icon" type="image/x-icon" href="logo.png">

    <!-- css -->
    <!-- <link rel="stylesheet" href="main.css"> -->

    <style>
        /* css reset  */
        * {
            margin: 0%;
            padding: 0%;
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
            margin-left: 1rem;
        }

        .right-dropdown-profile-information-solid-color {
            padding-left: 10px;
            color: grey;
            font-size: 1.2rem;
        }


        /* content-section css */
        #content-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgb(242, 233, 242);
            height: 600px;
            top: 100%;
        }

        #content-section h4 {
            font-family: 'Open Sans', sans-serif;
            margin-bottom: 0rem;
        }

        #content-section h1 {
            font-family: 'Lora', serif;
            font-size: 3rem;
            margin-top: 0rem;
        }

        #content-section p {
            font-family: 'Open Sans', sans-serif;
            text-align: center;
        }

        #content-section a {
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            text-decoration: none;
            color: white;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: bold;
            background-color: rgb(8, 143, 143);
            border: 2px solid rgb(8, 143, 143);
        }

        #content-section a:hover {
            background-color: rgb(6, 120, 120);
            border-color: rgb(6, 120, 120);
        }

        /* features-section css */
        #features {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin: 5rem 0rem;
            margin-left: 5rem;
        }

        .sub-feature {
            margin-right: 6.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .sub-feature a {
            text-decoration: none;
            color: black;
            font-size: 1.5rem;
            text-align: center;
        }
        
        .sub-feature-head{
            margin-top: 1rem;
            text-decoration: none;
        }

        .sub-feature-head:hover{
            color: rgb(8, 143, 143);
            text-decoration: none;
        }

        .sub-feature img {
            height: 100px;
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- link for including bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <nav id="navbar">

            <div id="left-navbar">
                <div id="left-navbar">
                    <div id="left-mySidenav" class="left-sidenav">
                        <a href="javascript:void(0)" class="left-closebtn" onclick="closeNav()">&times;</a>
                        <a href="profile_teacher.php">Profile</a>
                        <a href="circular_teacher.php
                        ">Circular</a>
                        <a href="assignment_teacher.php">Assignments</a>
                        <a href="attendance.php">Attendance</a>
                        <a href="notes_teacher.php">Notes</a>
                        <a href="./ChatApp/login.php">Students Care</a>

                    </div>
                    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>
            </div>

            <div id="logo-txt">
                <img src="logo.png" alt="ImVidyarthi-logo" id="nav-logo">
                <h1><a href="ImVidhyarthi-teacher.php">ImVidyarthi.in</a></h1>
            </div>

            <div id="right-navbar">
                <div class="dropdown">
                    <span class="btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="profile-icon" style="background-color: none; color:none;">
                        <img src="https://img.icons8.com/doodle/48/000000/name.png" style="background-color: none; color:none;" />
                    </span>
                    <ul class="dropdown-menu">
                        <li class="navbar-list-items">
                            <a class="dropdown-item" href="profile.php">
                                <span><?php echo $_SESSION['fname'] . " " . $_SESSION['lname'] ?></span></i>
                            </a>
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