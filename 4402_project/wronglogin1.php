<?php
session_start();

if(isset($_SESSION['username'])){
    header('location:index.php');
    die();
}

?>
<html>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<head>
    <link rel="stylesheet" href="/styles/uni.css">
    <link rel="stylesheet" href="/styles/login.css">
    <title>Sign in</title>
</head>

<body class="home">
    <div id="main-wrap">
        <?php 
	include('header.php'); 
	?>
        <div class="main">
            <span class="space"></span>

            <div class="form_container">
                <div class="btn_container">
                    <div id="btn"></div>
                    <button type="button" class="toggle_btn" onclick="login()">Sign in</button>
                    <button type="button" class="toggle_btn" onclick="register()">Register</button>
                </div>
                <form id="login" class="input_grp" action="/scripts/do_login.php" method="post">
                    <input type="text" class="input_field" id="loginID" placeholder="Username" required name="username">
                    <input type="password" class="input_field" id="loginPWD" placeholder="Password" required name="password">
                    <input type="checkbox" class="check_box">
                    <span>Remember password</span>
                    <button type="submit" class="submit_btn"">Sign in</button>
                    <span class="space2"></span>
                    <label for="feedback">Wrong username</label>
                </form>
                <form id="register" class="input_grp" action="/scripts/do_register.php" method="post">
                    <input type="text" class="input_field" id="regID" placeholder="Username" required name="username">
                    <input type="password" class="input_field" id="regPWD" placeholder="Password" required name="password">
                    <input type="text" class="input_field" id="regFName" placeholder="Name" required name="firstname">
                    <input type="text" class="input_field" id="regLName" placeholder="Surname" required name="lastname">
                    <input type="text" class="input_field" id="regEmail" placeholder="Email" required name="email">
                    <input type="checkbox" class="check_box" required>
                    <span class="terms">I agree on the terms & conditions</span>
                    <button type="submit" class="submit_btn"">Register</button>
                </form>
            </div>
            <span class="space"></span>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-500px";
            y.style.left = "110px";
            z.style.left = "110px";
	
        }

        function login(){
            x.style.left = "110px";
            y.style.left = "650px";
            z.style.left = "0px";
        }
        
    </script>

</body>

</html>

