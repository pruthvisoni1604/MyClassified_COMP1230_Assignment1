<?php
function check_access($redirect)
{
    session_start();
    if (!isset($_SESSION['user_logged_in']) || !$_SESSION['user_logged_in']) {
        if (!$redirect)
            header('Location: login.php?err=loginRequired');
        return false;
    }
    return true;
}
