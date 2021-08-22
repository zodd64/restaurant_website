<?php
session_start();

if(!isset($_SESSION['username'])){
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
    <link rel="stylesheet" href="/styles/reservation.css">
    <title>Reservation</title>
</head>

<body class="home">
    <div id="main-wrap">
	<?php 
	include('header.php'); 
	?>
        <div class="main">
            <span class="space"></span>
            <div class="contact_text"><h1>BOOK A TABLE</h1></div>
            <div class="contact_form">
                <form action="/scripts/do_reservation.php" method="post">             
              
                    <label for="rdate">Date*</label>
                    <input type="date" id="rdate" name="rdate" required>

                    <label for="rtime">Time*</label>
                    <select id="rtime" name="rtime" required>
                        <option value="12:00">12:00 - 14:00</option>
                        <option value="14:00">14:00 - 16:00</option>
                        <option value="16:00">16:00 - 18:00</option>
                        <option value="18:00">18:00 - 20:00</option>
                        <option value="20:00">20:00 - 22:00</option>
                        <option value="22:00">22:00 - 24:00</option>
                    </select>
              
                    <label for="rtable">Table*</label>
                    <select id="rtable" name="rtable" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>

                    <label for="ppl">People*</label>
                    <select id="ppl" name="ppl" required>
                        <option value="1-2">1-2</option>
                        <option value="3-4">3-4</option>
                        <option value="5-6">5-6</option>
                        <option value="7+">7+</option>
                    </select>
                    
                    <label for="tel">Contact*</label>
                    <input type="text" id="tel" name="tel" placeholder="Your telephone.." required>
              
                    <label for="instructions">Special instructions</label>
                    <textarea id="subject" name="instructions" placeholder="Type special request.." style="height:200px"></textarea>
                    <input type="submit" value="Submit">
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