<?php include_once "header.php"; ?>
<?php include_once "./php/signup.php"; ?>


<body>
    <div class="wrapper">
        <section class="form">
            <header>ImVidhyarthi Chat
                <img src="/Title_bar_logo/Title_bar_logo.png" alt="Hello Chat">
            </header>
            <form action="#">
                <div class="error-txt">This is an error message</div>
                <div class="name-details">
                    <div class="field">
                        <label for="name">First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field">
                        <label for="name">Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                    <div class="field">
                        <label for="Email">Email <Address></Address></label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="field">
                        <label for="Password">Password</label>
                        <input type="password" name="password" placeholder="Enter Password"required>
                        <i class="far fa-eye" id="togglePassword"></i>
                    </div><div class="field">
                        <label for="image">Select Image</label>
                        <input type="file" name="image">
                    </div>
                    <div class="field">
                        <input id="input-btn" type="submit" value="Continue to Chat">
                    </div>
                </div>
            </form>
            <div class="link">
                Already signed up? <a href="/login.html">Login now</a>
            </div>
        </section>
    </div>

    <script src="/javaScript/signup.js"></script>
    <script src="/javaScript/pass-show-hide.js"></script>

</body>
</html>