<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Items</title>
    <meta name="author" content="Pruthvi Soni, Sahay Patel, Namya Patel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creating a responsive website with the help of html,css and php">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="app/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="app/assets/js/script.js"></script>
</head>

<body>
    <?php
    $index = '';
    $items = 'class="active"';
    $search = '';
    include("_navbar.php");
    ?>
    <div class="sideNav">
        <h2 style="color: rgb(65, 168, 175); text-align: center; font-size: 20px;">Categories</h2>
        <a href="app/views/categories/books.html">Books</a>
        <a href="app/views/categories/electronics.html">Electronics</a>
        <a href="app/views/categories/halloween_items.html">Halloween Items</a>
        <a href="app/views/categories/home_accessories.html">Home accessories</a>
        <a href="app/views/categories/mens_fashion.html">Men's Fashion</a>
        <a href="app/views/categories/womens_fashion.html">Women's Fashion</a>
    </div>

    <div class="main">
        <h2 style="color: rgb(65, 168, 175); font-size: 20px;">Items</h2>
        <p>This sidebar is as tall as its content (the links), and is always shown.</p>
        <p>Scroll down the page to see the result.</p>
        <div class="main">
            <h2 style="color: rgb(65, 168, 175); font-size: 20px;">Items</h2>
            <!--<?php
            for ($i = 0; $i < sizeof(file('itemDetails.txt')); $i++) {
                $item_info = explode(':', file('itemDetails.txt')[$i]);
                item($item_info, $i);
            }
            ?>-->
        </div>
        <?php
        function item($item_info, $numberOfItem)
        {
            echo '
                <div>
                    <div class="image">
                        <img src="assets/img/' . $item_info[4] . '" alt="No No_Image_Available" width="300px">
                    </div>  
                    <div class="itemMargin">
                        <h2>' . $item_info[0] . '</h2>
                    </div>
                    <div class="itemMargin">
                        <p>
                            ' . $item_info[2] . '
                        </p>
                    </div>
                    <div class="itemMargin">
                        <p><i class="fa fa-shopping-cart" aria-hidden="true"></i> Price : $' . $item_info[3] . '</p>
                    </div>
                    <div class="itemButtons">
                        <button class="itemModifyBtn" onclick="window.location.href=\'addItem.php?edit=' . $numberOfItem . '\';">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            Modify
                        </button>
                        <button class="itemDeleteBtn">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            delete
                        </button>
                    </div>      
                </div>';
        }
        ?>
    </div>
</body>

<footer>

</footer>

</html>