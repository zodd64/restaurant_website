<?php
session_start();
?>
<html>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<head>
    <link rel="stylesheet" href="/styles/uni.css">
    <link rel="stylesheet" href="/styles/contact.css">
    <title>Contact us</title>
</head>

<body class="home">
    <div id="main-wrap">
	<?php 
	include('header.php'); 
	?>
        <div class="main">
            <span class="space"></span>
            <div class="contact_text"><h1>CONTACT US</h1></div>
            <div class="contact_form">
                <form action="/scripts/do_contact.php" method="post">             
                  <label for="fname">First Name*</label>
                  <input type="text" id="fname" name="firstname" placeholder="Your first name.." required>
              
                  <label for="lname">Last Name*</label>
                  <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
              
                  <label for="email">Email*</label>
                  <input type="text" id="email" name="email" placeholder="Your email.." required>
              
                  <label for="subject">Subject*</label>
                  <textarea id="subject" name="subject" placeholder="Ask away.." style="height:200px" required></textarea>
              
                  <input type="submit" value="Submit">
                  <label for="feedback" style="color:lime; text-align:center; display:block;">Thank you, we will come back to you as soon as possible.</label>
                </form>
              </div> 
              <span class="space"></span>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>