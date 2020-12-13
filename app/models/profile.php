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
    $username = get('username');
    if ($username == "") {
        return;
    }
    $password = md5(get('password'));

    $con = new mysqli("localhost", "f0t13_root", "q1!w2@E3#", "f0t13_my_classified");
    if ($con->connect_error) {
        die("Failed to connect:" . $con->connect_error);
    } else {
        $stmt = $con->prepare("select * from members where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if ($data['password'] === $password) {
                $_SESSION["user_logged_in"] = true;
                header('Location: index.php');
                exit();
            } else {
                echo "invalid pass";
            }
        } else {
            echo "invalid username";
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
