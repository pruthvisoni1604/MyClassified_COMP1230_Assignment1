<div class="navbar">
        <b>My Classified</b>
        <a href="app/views/index.php" <?=$index?>>Home</a>
        <a href="app/views/items.php" <?=$items?>>Items</a>
        <div class="dropdown">
            <button class="dropBtn" onclick="dropFunction()">Categories &#9662;</button>
            <div class="dropdown-content" id="dropdown">
                <a href="app/views/categories/books.html">Books</a>
                <a href="app/views/categories/electronics.html">Electronics</a>
                <a href="app/views/categories/halloween_items.html">Halloween Items</a>
                <a href="app/views/categories/home_accessories.html">Home accessories</a>
                <a href="app/views/categories/mens_fashion.html">Men's Fashion</a>
                <a href="app/views/categories/womens_fashion.html">Women's Fashion</a>
            </div>
        </div>
        <a href="app/views/search.php"  <?=$search?>>Search</a>
        <a href="app/views/login.php" style="float: right;"> <i class="fa fa-sign-in"></i> Log-in</a>
    </div>