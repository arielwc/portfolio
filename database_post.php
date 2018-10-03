<?php
$db = new PDO('mysql:host=127.0.0.1;dbname=portfoliodb','root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `text` , `image` FROM `about_me`;");
$query->execute();

$result = $query->fetch();









