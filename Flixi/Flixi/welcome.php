<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
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
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('images/welcome.jpg') no-repeat center center fixed;
            background-size: cover;
            overflow: hidden;
        }

        .welcome-container {
            text-align: center;
            color: #fff;
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: 4em;
            margin: 0;
            position: relative;
            display: inline-block;
            color: #ffcc00;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        h1::before {
            content: 'Welcome to Flixi!';
            position: absolute;
            top: 0.1em;
            left: 0.1em;
            color: rgba(0, 0, 0, 0.5);
            z-index: -1;
            transform: rotateY(30deg) rotateX(15deg);
        }

        h1::after {
            content: 'Welcome to Flixi!';
            position: absolute;
            top: 0.2em;
            left: 0.2em;
            color: rgba(0, 0, 0, 0.3);
            z-index: -2;
            transform: rotateY(60deg) rotateX(30deg);
        }

        .btn-container {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background: #ffcc00;
            color: #000;
            text-transform: uppercase;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background 0.3s, color 0.3s;
        }

        .btn:hover {
            background: #ffcc00;
            color: red;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.5em;
            }

            .btn {
                padding: 8px 16px;
                font-size: 0.9em;
            }
        }
    </style>
</head>

<body>
    <div class="welcome-container">
        <h1>Welcome to Flixi!</h1>
        <div class="btn-container">
            <a class="btn" href="profile.php">Go to Profile</a>
            <a class="btn" href="home.php">Home</a>
        </div>
    </div>
</body>

</html>