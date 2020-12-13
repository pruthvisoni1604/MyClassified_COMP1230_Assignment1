<?php
session_start();
include '../controllers/profile.php';

checkAdminDetails();
if (check_access(false))
    logout();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Log-in</title>
    <meta name="author" content="Pruthvi Soni, Sahay Patel, Namya Patel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creating a responsive website with the help of html,css and php">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/app/assets/js/script.js"></script>
</head>

<body>
    <?php
    require_once("_navbar.php");
    ?>
    <div class="login">
        </br>
        <form method="post">
            <label for="username">Username</label>
            <input type="text" for="username" name="username" placeholder="username" value="admin" required>

            <label for="password">Password</label>
            <input type="password" for="password" name="password" placeholder="password" value="admin" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </form>
    </div>
</body>

</html>