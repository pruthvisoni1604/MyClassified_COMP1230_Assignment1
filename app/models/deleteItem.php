<?php
$fileContent = file("../itemDetails.txt");
$file = fopen("../itemDetails.txt", "w") or die("Unable to open file!");
$id = $_REQUEST['id'] ?? -1;
if ($id != -1) {
    for ($i = 0; $i < sizeof($fileContent); $i++) {
        if ($id != $i) {
            $txt = $fileContent[$i];
        }
        else{
            $txt="";
        }
        fwrite($file, $txt);
    }
    
}
header("location: ../views/items.php");
