<?php
require_once 'db.php';
require_once 'functions.php';

$project_delete = $_POST['project_title'];

$db = dbConn();

deletePortfolioproject($db, $project_delete);
header('Location:index.php');