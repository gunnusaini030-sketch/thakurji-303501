<?php

include("setting/connection.php");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            /* background-image: url(pic/background.jpg); */
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
        }



        .navbar {
            background-color: #f55656ff;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
        }

        .navbar a {
            float: left;
            display: block;
            font: size 20px;
            font-weight: bold;
            color: white;
            text-align: center;
            padding: 23px 30px;
            text-decoration: none;
        }

        .navbar p {
            float: left;
            display: block;
            font: size 20px;
            font-weight: bold;
            color: white;
            text-align: center;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: blue;
        }

        .navbar .left {
            float: left;
            padding-left: 20px;
        }

        .navbar .left img {
            height: 63px;
            width: 111px;
            float: left;

        }

        .navbar .left p {
            padding-left: 73px;
            text-align: center;

            pp
        }

        .navbar .right {
            float: right;
        }

        .marquee {
            font-size: 60px;
            color: red;

            font-style: bold;
            margin-top: 80px;
        }

        .profile {
            border: 2px solid black;
            border-radius: 4px;
            display: inline-block;
            float: right;
            margin-top: 68px;
            margin-right: 10px;
            padding-left: 10px;
        }

        .gallery {
            padding: 60px 20px;
            text-align: center;
            background-color: #fff;
        }

        .gallery h2 {
            font-size: 32px;
            margin-bottom: 30px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .gallery-grid img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .footer {
            margin: 0;
            padding: 0;
            margin-top: 480px;
            background: #111;
            color: #f1f1f1;
            /* padding: 40px 0 20px; */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-container {
            width: 100%;
            max-width: 1200px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 40px;
        }

        .footer-column {
            flex: 1 1 200px;
        }

        .footer-column h3 {
            margin-bottom: 20px;
            font-size: 18px;
            color: #ffffff;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #aaa;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-column ul li a:hover {
            color: #fff;
        }

        .social-icons a {
            margin-right: 15px;
            color: #aaa;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #1da1f2;
        }

        .footer-bottom {
            margin-top: 40px;
            text-align: center;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="left">
            <img src="pic/logo.png" alt="">
            <p style="color: yellow; font-size: 19px;">ठाकुर जी सेवा समिति</p>





        </div>
        <div class="right">
            <a href="">Home</a>
            <a href="gallery.php">gallery</a>
            <a href="video_details.php">Videos</a>
            <a href="contact.php">Contact us</a>
            <a href="profile.php"> Profile</a>


        </div>
    </div>
    <marquee behavior="alterlative" direction="left" class="marquee">ठाकुर जी सेवा समिति मोहचिंगपुरा दौसा आपका हार्दिक
        स्वागत करती है</marquee>

         <section class="gallery">
                <h2>committee Mumber</h2>
                <div class="gallery-grid">

                    <?php

                    $result = mysqli_query($conn, "SELECT * FROM mumbers_photos ORDER BY id DESC");
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <img src="mumbers_photo/<?php echo ($row['name']) ?>" alt="" aria-autocomplete="none">
                    <?php } ?>

                    

                </div>

    <footer class="footer">
        <div class="footer-container">

            <div class="footer-column">
                <h3>About Us</h3>
                <p>ठाकुर जी सेवा समिति मोहचिंगपुरा दौसा आपका हार्दिक
                    स्वागत करती है.</p>
            </div>           

                <div class="footer-column">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/share/18zChYFqoy/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/RAMKESH54334145?t=zU5ounGmqICbwG3OS12F3g&s=08"><i
                                class="fab fa-twitter"></i></a>
                        <a
                            href="https://www.instagram.com/mr_rksaini414?igsh=MXZnZjFuZzkyMWlvZw==&utm_source=ig_contact_invite"><i
                                class="fab fa-instagram"></i></a>
                        <a
                            href="https://www.linkedin.com/in/ramkesh-saini-6a3936286?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

        </div>

        <div class="footer-bottom">
            &copy; 2025 Your website. All rights reserved.
        </div>
    </footer>

</body>

</html>