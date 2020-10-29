<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/config/data.php');
include($_SERVER['DOCUMENT_ROOT'] . '/app/models/profile.php');

function checkAdminDetails(){
    for ($i = 0; $i < sizeof(file('../adminDetails.txt')); $i++) {
        $user_info = explode(':', file('../adminDetails.txt')[$i]);
        if ($user_info[0] == get('username') && trim($user_info[1]) == md5(get('password'))) {
            $_SESSION["user_logged_in"] = true;
            header('Location: index.php?ui="ui"');
            exit();
        }
    }
}