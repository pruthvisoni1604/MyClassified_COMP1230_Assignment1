<?php
session_start();
include '../controllers/profile.php';
check_access(true);
$category = 'class="active"';
$editItem = $_REQUEST['edit'] ?? '-1';
$edit = false;
$category_info = [];
if ($editItem != '-1') {
    $result = mysqli_query($conn, "SELECT * FROM category where id =" . $editItem);
    $row = mysqli_fetch_array($result);
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
    ?>

    <div class="main">
        <h2 class="title">Add/Edit item</h2>
        <table class="form">
            <form action="../models/addEditCategory.php<?php echo $edit ? "?edit=$editItem" : ""; ?>" method="POST" enctype="multipart/form-data">
                <tr>
                    <td>
                        <label for="title"> Title : </label>
                        <input type="text" name="title" placeholder="Enter Title" style="width : 600px" value="<?= $row['name'] ?? '' ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description"> Description :</label>
                        <textarea type="text" name="description" required><?= $row['desc'] ?? '' ?></textarea>
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