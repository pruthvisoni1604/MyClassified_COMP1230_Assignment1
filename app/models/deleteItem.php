<?php
include_once("../config/db.php");
$id = $_REQUEST['id'];
$sql = "DELETE FROM `items` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if ($result)
    header("location: ../views/items.php");
else
    echo "<br>adding data was failed";
