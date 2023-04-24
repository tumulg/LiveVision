<?php

session_start();

if(isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/LVDatabase/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>
<html>
    <head>
        <title>LiveVision</title>
        <link rel="stylesheet" href="profilelv.css">
        <link rel="shortcut icon" type="image" href="images/logoO_1.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    </head>
    <body>
        <div class ="bg">
            <div class="navbar" style="background-color: black;">
                <a href="home.php">
                <div class="logo"><img src="images/logoOgrey_1.png"></div></a>
            </div>
            <div class = "content">
                <div class="wrapper" style="background-color: rgb(22, 22, 22);">
                    <div class="contentlogo" style="align-content: center;">
                        <img src="images/lvlogo_4.png" style="padding-top: 20px;">
                    </div>
                    <?php if (isset($_SESSION["user_id"])): ?>
                        <div class="text-center mt-5 name">
                        <div class="mb-1">
                            <h5>Welcome to LiveVision</h5>
                            <h6>Hello <?= htmlspecialchars($user["name"]) ?>!
                            You are logged in successfully.</h6>
                          </div>
                        </div>
                        <form class="p-3 mt-3">
                            <button class="btn mt-3" formaction="logout.php">Logout</button>
                        </form>
                    <?php else: ?>
                        <div class="text-center mt-5 name">
                            <div class="mb-1">
                                <h5>Welcome to LiveVision</h5>
                            </div>
                        </div>
                        <form class="p-3 mt-3">
                            <button class="btn mt-3" formaction="register.php">Register</button>
                            <button class="btn mt-3" formaction="login.php">Login</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <footer style="background-image: url(images/footer_2.jpg); width: 100%; height: 12%; padding: 10px 0px;">
            <div class="footcontent">
                <li><a href="aboutuslv.php" style="padding-left: 280px; padding-top: 15px; color: black;">About Us</a></li>
                <li><a href="terms.php" style="padding-left: 290px; padding-top: 15px;">Terms and Conditions</a></li>
                <li><a href="contactus.php" style="padding-left: 300px; padding-top: 15px;">Contact Us</a></li>
                <li><a style="padding-left: 965px; padding-top: 15px; color: black">© 2023 LiveVision Company. All rights reserved.</a></li>
            </div>
        </footer>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>