<?php
session_start();
?>
<html>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <link rel="stylesheet" href="/styles/uni.css">
    <link rel="stylesheet" href="/styles/gallery.css">
    <title>Gallery</title>
</head>

<body class="home">
    <div id="main-wrap">
	<?php 
	include('header.php'); 
	?>
        <div class="main">
            <div class="gallery_text"><h1>GALLERY</h1></div>
            <div class="gallery_wrapper">
                <div class="gallery">
                    <a target="_blank" href="images/gallery1.jpg">
                        <img src="images/gallery1.jpg" width="600" height="400">
                    </a>
                </div>
                <div class="gallery">
                    <a target="_blank" href="images/gallery2.jpg">
                        <img src="images/gallery2.jpg" width="600" height="400">
                    </a>
                </div>
                <div class="gallery">
                    <a target="_blank" href="images/gallery3.jpg">
                        <img src="images/gallery3.jpg" width="600" height="400">
                    </a>
                </div>
                <div class="gallery">
                    <a target="_blank" href="images/gallery4.jpg">
                        <img src="images/gallery4.jpg" width="600" height="400">
                    </a>
                </div>
            </div>
            <div id="clearer"></div>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>