<div>
    <div class="image">
        <img src="/app/assets/img/<?= $row['img_name'] ?>" alt="Image load Error" width="300px">
    </div>
    <div class="itemMargin">
        <h2><?= $row['title'] ?></h2>
    </div>
    <div class="itemMargin">
        <p><?= $row['desc'] ?></p>
    </div>
    <div class="itemMargin">
        <p><i class="fa fa-shopping-cart" aria-hidden="true"></i> Price : $<?php echo $row['price'] == 0 ? " Free" : $row['price'] ?></p>
    </div>
    <?php
    if (isset($_SESSION["user_logged_in"])) {
    ?>
        <div class="itemButtons">
            <button class="itemModifyBtn" onclick="window.location.href='addEditItem.php?edit=<?= $row['id'] ?>'">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                Modify
            </button>
            <button class="itemDeleteBtn" onclick="showAlert(<?= $row['id'] ?>)">
                <i class="fa fa-trash" aria-hidden="true"></i>
                delete
            </button>
        </div>
    <?php
    }
    ?>
</div>