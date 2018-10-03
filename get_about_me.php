<?php
require_once 'db.php';
require_once  'functions.php';

$db = dbConn();
$aboutMeResults = getAboutme($db);
$aboutMeContent = getContentFromArrayWithKey("text", $aboutMeResults);










