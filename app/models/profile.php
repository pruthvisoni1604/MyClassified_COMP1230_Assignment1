<?php
function check_access($redirect)
{
    if (!isset($_SESSION['user_logged_in']) || !$_SESSION['user_logged_in']) {
        if ($redirect)
            header('Location: login.php?err=loginRequired');
        return false;
    }
    return true;
}
function get($name)
{
    return $_REQUEST[$name] ?? '';
}
