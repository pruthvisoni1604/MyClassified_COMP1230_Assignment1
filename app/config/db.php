<?php
$host = 'localhost';
$username = 'f0t13_root';
$password = 'q1!w2@E3#';
$dbname = "f0t13_my_classified";
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die('Could not Connect MySql Server');
}
