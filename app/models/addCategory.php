<?php

$title = $_REQUEST['title'];
$description = preg_replace("/\r\n|\r|\n/", '<br/>', $_REQUEST['description']);
$description=str_replace(":"," ",$description);
if (isset($_REQUEST['edit'])) {
    $editItem = $_REQUEST['edit'];

    $fileContent = file("../categoryDetails.txt");
    $file = fopen("../categoryDetails.txt", "w") or die("Unable to open file!");
    for ($i = 0; $i < sizeof($fileContent); $i++) {
        if ($editItem == $i) {
            $txt = "$title:$description\n";
        } else {
            $txt = $fileContent[$i];
        }
        fwrite($file, $txt);
    }
    header("location: ../views/category.php");
} else {
    $file = fopen("../categoryDetails.txt", "a") or die("Unable to open file!");
    $txt = "$title:$description\n";
    fwrite($file, $txt);
    fclose($file);
    header("location: ../views/category.php");
}
