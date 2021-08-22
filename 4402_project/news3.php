<?php
session_start();

if(!isset($_SESSION['admin'])){
    header('location:news.php');
    die();
}
?>
<html>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<head>
    <link rel="stylesheet" href="/styles/uni.css">
    <link rel="stylesheet" href="/styles/contact.css">
    <title>News</title>
</head>

<body class="home">
    <div id="main-wrap">
	<?php 
	include('header.php'); 
	?>
        <div class="main">
            <span class="space"></span>
            <div class="contact_text"><h1>ADD NEWS</h1></div>
            <div class="contact_form">
                <form action="/scripts/add_news.php" method="post">
                                 
                  <label for="ntitle">Title*</label>
                  <input type="text" id="ntitle" name="ntitle" placeholder="News title.." required>
              
                  <label for="ndesc">Subject*</label>
                  <textarea id="subject" name="ndesc" placeholder="Describe.." style="height:200px" required></textarea>
                  
                  <input type="button" id="news_btn" value="News">
                  &nbsp;
                  <input type="submit" value="Submit">
                  <label for="feedback" style="color:lime; text-align:center; display:block;">News added</label>
                </form>
              </div> 
              <span class="space"></span>
        </div>
    </div>
    <script type="text/javascript">
    document.getElementById("news_btn").onclick = function () {
        location.href = "/news.php";
    };
    </script>

    <?php
    include('footer.php');
    ?>
</body>

</html>

