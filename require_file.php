<?php
require_once 'db.php';
require_once 'functions.php';

$db = dbConn();

$about_me_text = $_POST['text'];

updateAboutme($db, $about_me_text);
header('Location:index.php');



