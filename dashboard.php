<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

require_once 'db_connection.php';

// Fetch user details if needed
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="fa" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WonderWords Library</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <a href="dashboard.php"><img src="images/wonderlogo.png" alt="Logo" id="logo" style="width: 100px; height: auto;"></a>
    <h2>WonderWords Library</h2>
    <div id="buttons-container">
      <a href="login.php" class="button">Logout</a>
    </div>
</header>
<div class="box">
  <h4 style="color: green">Welcome to the WonderWords Library</h4>
  <p>We look forward to seeing you at WonderWords Library.</p>
  <p>Here, an environment full of fascinating stories, delightful picture books, and educational games await you. We seek to create a pleasant and exciting learning experience for children.</p>
  <p>
    Here you can step into a world of knowledge and creativity. We hope you will have a wonderful time with us and love to come to our library all the time.
  </p>
  <p>Wishing you a fruitful and fun reading!</p>
</div>
  <div class="card">
    <img src="images/book1.png" alt="Image 1">
    <div class="card-content">
      <h2 style="padding-left: 20px;">Hide And Seek</h2>
      <p style="padding-left: 20px;">Was it just another game of hide and seek? No. It was not. First, she fell into a deep, dark hole in the ground and then they found a treasure. Did it end there? No! It did not. Read more about this thrilling adventure of Sally and friends in this free illustrated kids’ book. The fun never ends when Sally’s around!</p>
      <a href="book1.php" class="view-button" style="padding-left: 20px;">View Book</a>
    </div>
  </div>
</div>

<div class="card">
  <img src="images/book2.jpg" alt="Image 1">
  <div class="card-content">
    <h2 style="padding-left: 20px;">Ginger the Giraffe</h2>
    <p style="padding-left: 20px;">Read this warm tale of camaraderie and affection set in the wild and beautiful Savannah in our free illustrated kid's book. Ginger the giraffe uses her long neck to save the other animals from the blazing forest fire. Follow them in their jungle paths as they all meet with yet another adventure.</p>
    <a href="book2.php" class="view-button" style="padding-left: 20px;">View Book</a>
  </div>
</div>
</div>

<div class="card">
  <img src="images/book3.jpg" alt="Image 1">
  <div class="card-content">
    <h2 style="padding-left: 20px;">Sunny Meadows Woodland School</h2>
    <p style="padding-left: 20px;">The class took a little train and went deep into the woods on their first school trip. But things didn’t go as planned and a whirlwind of adventure unfolds in this wonderful free bed time story book.</p>
    <a href="book3.php" class="view-button" style="padding-left: 20px;">View Book</a>
  </div>
</div>
</div>

<div class="card">
  <img src="images/book4.jpg" alt="Image 1">
  <div class="card-content">
    <h2 style="padding-left: 20px;">Captain Fantastic Story</h2>
    <p style="padding-left: 20px;">Dr. Zob’s  evil plans had failed once again, thanks to his wonder dog, Winston. They were just were they had to be,  with Princess Aura at her birthday party. Read on to find out why Winston deserves a big cuddle and a juicy big bone. A big ‘Woof!’ to this wonderful free children’s story book.</p>
    <a href="book4.php" class="view-button" style="padding-left: 20px;">View Book</a>
  </div>
</div>
</div>

<div class="card">
  <img src="images/book5.jpg" alt="Image 1">
  <div class="card-content">
    <h2 style="padding-left: 20px;">Dylan The Dragon</h2>
    <p style="padding-left: 20px;">In this classic tale, Dylan learns to make friends despite obstacles.  And when the happily ever  after arrives, both the dragon and  the reader have learnt a thing or two about relationships.</p>
    <a href="book5.php" class="view-button" style="padding-left: 20px;">View Book</a>
  </div>
</div>
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

