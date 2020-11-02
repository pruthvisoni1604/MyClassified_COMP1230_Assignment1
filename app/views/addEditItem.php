<?php
session_start();
include '../controllers/profile.php';
check_access(true);
$items = 'class="active"';
$editItem = $_REQUEST['edit'] ?? '-1';
$edit = false;
if ($editItem != '-1') {
    $item_info = explode(':', file('../itemDetails.txt')[$editItem]);
    $item_info[1] = str_replace("<br/>", "\r\n", $item_info[1]);
    $edit = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AdminPage</title>
    <meta name="author" content="Pruthvi Soni, Sahay Patel, Namya Patel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creating a responsive website with the help of html,css and php">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="/app/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/app/assets/js/script.js"></script>
</head>
<style>
    td {
        padding: 10px;
    }

    label {
        margin-right: 40px;
    }

    textarea {
        width: 600px;
        height: 100px;
    }
</style>

<body>
    <?php
    require_once("_navbarAdmin.php");
    require_once("_sidenav.php");
    ?>
    <div class="main">
        <h2 style="color: rgb(65, 168, 175); text-align: center; font-size: 20px;">Add new item</h2>
        <table class="form">
            <form action="../models/upload.php<?php echo $edit?"?edit=$editItem":"";?>" method="POST" enctype="multipart/form-data">
                <tr>
                    <td>
                        <label for="title"> Title : </label>
                        <input type="text" name="title" placeholder="Enter Title" style="width : 600px" value="<?= $item_info[0] ?? '' ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description"> Description :</label>
                        <textarea type="text" name="description" required><?= $item_info[1] ?? '' ?></textarea>
                    </td>
                </tr>
                <?php
                if (!$edit) {
                ?>
                    <tr>
                        <td>
                            <label for="categories">Categories :</label>
                            <select name="categories" id="categories" required>
                                <?php
                                for ($i = 0; $i < sizeof($category_details); $i++) {
                                    echo "<option value='$i'>" . $category_details[$i][0] . "</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td>
                        <label for="price">Price :</label>
                        <input type="number" name="price" placeholder="Enter Price" value="<?= $item_info[3] ?? '' ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="image">Image : </label>
                        <img id="output" width="200" src="../assets/img/<?= $item_info[4] ?? "" ?>" />
                        <input type="file" name="file" id="img" accept="image/*" onchange="loadFile(event)" style="display:none;" />
                        <label for="img" class="itemModifyBtn">Click me to upload image</label>

                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="submit"> Save Changes </button>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>

<footer>

</footer>

</html>