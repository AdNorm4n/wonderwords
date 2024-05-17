<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database
    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $hashed_password]);
        header("Location: login.php");
        exit();
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
    <title>Register - WonderWords Library</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <a href="register.php"><img src="images/wonderlogo.png" alt="Logo" id="logo" style="width: 100px; height: auto;"></a>
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
            <h2>Register</h2>
            <form action="register.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="repeat-password" placeholder="Repeat password" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <button type="submit">Register</button>
            </form>
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
