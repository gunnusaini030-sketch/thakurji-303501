<?php
include("setting/connection.php");

$message = "";

if (isset($_POST['submit'])) {
    $fileName = basename($_FILES['video']['name']);
    $fileTmpname = $_FILES['video']['tmp_name'];
    $folder = 'rk_video/' . $fileName;

    if (move_uploaded_file($fileTmpname, $folder)) {
         $query = mysqli_query($conn, "INSERT INTO videos (name) VALUES ('$fileName')");
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
    <title>Upload & Display Videos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
        }

        .form {
            margin-bottom: 20px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            width: 400px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="file"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
        }

        .upload-btn {
            padding: 10px 20px;
            background: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .upload-btn:hover {
            background: #0056b3;
        }

        .success {
            color: green;
            font-weight: bold;
        }

        .error {
            color: red;
            font-weight: bold;
        }

        video {
            width: 320px;
            height: auto;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.2);
        }

        .video-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <?php if (!empty($message)) echo $message; ?>

    <form action="#" method="post" enctype="multipart/form-data">
        <div class="form">

            <label for="video">Upload Video</label>
            <input type="file" name="video" id="video" accept="video/*" required>

            <button type="submit" class="upload-btn" name="submit">Upload</button>
        </div>
    </form>

    <h2>Uploaded Videos</h2>
    <div class="video-container">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM videos ORDER BY id DESC");
        while ($row = mysqli_fetch_assoc($result)) {
            $videoPath = 'rk_video/' . ($row['name']);
            echo "<video src='{$videoPath}' controls></video>";
        }
        ?>
    </div>

</body>
</html>
