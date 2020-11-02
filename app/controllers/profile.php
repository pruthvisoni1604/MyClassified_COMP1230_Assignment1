<?php
include($_SERVER['DOCUMENT_ROOT'] . '/app/config/data.php');
include($_SERVER['DOCUMENT_ROOT'] . '/app/models/profile.php');

if (isset($_REQUEST['logout']))
    logout();

if (isset($_REQUEST['deleteItem'])) {
    deleteItem($_REQUEST['deleteItem']);
}
