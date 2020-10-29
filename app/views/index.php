<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="author" content="Pruthvi Soni, Sahay Patel, Namya Patel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creating a responsive website with the help of html,css and php">
    <meta name="keywords" content="">
    <link rel="stylesheet prefetch" href="/app/assets/css/style.css">
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/app/assets/js/script.js"></script>

</head>

<body>
    <?php
    $index = 'class="active"';
    require_once("_navbar.php");
    ?>
    <div class="mainDiv">
        <div class="subDiv">
            <p style="font-size: 60px; margin: 0;">Hello, Welcome to My Classified</p>
            <p>This is our first assignment of advanced web programming and this website is created by Pruthvi, Sahay and Namya. It is a dummy model of online retailer website where people can buy things from the website </p>
            <button id="mainButton" onclick="items.php">
                <div id="btnMargin">
                    View Our Items <i class="fa fa-angle-double-right"></i>
                </div>
            </button>
        </div>
    </div>

</body>

</html>