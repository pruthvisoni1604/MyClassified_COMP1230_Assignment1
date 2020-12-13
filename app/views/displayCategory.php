<?php
session_start();
include '../controllers/profile.php';

$id = $_REQUEST['id'] ?? -1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Items</title>
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
    if (isset($_SESSION['user_logged_in'])) {
        require_once("_navbarAdmin.php");
    } else
        require_once("_navbar.php");
    require_once("_sidenav.php");
    ?>
    <div class="main">
        <h2 class="title">
            <?php
            if ($id != -1) {
                $result = mysqli_query($conn, "SELECT name FROM category where id=" . $id);
                echo mysqli_fetch_array($result)['name'];
            } ?>
        </h2>
        <?php if (isset($_SESSION['user_logged_in'])) { ?>
            <button id="mainButton" onclick="window.location.href='addEditCategory.php'" class="floatRight">
                <div id="btnMargin">
                    + Add New Item
                </div>
            </button>
        <?php
        }
        if ($id != -1) {
            $count = 0;
            $result = mysqli_query($conn, "SELECT * FROM items where cat_id=" . $id);
            while ($row = mysqli_fetch_array($result)) {
                include('_item.php');
                $count++;
            }
            if ($count == 0) {
                echo 'There is no Records to show.';
            }
        } else {
            echo "No content to show!";
        }
        ?>
    </div>
</body>

<footer>

</footer>

</html>