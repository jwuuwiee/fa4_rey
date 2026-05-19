<!DOCTYPE html>
<html>
<head>
    <title>My Friends Collection</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f7fb;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 40px;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: 0.3s;
            text-decoration: none;
            color: inherit;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 12px;
        }

        .card h2 {
            margin: 10px 0 5px;
        }

        .card p {
            font-size: 14px;
            line-height: 1.5;
            color: #444;
        }
    </style>

</head>
<body>

<?php include("navbar.php"); ?>

<div class="container">

    <a class="card" href="friend1.php">
        <img src="images/friend1.jpg">
        <h2>Yana</h2>
        <p>Strong-willed and loyal companion 💖</p>
    </a>

    <a class="card" href="friend2.php">
        <img src="images/friend2.jpg">
        <h2>Claire</h2>
        <p>Bright, expressive, and artistic bestie</p>
    </a>

    <a class="card" href="friend3.php">
        <img src="images/friend3.jpg">
        <h2>Kam</h2>
        <p>Calm, emotional, and spontaneous gala buddy</p>
    </a>

    <a class="card" href="friend4.php">
        <img src="images/friend4.jpg">
        <h2>Niko</h2>
        <p>Energetic advisor and childhood friend</p>
    </a>

    <a class="card" href="friend5.php">
        <img src="images/friend5.jpg">
        <h2>Me</h2>
        <p>The one who is chronically online LMAOOO</p>
    </a>

</div>

<?php include("footer.php"); ?>

</body>
</html>