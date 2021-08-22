<?php
session_start();

$currentPage = 'do_login';
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
	        <div class="responseContainer">
	        
	            <div class="response">
	                <span class="space"></span>    
	    	        <?php
				    echo "Welcome back " . $_SESSION['username'];				    
	   	            ?>
                    <span class="space"></span>
	            </div>
	        </div>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>

</body>
</html> 