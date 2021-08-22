<div class="banner">
    <div class="flex">
        <div class="logo_container">
            <a href="index.php">
                <div id="logo"><img src="images/logo.jpg"></div>
            </a>
        </div>
        <div class="navigation">
            <div id="nav_item">
			    <?php
				    if(isset($_SESSION['admin'])){
                        echo('<a href="news2.php">NEWS</a>');
				    }
				    else{
				        echo('<a href="news.php">NEWS</a>');
				    }
			    ?>                
            </div>
            <div id="nav_item">
                <a href="gallery.php">GALLERY</a>
            </div>
            <div id="nav_item">
                <a href="contact.php">CONTACT</a>
            </div>
            <div id="nav_item">
                <a href="about.php">ABOUT</a>
            </div>
            <div id="reservation_item_container">
                <div id="reservation_item">
			        <?php
				        if(isset($_SESSION['username'])){
                            echo('<a href="reservation.php">MAKE A RESERVATION</a>');
				        }
				        else{
				            echo('<a href="login.php">MAKE A RESERVATION</a>');
				        }
			        ?>
                </div>
            </div>
        </div>
    </div>
    <div id="login_item_container">
        <div id="login_item">
			<?php
				if(isset($_SESSION['username'])){
                    echo('<a href="/scripts/logout.php">LOGOUT</a>');
				}
				else{
				    echo('<a href="login.php">SIGN IN</a>');
				}
			?>            
            
            
        </div>
    </div>
    <div id="clearer"></div>
</div>