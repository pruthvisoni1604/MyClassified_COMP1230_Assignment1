<div class="navbar">
    <b>My Classified</b>
    <a href="/app/views/index.php" <?= $index ?? '' ?>>Home</a>
    <a href="/app/views/items.php" <?= $items ?? '' ?>>Items</a>
    <div class="dropdown <?= $category ?? '' ?>">
        <button class="dropBtn" onclick="dropFunction()">Categories &#9662;</button>
        <div class="dropdown-content" id="dropdown">
            <?php
            $result = mysqli_query($conn, "SELECT id,name FROM category where status='SHOW'");
            while ($row = mysqli_fetch_array($result)) {
                echo "<a href=\"/app/views/displayCategory.php?id=" . $row['id'] . "\">" . $row['name'] . "</a>";
            }
            ?>
        </div>
    </div>
    <a href="/app/views/search.php" <?= $search ?? '' ?>>Search</a>
    <a href="/app/views/login.php" style="float: right;"> <i class="fa fa-sign-in"></i> Login</a>
</div>