<?php
require_once 'db.php';
require_once 'functions.php';

$db = dbConn();

$project_title= $_POST['project_title'];
$image = $_POST['image'];
$url = $_POST['url'];

createPortfolioproject($db, $project_title, $image, $url);
header('Location:index.php');