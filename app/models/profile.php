<?php
function get($name)
{
    return $_REQUEST[$name] ?? '';
}
function check_access($redirect)
{
    if (!isset($_SESSION['user_logged_in']) || !$_SESSION['user_logged_in']) {
        if ($redirect)
            header('Location: login.php');
        return false;
    }
    return true;
}
function checkAdminDetails()
{
    for ($i = 0; $i < sizeof(file('../adminDetails.txt')); $i++) {
        $admin_info = explode(':', file('../adminDetails.txt')[$i]);
        if ($admin_info[0] == get('username') && trim($admin_info[1]) == md5(get('password'))) {
            $_SESSION["user_logged_in"] = true;
            header('Location: index.php');
            exit();
        }
    }
}
function logout()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION['user_logged_in']);
}
function deleteItem($id)
{
    $fileContent = file("../itemDetails.txt");
    $file = fopen("../itemDetails.txt", "w") or die("Unable to open file!");
    for ($i = 0; $i < sizeof($fileContent); $i++) {
        if ($id != $i) {
            $txt = $fileContent[$i];
        } else {
            $txt = "";
        }
        fwrite($file, $txt);
    }
    header("location: ../views/items.php");
}
