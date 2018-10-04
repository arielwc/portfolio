<?php
require_once 'db.php';
require_once 'functions.php';

$db = dbConn();
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$about_me_text = $_POST['text'];

updateAboutme($db, $about_me_text);
header('Location:index.php');




