<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="author" content="Pruthvi Soni,Sahay Patel ,Namya Patel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creating a responsive website with the help of html,css and php">
    <meta name="keywords" content="">
    <link rel="stylesheet prefetch" href="assets/css/style.css">
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="mainDiv">
        <div class="subDiv">
            <p style="font-size: 60px; margin: 0;">Hello, Welcome to My Classified</p>
            <p>This is our first assignment of web development and this website is created by Pruthvi, Sahay and Namya. It is a dummy model of online retailer website. Moreover, people can sell or buy things from the website </p>
            <button id="mainButton" onclick="items.html">
                <div id="btnMargin" >
                    View Our Items <i class="fa fa-angle-double-right"></i>
                </div>
            </button>
        </div>
    </div>

</body>

</html>