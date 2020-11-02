<?php
session_start();
include '../controllers/profile.php';

$searchItem = get('search') ?? '';
$count = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search</title>
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
    $search = 'class="active"';
    if (isset($_SESSION['user_logged_in'])) {
        require_once("_navbarAdmin.php");
    } else
        require_once("_navbar.php");
    require_once("_sidenav.php");
    ?>

    <div class="main">
        <h2 class="title">Search for <?= $searchItem ?></h2>
        <div class="floatRight">
            <form class="search">
                <input type="text" name="search">
                <button type="submit">Search</button>
            </form>
        </div>
        <?php
        if ($searchItem != "") {
            for ($i = 0; $i < sizeof($item_details); $i++) {
                if (strstr($item_details[$i][0], $searchItem)) {
                    include('_item.php');
                    $count = 1;
                }
            }
            if ($count == 0) {
                echo 'There is no Records to show.';
            }
        }
        ?>
    </div>
</body>

<footer>

</footer>

</html>