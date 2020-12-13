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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/app/assets/js/script.js"></script>
</head>

<body>
    <?php
    require_once("_navbarAdmin.php");
    ?>

    <div class="noSideNav">
        <div>
            <h2 class="title">Categories</h2>
            <button id="mainButton" onclick="window.location.href='addEditCategory.php'" class="floatRight">
                <div id="btnMargin">
                    + Add New Category
                </div>
            </button><br><br>
        </div><br>
        <table class="categoryTable">
            <tr>
                <td>Name</td>
                <td>Description</td>
                <td>Number Of Items</td>
                <td>Action</td>
            </tr>
            <?php
            $count = 0;

            $result = mysqli_query($conn, "SELECT * FROM category where status='SHOW'");
            while ($row = mysqli_fetch_array($result)) {
                $result2 = mysqli_query($conn, "SELECT cat_id FROM items");
                $count2 = 0;
                while ($row2 = mysqli_fetch_array($result2)) {
                    if ($row2['cat_id'] == $row['id']) {
                        $count2++;
                    }
                }
            ?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['desc'] ?></td>
                    <td><?= $count2 ?></td>
                    <td>
                        <button id="mainButton" onclick="window.location.href='addEditCategory.php?edit=<?= $row['id'] ?>'">
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