<?php

if (isset($_POST['submit'])) {
    $title = $_REQUEST['title'];
    $description = preg_replace("/\r\n|\r|\n/", '<br/>', $_REQUEST['description']);
    $category = $_REQUEST['categories'];
    $price = $_REQUEST['price'];
    $imageName = $category . "_" . $title . "_" . $price;

    if (imageUpload($imageName)) {
        $file = fopen("../itemDetails.txt", "a") or die("Unable to open file!");
        $imageName=$imageName . "." . strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
        $txt = "$title:$description:$category:$price:$imageName\n";
        fwrite($file, $txt);
        fclose($file);
        header("location: ../views/items.php");
    }
}
function imageUpload($fileNameToBe)
{
    $fileName = $_FILES['file']['name'];
    $uploadOk = true;
    $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $target_file = "..\assets\img\\" . $fileNameToBe . "." . $imageFileType;
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];

    $allow = array('jpg', 'jpeg', 'png', 'gif');

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
        $uploadOk = false;
    }
    if ($uploadOk == false) {
        echo "<br>Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($fileTmpName, $target_file)) {
            echo "The file " . htmlspecialchars(basename($fileName)) . " has been uploaded.";
            return true;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    return false;
}
