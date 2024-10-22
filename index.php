<?php
session_start();

$message = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username dan password
    if ($username === 'RARA' && $password === 'kelompokRARA') {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit;
    } else {
        $message = "Username atau password salah!";
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {  
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            background-image: url('wallpaper.jpg'); /* lokasi gambar */
            background-size: cover; /* ukuran gambar penuh layar */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.5); /* Opasitas 50% */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 93%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); 
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #7466f2; 
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #00BFFF; 
        }
        .message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if ($message) { echo "<p class='message'>$message</p>"; } ?>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <input type="submit" name="login" value="Login">
        </form>
    </div>
</body>
</html>