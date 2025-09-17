<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #c4d6ecff;
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

        .contact-container {
            max-width: 700px;
            margin: 50px auto;
            margin-top: 100px;
            padding: 30px;
            background-color: #f7d0d0ff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .contact-header h1 {
            color: #333;
            font-size: 2.5em;
        }

        .contact-details {
            line-height: 1.8;
            color: #555;
            font-size: 1.1em;
        }

        .contact-details strong {
            color: #222;
        }

        .map-container {
            margin-top: 30px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        iframe {
            width: 100%;
            height: 400px;
            border: none;
        }

        .footer {
            margin-top: 480px;

            background: #111;
            color: #f1f1f1;
            /* padding: 40px 0 20px; */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-container {
            width: 90%;
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
            <a href="dashboard.php">Home</a>
            <a href="gallery.php">gallery</a>
            <a href="video_details.php">Videos</a>
            <a href="contact.php">Contact us</a>
            <a href="profile.php"> Profile</a>

        </div>
    </div>

    <div class="contact-container">
        <div class="contact-header">
            <h1>Contact Us</h1>
        </div>
        <div class="contact-details">
            <p><strong>Address:</strong><br>
                thakur ji temple -vpo Mohchingpura, Tehsil Baharawanda,<br>
                District Dausa, Rajasthan, India - 33501</p>

            <p><strong>Phone Numbers:</strong><br>
                📞 +91 73729 58422<br>
                📞 +91 84408 81451</p>

            <p><strong>Email:</strong><br>
                ✉️ Ramkesh15032000@gmail.com</p>
        </div>

        <!-- Embedded Google Map -->
        <div class="map-container">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1521983.1027916586!2d74.19160439375003!3d26.789561699999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39720901629c8307%3A0xa3f63839c2497e25!2z4KS24KWN4KSw4KWAIOCkoOCkvuCkleClgeCksCDgpJzgpYAg4KSu4KS54KS-4KSw4KS-4KScIOCkruCkguCkpuCkv-CksCDgpJbgpYfgpJzgpKHgpLzgpL4g4KSi4KS-4KSj4KWAIOCkruCli-CkueCkmuCkv-CkguCkl-CkquClgeCksOCkvg!5e1!3m2!1sen!2sin!4v1758041703313!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> 
        </div>
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