<?php
include_once("../config/db.php");
if (isset($_REQUEST['edit'])) {
    $id = $_REQUEST['edit'];
    $name = $_REQUEST['title'];
    $desc = $_REQUEST['description'];

    $sql = "UPDATE `category` SET `name`='" . $name . "',`desc`='" . $desc . "' WHERE id=" . $id;
    if (mysqli_query($conn, $sql)) {
        header("location: ../views/category.php");
    } else {
        echo "Unable to save post";
    }

    $editItem = $_REQUEST['edit'];

    header("location: ../views/category.php");
} else {
    $name = $_REQUEST['title'];
    $desc = $_REQUEST['description'];
    $sql = "INSERT INTO `category`(`name`, `desc`, `status`) VALUES ('" . $name . "','" . $desc . "','SHOW')";
    if (mysqli_query($conn, $sql)) {
        header("location: ../views/category.php");
    } else {
        echo "Unable to save post";
    }
}
