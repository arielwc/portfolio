<?php
require_once 'db.php';
require_once 'functions.php';

$db = dbConn();

$about_me_text = $_POST['text'];

updateAboutme($db, $about_me_text);
header('Location:index.php');

$project_title= $_POST['project_title'];
$image = $_POST['image'];
$url = $_POST['url'];


createPortfolioproject($db, $project_title, $image, $url);
header('Location:index.php');
