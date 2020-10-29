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
    require_once("_navbar.php");
    ?>

    <div class="sideNav">
        <h2 style="color: rgb(65, 168, 175); text-align: center; font-size: 20px;">Categories</h2>
        <a href="categories/books.php">Books</a>
        <a href="categories/electronics.php">Electronics</a>
        <a href="categories/halloween_items.php">Halloween Items</a>
        <a href="categories/home_accessories.php">Home accessories</a>
        <a href="categories/mens_fashion.php">Men's Fashion</a>
        <a href="categories/womens_fashion.php" style="border-bottom: solid gray 1px;">Women's Fashion</a>
    </div>

    <div class="main">
        <h2 style="color: rgb(65, 168, 175); font-size: 20px;">Search for </h2>
        <div style="float: right;">
            <form class="search " action="/action_page.php" style="max-width: 200px;">
                <input type="text" name="search">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
</body>

<footer>

</footer>

</html>