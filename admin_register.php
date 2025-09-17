<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Register Page</title>
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
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }
         .container h2{
            text-align: center;
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

        .valid {
            color: rgb(236, 20, 20);
            float: left;
        }
    </style>
    <?php

    include("setting/connection.php");

    $msg="";

    $valid_name = "";
    $valid_email = "";
    $valid_password = "";
    $valid_number = "";

    if (isset($_POST['btn'])) {

        if ($_POST['name'] == "") {
            $valid_name = "enter valid name.";

        }

        if ($_POST['email'] == "") {
            $valid_email = "enter valid email.";
        }
        if ($_POST['password'] == "") {
            $valid_password = "enter valid password.";
        }

        if ($_POST['number'] == "") {
            $valid_number = "enter valid number.";
        }


        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['number'];


        $query = "INSERT INTO admin_users (name, email, password, number) VALUES ('$name', '$email', '$password', '$number')";
        $result = mysqli_query($conn, $query);


        if(!empty( $name)||( $email)||($password)||( $number)=="ture"){

            header( "Location: login.php");
            exit;
        }
        else{
             
                $msg= '<p style="color:red;">please fill the complete details....</p>';
             
        }



    }



    ?>
</head>

<body>
    <div class="container">
        <h2>Admin Registration</h2>
        <form action="#" method="POST">

            <div class="form">
                <span>Name:</span>
                <input type="text" name="name" placeholder="Enter your full name">
                <span class="valid"><?php echo $valid_name; ?></span>
            </div>

            <div class="form">
                <span>Email:</span>
                <input type="email" name="email" placeholder="Enter your email">
                <span class="valid"><?php echo $valid_email; ?></span>
            </div>

            <div class="form">
                <span>Password:</span>
                <input type="password" name="password" placeholder="Create a password">
                <span class="valid"><?php echo $valid_password; ?></span>
            </div>

            <div class="form">
                <span>Mobile:</span>
                <input type="text" name="number" placeholder="Enter your mobile number">
                <span class="valid"><?php echo $valid_number; ?></span>
            </div>

            <div class="form">
                <button type="submit" name="btn">Register</button>
                 <?php echo $msg;?>

        </form>
    </div>

</body>

</html>