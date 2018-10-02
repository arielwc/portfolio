<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=portfoliodb','root');

$aboutme_text = $_POST['text'];


$query = $db->prepare("UPDATE `about_me` SET `text`=:text WHERE `id`=1");
$query->bindParam(':text' , $aboutme_text);
$query->execute();