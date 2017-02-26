<?php
   include('php/session.php');
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Taps Oan Products</title>
        <link rel="stylesheet" href="css/styles.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <header>
            <div id="headerLogo">
                <a href="index.html"><img src="images/logoHead2.png" alt="Taps Aff logo"></a>
            </div>

            <nav>
                <ul class="topnav" id="myTopnav">
                    <li><a href="products.html">PRODUCTS</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="location.html">LOCATION</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="register.html">SIGN UP/SIGN IN</a></li>
                    <li><a href="checkout.html">CHECKOUT</a></li>
                </ul>
            </nav>

            <!-- Hamburger icon for slide out menu -->
            <i class="material-icons" id="hamburger" onclick="openNav()">menu</i>

            <!-- Slide out menu for mobile device view -->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="products.html">PRODUCTS</a>
                <a href="about.html">ABOUT</a>
                <a href="location.html">LOCATION</a>
                <a href="contact.html">CONTACT</a>
                <a href="register.html">SIGN UP/SIGN IN</a>
                <a href="checkout.html">CHECKOUT</a>
            </div>
        </header>

        <div id="productsContainer">
            <div class="productBox">
                <a href="productclydeside.html">
                    <img src="images/beers/clydesidelager.png" alt="image of beer bottle">
                    <p>CLYDESIDE LAGER</p>
                </a>
            </div>
            <div class="productBox">
                <a href="producthalfdayipa.html">
                    <img src="images/beers/halfdayipa.png" alt="image of beer bottle">
                    <p>HALF DAY IPA</p>
                </a>
            </div>
            <div class="productBox">
                <a href="productpartickpilsner.html">
                    <img src="images/beers/partickpilsner.png" alt="image of beer bottle">
                    <p>PARTICK PILSNER</p>
                </a>
            </div>
            <div class="productBox">
                <a href="productsetyoufree.html">
                    <img src="images/beers/setyoufree.png" alt="image of beer bottle">
                    <p>SET YOU FREE</p>
                </a>
            </div>
            <div class="productBox">
                <a href="productstout.html">
                    <img src="images/beers/stout.png" alt="image of beer bottle">
                    <p>TAPS OUT STOUT</p>
                </a>
            </div>
            <div class="productBox">
                <a href="productwheat.html">
                    <img src="images/beers/wheat.png" alt="image of beer bottle">
                    <p>WHEAT YOU LOOKIN' AT?</p>
                </a>
            </div>
        </div>


        <footer>
            <div id="social">
                <a href="https://twitter.com/RobinWilkie"><img src="icons/Twitter_Color.png" alt="social media link to Twitter"></a>
                <a href="https://www.facebook.com/robin.wilkie.73"><img src="icons/Facebook_Color.png" alt="social media link to Facebook"></a>
                <a href="https://www.instagram.com/?hl=en"><img src="icons/Instagram_Color.png" alt="social media link to Instagram"></a>
            </div>

            <div id="copyright">
                <p>&copy; Robin Wilkie</p>
            </div>
        </footer>


        <script src="js/jquery-3.1.1.js"></script>
        <script src="js/functions.js"></script>


    </body>

    </html>