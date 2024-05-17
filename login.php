<?php
session_start();
require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database for the user
    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Authentication successful
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="fa" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WonderWords Library</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <a href="login.php"><img src="images/wonderlogo.png" alt="Logo" id="logo" style="width: 100px; height: auto;"></a>
    <h2>WonderWords Library</h2>
    <div id="buttons-container">
        <a href="login.php" class="button">Login</a>
        <a href="register.php" class="button">Register</a>
        <a href="about-us.php" class="button">About-us</a>
    </div>
</header>

<div class="box">
    <center>
    <div class="form-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    </div>
    </center>
</div>

<footer style="background-color: #1d3557; color: #fff; text-align: center; padding: 20px;">
    <div>
        <a href="useful-links.php" class="footer-button">useful link</a>
        <a href="contact-us.php" class="footer-button">contact us</a>
    </div>
    <p style="margin-top: 30px; color: silver"><span style="margin-left: 5px;">&copy;</span> All intellectual and material rights are reserved for the WonderWords Library.</p>
    <p style="color: silver">The use of the contents of this site on other sites and printed publications is free by mentioning the source.</p>
</footer>

</body>
</html>
