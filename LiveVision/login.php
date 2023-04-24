<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/LVDatabase/database.php";

    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                    $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($_POST["password"], $user["password_hash"])) {

            session_start();

            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];

            header("Location: profilelv.php");
            exit;
        }
    }

    $is_invalid = true;
}

?>

<html>
    <head>
        <title>LiveVision</title>
        <link rel="stylesheet" href="login.css">
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
                    <div class="text-center mt-5" style = "color: white">
                    <?php if ($is_invalid): ?>
                        <em>Invaid Email ID or Password.</em>
                    <?php endif; ?>
                    </div>
                    <form method = "post" class="p-3 mt-3">
                        <div class="form-field d-flex align-items-center">
                            <span class="far fa-user"></span>
                            <input type="text" name="email" id="email" placeholder="Email ID"
                                    value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"> 
                        </div>
                        <div class="form-field d-flex align-items-center">
                            <span class="fas fa-key"></span>
                            <input type="password" name="password" id="pwd" placeholder="Password">
                        </div>
                        <button class="btn mt-3">Login</button>
                    </form>
                    <div class="text-center fs-8">
                        <a href="forgotpass.php" style="font-size: 15px;">Forget Password?</a> OR <a href="register.php" style="font-size: 15px;">Register Now</a>
                    </div>
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