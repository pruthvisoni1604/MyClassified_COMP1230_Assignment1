<div class="sideNav">
    <h2 style="color: rgb(65, 168, 175); text-align: center; font-size: 20px;">Categories</h2>
    <?php
    $result = mysqli_query($conn, "SELECT id,name FROM category where status='SHOW'");
    while ($row = mysqli_fetch_array($result)) {
        echo "<a href=\"displayCategory.php?id=" . $row['id'] . "\">" . $row['name'] . "</a>";
    }
    ?>
</div>