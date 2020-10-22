<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Items</title>
    <meta name="author" content="Pruthvi Soni, Sahay Patel, Namya Patel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creating a responsive website with the help of html,css and php">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="assets/js/script.js"></script>
</head>

<body>
    <div class="navbar">
        <b>My Classified</b>
        <a href="index.php" class="active">Home</a>
        <a href="items.php">Items</a>
        <div class="dropdown">
            <button class="dropBtn" onclick="dropFunction()">Categories &#9662;</button>
            <div class="dropdown-content" id="dropdown">
                <a href="electronics.html">Electronics</a>
                <a href="mens_fashion.html">Men's Fashion</a>
                <a href="womens_fashion.html">Women's Fashion</a>
                <a href="home_accessories.html">Home accessories</a>
                <a href="books.html">Books</a>
                <a href="toys.html">Toys</a>
            </div>
        </div>
        <a href="search.php">Search</a>
        <a href="login.php" style="float: right;"> <i class="fa fa-sign-in"></i> Log-in</a>
    </div>
    <div class="sideNav">
        <h2 style="color: rgb(65, 168, 175); text-align: center; font-size: 20px;">Categories</h2>
        <a href="electronics.html">Electronics</a>
        <a href="mens_fashion.html">Men's Fashion</a>
        <a href="womens_fashion.html">Women's Fashion</a>
        <a href="home_accessories.html">Home accessories</a>
        <a href="books.html">Books</a>
        <a href="toys.html" style="border-bottom: solid gray 1px;">Toys</a>
    </div>

    <div class="main">
        <h2 style="color: rgb(65, 168, 175); font-size: 20px;">Items</h2>
        <p>This sidebar is as tall as its content (the links), and is always shown.</p>
        <p>Scroll down the page to see the result.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint
            efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint
            efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint
            efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint
            efficiantur his ad. Eum no molestiae voluptatibus.</p>
    </div>
</body>

<footer>

</footer>

</html>