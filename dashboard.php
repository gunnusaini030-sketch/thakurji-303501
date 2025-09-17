<?php
include("setting/connection.php");


if (!$_SESSION['admin_users']) {
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
                    <li><a href="users.php">Users</a></li>
                     <li><a href="admin_user.php">Admin-Users</a></li>
                    <li><a href="photos.php">photos</a></li>
                    <li><a href="videos_post.php">video</a></li>
                    <li><a href="mumbers.php">members</a></li>
                    <li><a href="members_photo.php">members photos</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>

        <div class="main-content">
            <header class="main-header">
                <h3>Welcome to the Dashboard</h3>
                <div class="user-info">
                    <span>Welcome <?php echo ($_SESSION['admin_users']['name']); ?>🤴</span>
                </div>
            </header>

            <div class="dashboard-widgets">
                <div class="widget total-users">
                    <h3>Total Users</h3>
                     <p> <?php
                    $query = "SELECT COUNT(*) AS total_register FROM register";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    echo $row['total_register'];
                    }
                    ?></p>
                </div>

                <div class="widget total-sales">
                    <h3>Total Videos</h3>
                    <p> <?php
                    $query = "SELECT COUNT(*) AS total_videos FROM videos";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    echo $row['total_videos'];
                    }
                    ?></p>

                </div>


                <div class="widget page-views">
                    <h3>Total Photos</h3>
                    <p> <?php
                    $query = "SELECT COUNT(*) AS total_photos FROM photos";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    echo $row['total_photos'];
                    }?></p>
                    

                </div>

                 <div class="widget page-views">
                    <h3>Total members</h3>
                    <p> <?php
                    $query = "SELECT COUNT(*) AS total_mumbers FROM mumbers";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    echo $row['total_mumbers'];
                    }?></p>
                    

                </div>

                 
            </div>


        </div>

    </div>


</body>

</html>