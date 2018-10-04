<?php
require_once 'db.php';
require_once  'functions.php';

$db = dbConn();
$portfolioResults = getProjects($db);
