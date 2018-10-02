<?php
require 'database_post.php';
?>

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>
        Ariel's Portfolio
    </title>
</head>
<body>
<section id="home-content">
    <img class= "alignment" src="Logo.png">
    <nav class="background-width">
        <ul>
            <li><a href="#home-content">Home</a></li>
            <li><a href="#about-me">About Me</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#Contact">Contact</a></li>
        </ul>
        <div class="hamburger"></div>
        <div class="hamburger"></div>
        <div class="hamburger"></div>
    </nav>
    <h1>Ariel Walker-Cochrane</h1>
    <h4>Trainee Software Programmer</h4>

</section>

<section id="about-me" class="background-width alignment">
    <p>About Me</p>
    <div class="container">
        <div class="card">
            <div class="container-text">
                <?php echo $result["text"]; ?>
            </div>
        </div>
        <div class="card">
            <img src="Picture-of-my-face.jpg">
        </div>
    </div>
</section>

<section id="portfolio" class="background-width alignment">
    <p>Portfolio</p>
    <img src="Placeholder-Flowers.jpg">
    <img src="Placeholder-Flowers.jpg">
    <img src="Placeholder-Flowers.jpg">
    <img src="Placeholder-Flowers.jpg">
    <img src="Placeholder-Flowers.jpg">
    <img src="Placeholder-Flowers.jpg">
</section>

<section id="Contact" class="background-width alignment">
    <div class="container">
        <p>Contact Info</p>
        <div class="container-text">
            Ariel Walker-Cochrane<br>
            (p)+44 7 849684769<br>
        (e)arielwalkercochrane@gmail.com
        </div>
    </div>
</section>

</body>

<footer>&copy; Ariel Walker-Cochrane</footer>

</html>
