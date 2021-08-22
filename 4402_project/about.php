<?php
session_start();
?>
<html>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<head>
    <link rel="stylesheet" href="/styles/uni.css">
    <link rel="stylesheet" href="/styles/about.css">
    <title>4402 webpage</title>
</head>

<body class="home">
    <div id="main-wrap">
	<?php 
	include('header.php'); 
	?>
        <div class="main">
            <div class="about_header_text"> <h1>ABOUT US</h1><br></div>
            <div class="about_text">             
                <p>Our Asian fusion restaurants are equipped with the<br>
                    best chefs New York City has to offer.</p><br><br><br>
                <p>In the 16 years we have been in the business we<br>  
                    have amassed a total of 5 michelin stars for our<br> 
                    finest dishes. Dishes you can try for yourself <br>
                    and see if they live up to their name.</p><br><br><br>
                <p>You can find us in our main restaurant at South<br>
                    Lamar or you come by our Anderson Mill department.</p><br><br><br>
                <p>Feel free to make a reservation through our <br>
                    application.</p>
                
            </div>
            <div class="welcome_image_container">
                <img src="images/salting_edamame.jpg">
            </div>
            <div id="clearer"></div>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>