<?php
    session_start();
    include 'function.php';
    check_access();
    function check_access(){
        if(!isset($_SESSION['user_logged_in']) || !$_SESSION['user_logged_in'])
         header('Location: login.php?err=loginRequired');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Thank you for login
    <a href='logout.php'>Log OUT</a>
</body>
</html>