<?php
session_start();
include '../controllers/profile.php';
check_access(true);
$category = 'class="active"';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Category</title>
    <meta name="author" content="Pruthvi Soni, Sahay Patel, Namya Patel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creating a responsive website with the help of html,css and php">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="/app/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/app/assets/js/script.js"></script>
</head>

<body>
    <?php
    require_once("_navbarAdmin.php");
    ?>

    <div style="padding: 20px;">
        <div>
            <h2 style="color: rgb(65, 168, 175); font-size: 20px;">Categories</h2>
            <button id="mainButton" onclick="window.location.href='addEditCategory.php'" style="float: right;">
                <div id="btnMargin">
                    + Add New Category
                </div>
            </button><br><br>
        </div><br>
        <table border="1" style="border-collapse: collapse; width:100%" >
            <tr>
                <td>Name</td>
                <td>Description</td>
                <td>Number Of Items</td>
                <td>Action</td>
            </tr>
            <?php
            $count = 0;

            for ($i = 0; $i < sizeof(file('../categoryDetails.txt')); $i++) {
                $category_info = explode(':', file('../categoryDetails.txt')[$i]);
                $count2=0;
                for ($j = 0; $j < sizeof(file('../itemDetails.txt')); $j++) {
                    $item_info = explode(':', file('../itemDetails.txt')[$j]);
                    if($item_info[2]==$i){
                        $count2++;
                    }
                }
            ?>
                <tr>
                    <td><?= $category_info[0] ?></td>
                    <td><?= $category_info[1] ?></td>
                    <td><?=$count2?></td>
                    <td>
                        <button id="mainButton" onclick="window.location.href='addEditCategory.php?edit=<?= $i ?>'">
                            <div id="btnMargin">
                                <i class="fa fa-pencil" aria-hidden="true"></i> Modify
                            </div>
                        </button>
                    </td>
                </tr>
            <?php
                $count = 1;
            }
            if ($count == 0) {
                echo 'There is no Records to show.';
            }
            ?>

        </table>
    </div>
</body>

<footer>

</footer>

</html>