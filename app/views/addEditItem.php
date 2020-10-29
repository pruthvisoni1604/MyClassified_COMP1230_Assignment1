<?php
$editItem = $_REQUEST['edit'] ?? '-1';
if ($editItem != '-1') {
    $item_info = explode(':', file('../itemDetails.txt')[$editItem]);
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
    session_start();
    include '../controllers/profile.php';
    check_access(true);
    $items = 'class="active"';
    require_once("_navbarAdmin.php");
    ?>
    <div class="sideNav">
        <h2 style="color: rgb(65, 168, 175); text-align: center; font-size: 20px;">Categories</h2>
        <a href="electronics.html">Electronics</a>
        <a href="mens_fashion.html">Men's Fashion</a>
        <a href="womens_fashion.html">Women's Fashion</a>
        <a href="home_accessories.html">Home accessories</a>
        <a href="books.html">Books</a>
        <a href="toys.html" style="border-bottom: solid gray 1px;">Toys</a>
    </div>

    <div class="main">
        <h2 style="color: rgb(65, 168, 175); text-align: center; font-size: 20px;">Add new item</h2>
        <table class="form">
            <form action="../models/upload.php" method="POST" enctype="multipart/form-data">
                <tr>
                    <td>
                        <label for="title"> Title : </label>
                        <input type="text" name="title" placeholder="Enter Title" style="width : 600px" value="<?=$item_info[0]?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description"> Description :</label>
                        <textarea type="text" name="description" value="<?=$item_info[1]?>"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="categories">Categories :</label>
                        <select name="categories" id="categories"  value='3'>
                            <option value='0'>Books</option>
                            <option value='1'>Electronics</option>
                            <option value='2'>Halloween Items</option>
                            <option value='3'>Home Accessories</option>
                            <option value='4'>Men's Fashion</option>
                            <option value='5'>Women's Fashion</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="price">Price :</label>
                        <input type="number" name="price" placeholder="Enter Price" value="<?=$item_info[3]?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="image">Image : </label>
                        <img id="output" width="200" />
                        <input type="file" name="file" accept="image/*" onchange="loadFile(event)" value="<?=$item_info[4]?>"><br>
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