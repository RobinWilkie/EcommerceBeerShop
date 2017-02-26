<?php
   include('session.php');
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Taps Oan Checkout</title>
        <!-- Robin Wilkie -->
        <!-- Taps Aff e-commerce website project -->
        <link rel="stylesheet" href="css/styles.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Taps Aff is an e-commerce website selling craft beer">
    </head>

    <body>
        <header>
            <div id="headerLogo">
                <a href="index.html"><img src="images/logoHead2.png" alt="Taps Aff logo"></a>
            </div>

            <nav>
                <ul class="topnav" id="myTopnav">
                    <li><a href="shop.html">SHOP</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="location.html">LOCATION</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li>|</li>
                    <li><a href="register.php">SIGN UP</a></li>
                    <li><a href="login.php">SIGN IN</a></li>
                </ul>
            </nav>

            <!-- Hamburger icon for slide out menu -->
            <i class="material-icons" id="hamburger" onclick="openNav()">menu</i>

            <!-- Slide out menu for mobile device view -->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="shop.html">SHOP</a>
                <a href="about.html">ABOUT</a>
                <a href="location.html">LOCATION</a>
                <a href="contact.html">CONTACT</a>
                <a href="register.php">SIGN UP</a>
                <a href="login.php">SIGN IN</a>
            </div>
        </header>

        <div class="welcomeWrap">
            <h2>WELCOME</h2>
            <?php
    
    echo "Hello $login_session, You have successfuly logged in";
    
    ?>
                <h3 class="signout"><a class="link" href ="shop.html">Shop</a></h3>
                <p>or</p>
                <h3 class="signout"><a class="link" href ="logout.php">Sign Out</a></h3>

        </div>


        <footer>
            <div id="social">
                <a href="https://twitter.com/RobinWilkie"><img src="icons/Twitter_Color.png" alt="social media link to Twitter"></a>
                <a href="https://www.facebook.com/robin.wilkie.73"><img src="icons/Facebook_Color.png" alt="social media link to Facebook"></a>
                <a href="https://www.instagram.com/?hl=en"><img src="icons/Instagram_Color.png" alt="social media link to Instagram"></a>
            </div>

            <?php
    
    echo "<p>logged in as $login_session <a class='link' href ='php/logout.php'>Sign Out</a></p>";
            
             ?>

                <div id="copyright">
                    <p>&copy; Robin Wilkie</p>
                </div>
        </footer>


        <script src="js/jquery-3.1.1.js"></script>
        <script src="js/functions.js"></script>


    </body>

    </html>