<?php
session_start();
?>
<html>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<head>
    <link rel="stylesheet" href="/styles/uni.css">
    <link rel="stylesheet" href="/styles/index.css">
    <title>Home</title>
</head>

<body>
    <div id="main-wrap">
	<?php 
	include('header.php'); 
	?>
        <div class="main">
            <div class="welcome_image_container">
                <div class="welcome_text">BISHOKU NO YOROKOBI</div>
                <div class="info_text">ASIAN FUSION RESTAURANT</div>
                <img src="images/ramen1.jpg">
            </div>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>