<?php
session_start();
include '../controllers/profile.php';
check_access(true);
$category = 'class="active"';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Category</title>
    <meta name="author" content="Pruthvi Soni, Sahay Patel, Namya Patel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creating a responsive website with the help of html,css and php">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="/app/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/app/assets/js/script.js"></script>
</head>

<body>
    <?php
    require_once("_navbarAdmin.php");
    ?>

    <div class="mainDiv">
        <h2 style="color: rgb(65, 168, 175); font-size: 20px;">Category</h2>

    </div>
</body>

<footer>

</footer>

</html>