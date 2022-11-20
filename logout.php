<?php

session_start();

include 'vendor/autoload.php';

DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'guidance_and_counseling';
DB::$encoding = 'utf8';


$id = $_SESSION['UserId'];

DB::query("UPDATE users SET active_status='0' WHERE user_id='$id'");


unset($_SESSION['UserEmail']);
unset($_SESSION['UserId']);
unset($_SESSION['UserRole']);

echo header("Location: homepage___login.php");