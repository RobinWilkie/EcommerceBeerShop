<?php
   include('db.php');
    
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // make connection to the database
        $conn = new mysqli($servername, $username, $password, $db);
        
        //check connection
    if($conn->connect_error){
        die("connection failed: " . $conn->connect_error); 
    }
        echo "Connected successfully";
        
        //username and password
        $myusername = mysqli_real_escape_string($conn, $_POST['username']);
        $mypassword = mysqli_real_escape_string($conn, $_POST['password']);
        $repeatpassword = mysqli_real_escape_string($conn, $_POST['repeatpassword']);
        
        $sql = "UPDATE $table SET password = '$repeatpassword' WHERE firstname= '$myusername'";
        
        if ($conn->query($sql) === TRUE) {
        echo " Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
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
        <meta charset="utf-8">
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

        <div id="passwordWrap">
            <div id="forgotten">
                <h1>FORGOTTEN PASSWORD?</h1>
                <h2>Change it here</h2>
            </div>
            <!-- form to change password -->
            <div id="passwordForm">
                <form id="passwordForm" action="" method="post">
                    <label for="username">Enter First Name</label>
                    <input type="text" name="username" placeholder="Enter your first name" required>
                    <label for="password">Change password</label>
                    <input type="password" name="password" placeholder="Enter your new password" required>
                    <label for="repeatpassword">Retype password</label>
                    <input type="password" name="repeatpassword" placeholder="Retype password" required>
                    <button class="hvr-ripple-out" type="submit">change password</button>
                </form>
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