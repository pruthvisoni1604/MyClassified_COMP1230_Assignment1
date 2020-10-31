<?php
session_start();
include '../controllers/profile.php';
check_access(true);
$category = 'class="active"';
$editItem = $_REQUEST['edit'] ?? '-1';
$edit=false;
if ($editItem != '-1') {
    $item_info = explode(':', file('../itemDetails.txt')[$editItem]);
    $item_info[1]=str_replace("<br/>","\r\n",$item_info[1]);
    $edit=true;
    $_GET['edit']=$editItem;
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
    ?>

    <div class="main">
        <h2 style="color: rgb(65, 168, 175); font-size: 20px;">Add/Edit item</h2>
        <table class="form">
            <form action="../models/addCategory.php<?php echo $edit?"?edit=$editItem":"";?>" method="POST" enctype="multipart/form-data">
                <tr>
                    <td>
                        <label for="title"> Title : </label>
                        <input type="text" name="title" placeholder="Enter Title" style="width : 600px" value="<?=$item_info[0]?? ''?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description"> Description :</label>
                        <textarea type="text" name="description" ><?=$item_info[1]?? ''?></textarea>
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