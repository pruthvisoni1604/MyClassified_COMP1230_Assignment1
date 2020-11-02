<div class="navbar">
    <b>My Classified (Dashboard)</b>
    <a href="/app/views/index.php" <?= $index ?? '' ?>>Dashboard</a>
    <a href="/app/views/items.php" <?= $items ?? '' ?>>Items</a>
    <a href="/app/views/category.php" <?= $category ?? '' ?>>Category</a>
    <a href="/app/views/search.php" <?= $search ?? '' ?>>Search</a>
    <a href="/app/models/logout.php" style="float: right;"> <i class="fa fa-sign-out"></i>Log-Out</a>
</div>