<?php

include("setting/connection.php");

if (!$_SESSION['register']) {
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            /* background-image: url(pic/background.jpg); */
            background-color: #f3c9c9ff;
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


        .profile-bar {
            display: inline-block;
            margin-top: 133px;
            margin-left: 500px;
            align-items: center;
            background: rgba(255, 255, 255, 0.9);
            padding: 32px 36px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            width: 18%;
            max-width: 850px;
            justify-content: flex-start;
            backdrop-filter: blur(8px);
        }

        .profile-bar img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
            border: 3px solid #4f46e5;
        }

        .profile-info {
            display: flex;
            flex-direction: column;
        }

        .profile-info h2 {
            margin: 0;
            font-size: 22px;
            color: #222;
        }

        .profile-info p {
            margin: 4px 0;
            color: #444;
            font-size: 15px;
        }

        .profile-info p span {
            font-weight: bold;
            color: #4f46e5;
        }

        .logout {
            background-color: red;
            margin-top: 20px;
            margin-left: 79px;
            margin-bottom: 23px;
            border-radius: 4px;
            text-align: center;

        }

        .logout a {
            text-decoration: none;
            background-color: red;

        }

        .logout a:hover {
            color: chartreuse;
            /* background-color: blue; */
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
            <a href="index.php">Home</a>
            <a href="gallery.php">gallery</a>
            <a href="video_details.php">Videos</a>
            <a href="contact.php">Contact us</a>
            <a href="profile.php"> Profile</a>

        </div>
    </div>

   

    <div class="profile-bar">
        <h2 style="color:red; text-align: center;">Welcome</h2>
        <div class="profile-info">
            <h2 id="name"><?php echo ($_SESSION['register']['name']); ?></h2>
            <p><span>📞</span>+91 <span id="phone"><?php echo ($_SESSION['register']['number']); ?></span></p>
            <p><span>✉️</span> <span id="email"><?php echo ($_SESSION['register']['email']); ?></span></p>

        </div>
        <button class="logout"> <a href="logout.php">Logout</a> </button>
    </div>
</body>

</html>