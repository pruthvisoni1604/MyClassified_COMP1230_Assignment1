<?php
session_start();
include '../controllers/profile.php';
check_access(true);
$items = 'class="active"';
$editItem = $_REQUEST['edit'] ?? '-1';
$edit = false;
if ($editItem != '-1') {
    $result1 = mysqli_query($conn, "SELECT * FROM items where id =" . $editItem);
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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/app/assets/js/script.js"></script>
</head>

<body>
    <?php
    require_once("_navbarAdmin.php");
    require_once("_sidenav.php");
    $row = mysqli_fetch_array($result1);
    ?>
    <div class="main">
        <h2 class="title">Add new item</h2>
        <table class="form">
            <form action="../models/addEditItem.php<?php echo $edit ? "?edit=$editItem" : ""; ?>" method="POST" enctype="multipart/form-data">
                <tr>
                    <td>
                        <label for="title"> Title : </label>
                        <input type="text" name="title" placeholder="Enter Title" style="width : 600px" value="<?= $row['title'] ?? '' ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description"> Description :</label>
                        <textarea type="text" name="description" placeholder="Enter Description" required><?= $row['desc'] ?? '' ?></textarea>
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
                                $result = mysqli_query($conn, "SELECT id,name FROM category");
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
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
                        <input type="number" name="price" placeholder="Enter Price" value="<?= $row['price'] ?? '' ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="image">Image : </label>
                        <img id="output" width="200" src="../assets/img/<?= $row['img_name'] ?? "" ?>" />
                        <input type="file" name="file" id="img" accept="image/*" onchange="loadFile(event)" style="display:none" />
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