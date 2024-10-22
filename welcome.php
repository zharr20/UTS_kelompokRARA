<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            background-image: url('wallpaper2.jpg'); 
            background-size: cover; 
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .main-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            position: relative;
            top: 20%;
        }

        .welcome-text {
            position: absolute;
            top: 150px; /* Digeser ke bawah */
            left: 50%;
            transform: translateX(-50%);
            font-size: 36px;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        .logout-container {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: transparent;
            padding: 0; 
            text-align: center;
            width: auto; 
        }

        a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        a:hover {
            background-color: #0056b3;
        }

        .teams {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .teams .card {
            background: transparent;
            border-radius: 6px;
            padding: 25px 35px;
            text-align: center;
            overflow: hidden;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 150px;
        }

        .teams .card:hover {
            background: darkorange;
        }

        .teams .card img {
            height: 150px;
            width: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid darkorange;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
        }

        .teams .card:hover img {
            border-color: #fff;
        }

        .teams .card .text {
            font-size: 20px;
            font-weight: 500;
            margin: 10px 0 7px 0;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body>
    <h2 class="welcome-text">Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>

    <div class="logout-container">
        <a href="index.php?logout=true">Logout</a>
    </div>

    <div class="main-container">
        <section class="teams" id="teams">
            <div class="card">
                <img src="rizki.jpg" alt="">
                <div class="text">Rizki</div>
            </div>
            <div class="card">
                <img src="akhtar.jpg" alt="">
                <div class="text">Akhtar</div>
            </div>
            <div class="card">
                <img src="ronald.jpg" alt="">
                <div class="text">Ronald</div>
            </div>
            <div class="card">
                <img src="azhar.jpg" alt="">
                <div class="text">Azhar</div>
            </div>
        </section>
    </div>
</body>
</html>