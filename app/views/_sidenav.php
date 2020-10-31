<div class="sideNav">
    <h2 style="color: rgb(65, 168, 175); text-align: center; font-size: 20px;">Categories</h2>

    <?php
    for ($i=0;$i<sizeof(file('../categoryDetails.txt'));$i++){
        $category_info = explode(':', file('../categoryDetails.txt')[$i]);
        echo "<a href=\"displayCategory.php?id=$i\">$category_info[0]</a>";
    }
    ?>
</div>