<?php
session_start();

for ($i = 0; $i < sizeof(file('adminDetails')); $i++) {
    $user_info = explode(':', file('adminDetails')[$i]);

    if ($user_info[0] == get('username') && trim($user_info[1]) == md5(get('password'))) {
        $_SESSION['user_logged_in'] = true;
        header('Location: index.php');
        exit();
    }
}
function get($name)
{
    return $_REQUEST[$name] ?? '';
}
?>
<?php
include 'checkAccess.php';
$isLoggedIn = check_access(true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Log-in</title>
    <meta name="author" content="Pruthvi Soni, Sahay Patel, Namya Patel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creating a responsive website with the help of html,css and php">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="assets/js/script.js"></script>
    <style>
        .login {
            text-align: center;
            display: block;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <b>My Classified</b>
        <a href="index.php" class="active">Home</a>
        <a href="items.php">Items</a>
        <div class="dropdown">
            <button class="dropBtn" onclick="dropFunction()">Categories &#9662;</button>
            <div class="dropdown-content" id="dropdown">
                <a href="electronics.html">Electronics</a>
                <a href="mens_fashion.html">Men's Fashion</a>
                <a href="womens_fashion.html">Women's Fashion</a>
                <a href="home_accessories.html">Home accessories</a>
                <a href="books.html">Books</a>
                <a href="toys.html">Toys</a>
            </div>
        </div>
        <a href="search.php">Search</a>
        <a href="login.php" style="float: right;"> <i class="fa fa-sign-in"></i> Log-in</a>
    </div>
    <div class="login">
        <form action="">
            <label for="username">Username</label>
            <input type="text" for="username" name="username" placeholder="username" required>

            <label for="password">Password</label>
            <input type="password" for="password" name="password" placeholder="password" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </form>
    </div>
</body>

<footer>

</footer>

</html>