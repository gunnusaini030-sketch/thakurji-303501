<?php
include("setting/connection.php");

$msg="";
if (isset($_POST["btn"])){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $donation = $_POST['donation'];


   $query = "INSERT INTO mumbers (name, number, address, donation) VALUES ('$name', '$number', '$address', ' $donation')";
       $result= mysqli_query( $conn, $query);

      
      
        if(!empty($result)=="ture"){

            header( "Location: mumbers.php");
            exit;
        }
        else{
             
                $msg= '<p style="color:red;">please fill the complete details....</p>';
             
        }

    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Panel</title>
    <link rel="stylesheet" href="style.css">
    <style>
       
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }

        .admin-panel {
            display: flex;
            min-height: 100vh;
        }

       
        .sidebar {
            width: 250px;
            background-color: #4a4a6e;
            color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h2 {
            font-size: 1.5rem;
            color: #fff;
        }

        .main-nav ul {
            list-style: none;
        }

        .main-nav li {
            margin-bottom: 10px;
        }

        .main-nav a {
            display: flex;
            align-items: center;
            padding: 15px;
            color: #d1d1e0;
            text-decoration: none;
            font-weight: 500;
            border-radius: 8px;
            transition: background-color 0.3s, color 0.3s;
        }

        .main-nav a:hover,
        .main-nav a.active {
            background-color: #6a6a9b;
            color: #fff;
        }

        .main-nav a i {
            margin-right: 15px;
            font-size: 1.2rem;
        }

        /* Main Content Area */
        .main-content {
            flex-grow: 1;
            padding: 30px;
        }

        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }

        .main-header h1 {
            font-size: 2rem;
            color: #2c3e50;
        }

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
        .container {
            background: white;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        .form {
            margin-bottom: 14px;
            display: flex;
            flex-direction: column;
        }

        .form span {
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }

        .form input {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form input:focus {
            border-color: #ff7e5f;
            outline: none;
        }

        .form button {
            padding: 12px;
            background: #ff7e5f;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .form button:hover {
            background: #e86448;
        }

        .form:last-child {
            align-items: center;
        }

        .form a {
            margin-top: 12px;
            color: #ff7e5f;
            text-decoration: none;
            font-size: 14px;
        }

        .form a:hover {
            text-decoration: underline;
        }
    </style>
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
                    <li><a href="users.php"> Users</a></li>
                    <li><a href="photos.php"> photos</a></li>
                     <li><a href="videos_post.php">video</a></li>
                     <li><a href="mumbers.php">mumbers</a></li>
                     <li><a href="members_photo.php">members photos</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>

        <div class="main-content">
            <header class="main-header">
                <h1>Add New mumber</h1>
                <div class="user-info">
                    <span>Welcome <?php echo ($_SESSION ['admin_users']['name'] )?>🤴</span>
                    <img src="" alt="">
                </div>
            </header>

            <div class="container">
                <form action="#" method="POST">

                    <div class="form">
                        <span>Name:</span>
                        <input type="text" name="name" placeholder="Enter your full name">

                    </div>

                    <div class="form">
                        <span>Number:</span>
                        <input type="text" name="number" placeholder="Enter your number">

                    </div>

                    <div class="form">
                        <span>Address:</span>
                        <input type="text" name="address" placeholder="enter your address">

                    </div>

                    <div class="form">
                        <span>Donation:</span>
                        <input type="text" name="donation" placeholder="plz donate according your wish..">

                    </div>

                    <div class="form">
                        <button type="submit" name="btn">submit</button>
                    </div>
                    <?php echo $msg;?>


                </form>
            </div>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>