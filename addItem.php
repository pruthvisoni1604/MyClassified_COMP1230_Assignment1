<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AdminPage</title>
    <meta name="author" content="Pruthvi Soni, Sahay Patel, Namya Patel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creating a responsive website with the help of html,css and php">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="assets/js/script.js"></script>
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
    <div class="navbar">
        <b>My Classified</b>
        <a href="index.php" class="active">Home</a>
        <a href="items.php">Items</a>
        <div class="dropdown">
            <button class="dropBtn" onclick="dropFunction()">Categories </button>

        </div>
        <a href="search.php">Search</a>
        <a href="login.php" style="float: right;"> <i class="fa fa-sign-in"></i> Log-in</a>
    </div>
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
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <tr>
                    <td>
                        <label for="title"> Title : </label>
                        <input type="text" name="title" placeholder="Enter Title" style="width : 600px">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description"> Description :</label>
                        <textarea type="text" name="description"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="categories">Categories :</label>
                        <select name="categories" id="categories">
                            <option>Electronics</option>
                            <option>Men's Fashion</option>
                            <option>Women's Fashion</option>
                            <option>Home Accessories</option>
                            <option>Books</option>
                            <option>Toys</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="price">Price :</label>
                        <input type="number" name="price" placeholder="Enter Price">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="image">Image : </label>
                        <input type="file" name="file"><br>
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