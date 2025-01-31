<?php
require_once 'php/DBConnect.php';
$db = new DBConnect();
$db->authLogin();

$message = NULL;
if (isset($_POST['loginBtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $flag = $db->login($username, $password);
    if ($flag) {
        header("Location: http://localhost/BDmanagement/home.php");
    } else {
        $message = "Username or password was incorrect!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Login</title>
    <style>
        @media (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .image-section {
        display: none;
    }

    .form-section {
        padding: 20px;
    }
}

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            height: 100vh;
            width: 100%;
        }

        .image-section {
            flex: 1;
            background: url('assets/nurse-image.jpg') center/cover no-repeat;
        }

        .form-section {
            flex: 1;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #f8f9fa;
        }

        .form-section h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #333;
        }

        .form-section form {
            display: flex;
            flex-direction: column;
        }

        .form-section form input {
            margin-bottom: 15px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-section form button {
            padding: 15px;
            background-color:rgb(197, 67, 55);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        .form-section form button:hover {
            background-color:rgb(205, 34, 18);
        }

        .google-signin {
            margin-top: 20px;
            text-align: center;
        }

        .google-signin button {
            padding: 15px;
            background-color: white;
            color: #444;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .google-signin button:hover {
            background-color: #f1f1f1;
        }

        .form-section p {
            margin-top: 20px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .image-section {
                height: 300px;
            }

            .form-section {
                padding: 20px;
            }
        }
        .image-section {
            flex: 1;
            background: url('assets/nurse.jpg') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-section"></div>
        <div class="form-section">
           <center><img src="assets/logo.png" alt="logo" width="150" height="150"></center>
            <h2>Nice to see you again</h2>
            <?php if (isset($message)): ?>
                <p style="color: red;"><?= $message; ?></p>
            <?php endif; ?>
            <form method="post" action="index.php">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="loginBtn">Sign In</button>
            </form>
            <div class="google-signin">
                <form method="post" action="users/index.php">
                    <button type="submit">Don't Have an Account? Click here!</button>
                </form>
    </div>
</body>
</html>
