<?php
include("setting/connection.php");

if (!$_SESSION['register']) {
    header("location:login.php");
}

$message = "";

if (isset($_POST['submit'])) {
    $fileName = basename($_FILES['image']['name']);
    $fileTmpname = $_FILES['image']['tmp_name'];
    $folder = 'rk_pics/' . $fileName;

    if (move_uploaded_file($fileTmpname, $folder)) {
        $query = mysqli_query($conn, "INSERT INTO photos (name) VALUES ('$fileName')");
    }
    if ($query) {
        $message = "<p class='success'>✅ File uploaded successfully.</p>";
    } else {
        $message = "<p class='error'>❌ Failed to insert into database.</p>";
    }
} else {
    $message = "<p class='error'>❌ File upload failed.</p>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>photos page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
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


        }

        .navbar .right {
            float: right;
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


    <section class="gallery">
        <h2>Photo Gallery</h2>
        <div class="gallery-grid">

            <?php

            $result = mysqli_query($conn, "SELECT * FROM photos ORDER BY id DESC");
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <img src="rk_pics/<?php echo ($row['name']) ?>" alt="" aria-autocomplete="none" class="thumb">
            <?php } ?>

        </div>

        <script src="styling/pic.js"></script>

</body>

</html>