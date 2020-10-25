<?php

if (isset($_POST['submit'])) {

    $fileName = $_FILES['file']['name'];
    $target_file = "assets/img/" . basename($fileName);
    $uploadOk = true;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];

    $allow = array('jpg', 'jpeg', 'png', 'pdf');

    if (!in_array($imageFileType, $allow)) {
        echo " You can not upload files of $imageFileType type! <br>Try uploading files of jpg, jpeg, png, pdf.";
        $uploadOk = false;
    }
    if ($fileSize > 1000000) {
        echo " Your file is too big! Try uploading a smaller file.";
        $uploadOk = false;
    }
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "<br>Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($fileTmpName, $target_file)) {
            echo "The file " . htmlspecialchars(basename($fileName)) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
