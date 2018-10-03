<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=portfoliodb','root');

$aboutme_text = $_POST['text'];
$aboutme_image = $_POST['image'];

$query = $db->prepare("UPDATE `about_me` SET `text`=:text WHERE `id`=1");
$query = $db->prepare("UPDATE `about_me` SET `image`=:image WHERE `id`=1");




$query->bindParam(':text' , $aboutme_text);
$query->bindParam(':image' , $aboutme_image);
$query->execute()
