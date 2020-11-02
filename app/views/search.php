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
    <style>
        form.search input[type=text] {
            padding: 5px;
            font-size: 17px;
            border: 1px solid grey;
            width: 80%;
            background: #f1f1f1;
            border-radius: 15px;
        }

        form.search button {
            padding: 5px;
            font-size: 17px;
            border: 1px solid grey;
            width: auto;
            background: #f1f1f1;
        }
    </style>
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
        <h2 style="color: rgb(65, 168, 175); font-size: 20px;">Search for </h2>
        <div style="float: right;">
            <form class="search" action="" style="max-width: 200px;">
                <input type="text" name="search">
                <button type="submit">Search</button>
            </form>
        </div>
        <?php
        for ($i = 0; $i < sizeof(file('../itemDetails.txt')); $i++) {
            $item_info = explode(':', file('../itemDetails.txt')[$i]);
            if ($searchItem == $item_info[0]) {
                include('_item.php');
                $count = 1;
            }
        }
        if ($count == 0) {
            echo 'There is no Records to show.';
        }
        ?>
    </div>
</body>

<footer>

</footer>

</html>