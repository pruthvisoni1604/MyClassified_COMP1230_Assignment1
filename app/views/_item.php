<div>
    <div class="image">
        <img src="/app/assets/img/<?= $item_details[$i][4] ?>" alt="Image load Error" width="300px">
    </div>
    <div class="itemMargin">
        <h2><?= $item_details[$i][0] ?></h2>
    </div>
    <div class="itemMargin">
        <p><?= $item_details[$i][1] ?></p>
    </div>
    <div class="itemMargin">
        <p><i class="fa fa-shopping-cart" aria-hidden="true"></i> Price : $<?php echo $item_details[$i][3] == 0 ? " Free" : $item_details[$i][3] ?></p>
    </div>
    <?php
    if (isset($_SESSION["user_logged_in"])) {
    ?>
        <div class="itemButtons">
            <button class="itemModifyBtn" onclick="window.location.href='addEditItem.php?edit=<?= $i ?>'">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                Modify
            </button>
            <button class="itemDeleteBtn" onclick="showAlert(<?= $i ?>)">
                <i class="fa fa-trash" aria-hidden="true"></i>
                delete
            </button>
        </div>
    <?php
    }
    ?>
</div>