<div class="navbar">
        <b>My Classified</b>
        <a href="/app/views/index.php" <?=$index ?? ''?>>Home</a>
        <a href="/app/views/items.php" <?=$items ?? ''?>>Items</a>
        <div class="dropdown <?=$category ?? ''?>">
            <button class="dropBtn" onclick="dropFunction()">Categories &#9662;</button>
            <div class="dropdown-content" id="dropdown">
                <a href="/app/views/categories/books.php">Books</a>
                <a href="/app/views/categories/electronics.php">Electronics</a>
                <a href="/app/views/categories/halloween_items.php">Halloween Items</a>
                <a href="/app/views/categories/home_accessories.php">Home accessories</a>
                <a href="/app/views/categories/mens_fashion.php">Men's Fashion</a>
                <a href="/app/views/categories/womens_fashion.php">Women's Fashion</a>
            </div>
        </div>
        <a href="/app/views/search.php"  <?=$search ?? ''?>>Search</a>
        <a href="/app/views/login.php" style="float: right;"> <i class="fa fa-sign-in"></i> Log-in</a>
    </div>