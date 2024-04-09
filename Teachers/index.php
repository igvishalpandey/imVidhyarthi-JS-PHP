<?php include_once 'header.php' ?>

<body>
    <!-- navbar html -->
    <header>
        <nav id="navbar">
            <div id="logo-txt">
                <img src="logo.png" alt="logo" id="nav-logo">
                <h1><a href="index.php">ImVidhyarthi.in <h6>For Teachers</h6></a></h1>
            </div>
            <div>
                <ul id="right-navbar">
                    <li><a href="login_teachers.php" class="login-system-links">Login</a></li>
                    <li><a href="signup_teacher.php" class="login-system-links">SignUp</a></li>                    
                </ul>
            </div>
        </nav>
    </header>

    <!-- Home section -->
    <section id="home">
        <div id="home-txt">
            <h1>ImVidhyarthi.in </h1>
            <h3><span id="typing"></span></h3>
            <div id="home-links">
                <ul>
                    <li><a href="login_teachers.php" class="login-system-links">LogIn</a></li>
                    <li><a href="signup_teacher.php" class="login-system-links">SignUp</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- importing javaScript -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed("#typing", {
            strings: ["Connecting you to world of Students..", "Connecting you to world of you.."],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true
        })
    </script>
</body>

</html>