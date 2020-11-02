<?php

if (isset($_POST['submit'])) {
    $title = $_REQUEST['title'];
    $description = preg_replace("/\r\n|\r|\n/", '<br/>', $_REQUEST['description']);
    $description=str_replace(":"," ",$description);
    $category = $_REQUEST['categories'] ?? "";
    $price = $_REQUEST['price'];
    $imageName = $category . "_" . $title . "_" . $price;
    $editItem = $_REQUEST['edit'] ?? -1;
    if ($editItem != -1) {
        $fileName = $_FILES['file']['name'];
        $fileContent = file("../itemDetails.txt");
        $file = fopen("../itemDetails.txt", "w") or die("Unable to open file!");
        for ($i = 0; $i < sizeof($fileContent); $i++) {
            if ($editItem == $i) {
                $item_info = explode(":", $fileContent[$i]);
                $category = $item_info[2];
                if ($fileName == "") {
                    $txt = "$title:$description:$category:$price:$item_info[4]";
                } else {
                    $imageName = $category . "_" . $title . "_" . $price;
                    if (imageUpload($imageName, false)) {
                        $txt = "$title:$description:$category:$price:$imageName" . "." . strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION)) . "\n";
                    }
                }
            } else {
                $txt = $fileContent[$i];
            }
            fwrite($file, $txt);
        }
        header("location: ../views/displayCategory.php?id=$category");
    } else {
        if (imageUpload($imageName, true)) {
            $file = fopen("../itemDetails.txt", "a") or die("Unable to open file!");
            if ($_FILES['file']['name'] == "") {
                $imageName = "No_Image_Available.png";
            } else {
                $imageName = $imageName . "." . strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
            }
            $txt = "$title:$description:$category:$price:$imageName\n";
            fwrite($file, $txt);
            fclose($file);
            header("location: ../views/items.php");
        }
    }
}
function imageUpload($fileNameToBe, $checkSameName)
{
    $fileName = $_FILES['file']['name'];
    echo $fileName;
    $uploadOk = true;
    $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $target_file = "../assets/img/" . $fileNameToBe . "." . $imageFileType;
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $allow = array('jpg', 'jpeg', 'png', 'gif');

    if ($fileName == "" && $fileSize == 0) {
        return true;
    }
    if (!in_array($imageFileType, $allow)) {
        echo " You can not upload files of $imageFileType type! <br>Try uploading files of jpg, jpeg, png, pdf.";
        $uploadOk = false;
    }
    if ($fileSize > 1000000) {
        echo " Your file is too big! Try uploading a smaller file.";
        $uploadOk = false;
    }
    if (file_exists($target_file) && $checkSameName) {
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
