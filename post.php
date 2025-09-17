<?php
include("setting/connection.php");

if (!$_SESSION['register']) {
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styling/design.css">
    <style>
        .user-info {
            display: flex;
            align-items: center;
        }

        .user-info span {
            margin-right: 15px;
            font-weight: 600;
            color: #555;
        }

        .user-info img {
            border-radius: 50%;
            border: 2px solid #6a6a9b;
        }

        /* Dashboard Widgets */
        .dashboard-widgets {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .widget {
            background-color: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .widget h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #6a6a9b;
        }

        .widget p {
            font-size: 2.5rem;
            font-weight: 700;
        }

        /* Specific widget colors for a colorful look */
        .total-users {
            border-left: 5px solid #2ecc71;
            /* Green */
        }

        .total-users h3 {
            color: #2ecc71;
        }

        .total-sales {
            border-left: 5px solid #e74c3c;
            /* Red */
        }

        .total-sales h3 {
            color: #e74c3c;
        }

        .page-views {
            border-left: 5px solid #3498db;
            /* Blue */
        }

        .page-views h3 {
            color: #3498db;
        }

        /* Database Section */
        .database-section {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .database-section h2 {
            color: #2c3e50;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .actions {
            text-align: center;
        }

        .actions button {
            padding: 5px 10px;
            margin: 2px;
            cursor: pointer;
            border-radius: 4px;
            border: none;
            color: white;
        }

        .edit-btn {
            background-color: #4CAF50;
            /* Green */
        }

        .delete-btn {
            background-color: #f44336;
            /* Red */
        }

        .status-active {
            color: #1eff05ff;
            font-size: 1.5rem;
        }

        .status-inactive {
            color: red;
            font-size: 1.5rem;
        }

        .add-now {
            margin-bottom: 7px;
            width: 10%;
            background-color: #7d9eebff;
            color: #080710;
            padding: 8px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            position: relative;
            left: 90%;
        }

        .comtiponer {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            font-family: 'Segoe UI', sans-serif;
        }

        .form {
            margin-bottom: 25px;
            display: flex;
            flex-direction: column;
        }

        .form label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }

        .form input[type="text"],
        .form select,
        .form input[type="file"],
        .form textarea {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form input[type="text"]:focus,
        .form select:focus,
        .form textarea:focus {
            border-color: #00bcd4;
            box-shadow: 0 0 5px rgba(0, 188, 212, 0.3);
            outline: none;
        }

        .form textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form input[type="file"] {
            padding: 10px;
            background-color: #f9f9f9;
            border: none;
        }

        .upload-btn {
            margin-top: 10px;
            background-color: #00bcd4;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.3s;
            width: fit-content;
        }

        .upload-btn:hover {
            background-color: #0097a7;
        }

        @media (max-width: 600px) {
            .comtiponer {
                padding: 20px;
            }
        }
    </style>

    <?php

    $msg = "";
    if (isset($_POST['submit'])) {
        $fileName = basename($_FILES['image']['name']);
        $fileTmpname = $_FILES['image']['tmp_name'];
        $folder = 'rk_pics/' . $fileName;
        $folder = 'rk_video/' . $fileName;

        if (move_uploaded_file($fileTmpname, $folder)) {
            $query = mysqli_query($conn, "INSERT INTO photos (name) VALUES ('$fileName')");
            $query = mysqli_query($conn, "INSERT INTO videos (name) VALUES ('$fileName')");
        }
        if ($query) {
            $msg = "<h3 style='color:green;'>✅ File uploaded successfully.</h3>";
            echo "<h3 style='color:green;'>✅ File uploaded successfully.</h3>";
            header("location:video_details.php");
        } else {
            echo "<h3 style='color:red;'>❌ File not uploaded..</h3>";
        }

    }
    ?>




</head>

<body>

    <div class="admin-panel">

        <div class="sidebar">
            <div class="logo">
                <h2>Admin Dashboard</h2>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="post.php"> post</a></li>
                    <li><a href="users.php">Users</a></li>
                    <li><a href="photos.php">photos</a></li>
                    <li><a href="videos_post.php">video</a></li>
                    <li><a href="logout.php"> Logout</a></li>
                </ul>
            </nav>
        </div>

        <div class="main-content">
            <header class="main-header">
                <h1>Post here</h1>
                <div class="user-info">
                    <span>Welcome <?php echo ($_SESSION['register']['name']) ?>🤴</span>
                    <img src="" alt="">
                </div>
            </header>

            <div class="comtiponer">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form">
                        <label>Upload File</label>
                        <input type="file" name="image" value="rrr">
                    </div>
                    <button type="submit" class="upload-btn" name="submit">Upload</button>
                    <?php echo $msg; ?>
                </form>



                <!-- <div>

                    <?php

                    $result = mysqli_query($conn, "SELECT * FROM photos ORDER BY id DESC");
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <img src="rk_pics/<?php echo ($row['name']) ?>" alt="photo" width="200" style="margin: 10px; ">
                    <?php } ?>


                </div> -->


            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>