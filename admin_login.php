<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            background: linear-gradient(to right, #ffecd2, #fcb69f);
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url(pic/background.jpg);
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
        }



        .container {
            background: transparent;
            padding: 40px 30px;
            margin-left: 20px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
         .container h2{
            text-align: center;
         }

        .form {
            margin-bottom: 20px;
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
            background: transparent;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form input:focus {
            border-color: #007BFF;
            outline: none;
        }

        .form button {
            padding: 12px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .form button:hover {
            background: #0056b3;
        }

        .form a {
            margin-top: 12px;
            text-align: center;
            color: #007BFF;
            text-decoration: none;
            font-size: 14px;
        }

        .form a:hover {
            text-decoration: underline;
        }

        .valid {
            color: rgb(236, 20, 20);
            float: left;

        }
    </style>
</head>
<?php
include("setting/connection.php");

$register = "";
$valid_email = "";
$valid_password = "";
if ($_POST) {

    if ($_POST['email'] == "") {
        $valid_email = "enter your email.";
    }

    if ($_POST['password'] == "") {
        $valid_password = "enter valid password.";
    }
}
if ($_POST) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM admin_users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if (!empty($row)) {
        $_SESSION['admin_users'] = $row;
        header("Location: dashboard.php");
    }
   
}



?>

<body>

    <div class="container">
        <h2>Admin Login</h2>
        <form action="" method="post">

            <div class="form">
                <span>Email:</span>
                <input type="email" placeholder="Enter your email" name="email">
                <span class="valid"><?php echo $valid_email; ?></span>
            </div>

            <div class="form">
                <span>Password:</span>
                <input type="password" placeholder="Enter your password" name="password">
                <span class="valid"><?php echo $valid_password; ?></span>
            </div>

            <div class="form">
                <button name="submit">Login</button>
                <a href="admin_register.php">Register</a>
            </div>
        </form>
    </div>

</body>

</html>