<?php
session_start();
?>
<html>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<head>
    <link rel="stylesheet" href="/styles/uni.css">
    <link rel="stylesheet" href="/styles/news.css">
    <title>News</title>
</head>

<body class="home">
    <div id="main-wrap">
	<?php 
	include('header.php'); 
	?>
        <div class="main">
            <span class="space"></span>
            <div class="news_text"><h1>NEWS</h1></div>
            <div class="news_container">
                <div id="news_item"></div>
                <script>
                    fetch('/scripts/results.json')
                        .then(function (response) {
                            return response.json();
                        })
                        .then(function (data) {
                            appendData(data);
                        })
                        .catch(function (err) {
                            console.log('error: ' + err);
                        });
                    function appendData(data) {
                        var mainContainer = document.getElementById("news_item");
                        for (var i = 0; i < data.length; i++) {
                            var div = document.createElement("div");
                            div.innerHTML = data[i].ndate + " : " + data[i].ntime +"<br><br>"+ data[i].ntitle + "<br><br>" + data[i].ndesc + "<br><br><br>";
                            mainContainer.appendChild(div);
                        }
                    }
                </script>
            </div>
            
            <span class="space"></span>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>