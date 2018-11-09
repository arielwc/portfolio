<?php

$userName = $_GET['userName'];
$userPassword = $_GET['password'];
$storedPassword = 'password';

if ($userPassword == $storedPassword && $userName == 'Ariel'){
echo 'Yay! You are in! ';
} else {
echo 'Computer says no.';
}