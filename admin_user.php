<?php
include("setting/connection.php");

if (!$_SESSION['admin_users']) {
    header("location:dashboard.php");
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

        a.delete-btn {
            display: inline-block;
            padding: 4px 9px;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a.edit-btn {
            display: inline-block;
            padding: 4px 9px;
            background-color: green;
            color: white;
            text-decoration: none;
            border-radius: 5px;
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
                    <li><a href="users.php">Users</a></li>
                    <li><a href="admin_user.php">Admin-Users</a></li>
                    <li><a href="photos.php">photos</a></li>
                     <li><a href="videos_post.php">video</a></li>
                     <li><a href="mumbers.php">mumbers</a></li>
                     <li><a href="members_photo.php">members photos</a></li>
                    <li><a href="logout.php"> Logout</a></li>
                </ul>
            </nav>
        </div>

        <div class="main-content">
            <header class="main-header">
                <h1>Users info</h1>
                <div class="user-info">
                    <span>Welcome <?php echo ($_SESSION ['admin_users']['name'] )?>🤴</span>
                    <img src="" alt="">
                </div>
            </header>

            <button class="add-now"><a href="admin_add.php"> Add-Now</a></button>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                         <th>Mobile</th>
                        <th>Email</th>
                          <th>Password</th>
                        <th class="actions">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php  $result= mysqli_query( $conn,  "select * from admin_users") ?>

                    <?php while ( $row = mysqli_fetch_assoc($result)) { ?>

                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['number']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                             <td><?php echo $row['password']; ?></td>
        

                           
                            <td class="actions">

                                <a class="delete-btn" href="delete_admin.php?del_id=<?php echo $row['id']; ?>"
                                    onclick="return confirm('Are you sure....');">Delete</a>


                            </td>
                        </tr>


                    <?php }

                    ?>


                </tbody>
            </table>


        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>