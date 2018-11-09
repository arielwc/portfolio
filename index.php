<?php

require_once 'get_data.php';
require_once 'get_data.php';

?>

<html lang="en">
<head>
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
    <script src="hamburger.js"></script>
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
        <div id="ham">
            <div class="hamburger"></div>
            <div class="hamburger"></div>
            <div class="hamburger"></div>
        </div>
        <div id="menu">
            <li><a href="#home-content">Home</a></li>
            <li><a href="#about-me">About Me</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#Contact">Contact</a></li>
        </div>
    </nav>
    <h1>Ariel Walker-Cochrane</h1>
    <h4>Trainee Software Programmer</h4>

</section>

<section id="about-me" class="background-width alignment">
    <p>About Me</p>
    <div class="container">
        <div class="card">
            <div class="container-text">
<!--                --><?php echo $aboutMeContent; ?>
            </div>
        </div>
        <div class="card">
            <img src="Picture-of-my-face.jpg">
        </div>
    </div>
</section>

<section id="portfolio" class="background-width alignment">
    <p>Portfolio</p>
<!--    --><?php
    foreach ($portfolioResults as $project) {
        echo '<img src="' . $project['image'] . '">';
    }
     ?>
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

<footer>&copy; Ariel Walker-Cochrane <a href="database_form.php">Login</a>
</footer>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
<script src="hamburger.js"></script>

</html>
