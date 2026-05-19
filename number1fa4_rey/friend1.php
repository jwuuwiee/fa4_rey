<!DOCTYPE html>
<html>
<head>
    <title>Yana</title>

    <style>
        body {
            font-family: Arial;
            background: #f7f7fb;
            margin: 0;
        }

        .profile {
            max-width: 700px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .profile img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 15px;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>

<?php include("navbar.php"); ?>

<div class="profile">
    <img src="images/friend1.jpg">
    <h1>Yana</h1>
    <p>
        Strong-willed and loyal. Not afraid to say what's on their mind. My companion in life 💖.
        Currently taking BS Hospitality Management in Unibersidad de Manila.
    </p>

    <a class="back" href="index.php">← Back to Home</a>
</div>

<div class="footer">
    <p>Created by Juliana Rey</p>
</div>

</body>
</html>