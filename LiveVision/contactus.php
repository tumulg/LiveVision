<html>
    <head>
        <title>LiveVision</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="contactus.css">
        <link rel="shortcut icon" type="image" href="images/logoO_1.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
        <script src="js/validation.js" defer></script>
    </head>
    <body>
    <div class ="banner">
            <div class="navbar">
                <a href="home.php">
                <div class="logo"><img src="images\logoO_1.png"></div></a>
                <ul>
                    <li><a href="shoplv.php">SHOP</a></li>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="aboutuslv.php">ABOUT US</a></li>
                </ul>
                <a href="profilelv.php">
                <div class="pflogo"><img src="images/gprofile1.png"></div></a>
            </div>
            <div class = "content">
                <div class="wrapper" style="background-color: rgb(22, 22, 22);">
                    <div class="contentlogo" style="align-content: center;">
                        <img src="images/lvlogo_4.png" style="padding-top: 20px;">
                    </div>
                    <div class="text-center mt-5 name">
                        <h5>Contact Us</h5>
                        <?php
                            $Description = "";
                            if(isset($_GET['error']))
                            {
                                $Description = "Please fill the required fields.";
                                echo '<div class = "alert alert-danger">'.$Description.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Description = "Sent Successfully! We will contact you soon.";
                                echo '<div class = "alert alert-success">'.$Description.'</div>';
                            }
                        ?>
                    </div>
                    <form action="process-contactus.php" method="post" id="contactus" class="p-3 mt-3" novalidate>
                        <div class="form-field d-flex align-items-center">
                            <span class="far fa-user"></span>
                            <input type="text" id="name" name="name" placeholder="Name"> 
                        </div>
                        <div class="form-field d-flex align-items-center">
                            <span class="far fa-user"></span>
                            <input type="email" id="email" name="email" placeholder="Email ID"> 
                        </div>
                        <div class="form-field d-flex align-items-center">
                            <span class="far fa-user"></span>
                            <input type="text" id="phno" name="phno" placeholder="Contact Number (optional)"> 
                        </div>
                        <div class="form-field d-flex align-items-center">
                            <span class="far fa-user"></span>
                            <input type="text" id="subject" name="subject" placeholder="Subject"> 
                        </div>
                        <div class="form-field d-flex align-items-center">
                            <span class="far fa-user"></span>
                            <input type="text" id="desc" name="desc" placeholder="Description"> 
                        </div>
                        <button class="btn mt-3" name="btn-send" href="https://youtu.be/BBJa32lCaaY">Send</button>
                    </form>
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