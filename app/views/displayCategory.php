<?php
session_start();
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
    <link rel="stylesheet" href="/app/assets/css/style.css">
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
        <h2 style="color: rgb(65, 168, 175); font-size: 20px;">Books</h2>
        <?php
        $count = 0;
        $id=$_REQUEST['id']?? -1;
        for ($i = 0; $i < sizeof(file('../itemDetails.txt')); $i++) {
            $item_info = explode(':', file('../itemDetails.txt')[$i]);
            if ($item_info[2] == $id) {
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