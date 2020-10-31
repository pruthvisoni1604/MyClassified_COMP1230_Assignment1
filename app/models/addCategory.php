<?php
$title = $_REQUEST['title'];
$description = preg_replace("/\r\n|\r|\n/", '<br/>', $_REQUEST['description']);
$file = fopen("../categoryDetails.txt", "a") or die("Unable to open file!");
$txt = "$title:$description\n";
fwrite($file, $txt);
fclose($file);
header("location: ../views/category.php");
