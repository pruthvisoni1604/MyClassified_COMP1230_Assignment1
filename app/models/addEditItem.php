<?php
include_once("../config/db.php");

if (isset($_POST['submit'])) {
    $title = $_REQUEST['title'];
    $description = $_REQUEST['description'];
    $category = $_REQUEST['categories'] ?? "";
    $price = $_REQUEST['price'];
    $imageName = $category . "_" . $title . "_" . $price;

    $editItem = $_REQUEST['edit'] ?? -1;

    if ($editItem != -1) {
        $fileName = $_FILES['file']['name'] ?? '';
        if ($fileName == "") {
            $sql = "UPDATE `items` SET `title`='$title',`desc`='$description',`price`=$price WHERE id =$editItem";
        } else {
            $imageName = $category . "_" . $title . "_" . $price;
            if (imageUpload($imageName, false)) {
                $imageName = $imageName . "." . strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
                $sql = "UPDATE `items` SET `title`='$title',`desc`='$description',`price`=$price,`img_name`='$imageName' WHERE id =$editItem";
            }
        }

        if (mysqli_query($conn, $sql)) {
            header("location: ../views/items.php");
        } else {
            echo "Unable to save post";
        }
    } else {
        if (imageUpload($imageName, true)) {
            if ($_FILES['file']['name'] == "") {
                $imageName = "No_Image_Available.png";
            } else {
                $imageName = $imageName . "." . strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
            }
            $sql = "INSERT INTO `items`(`title`, `desc`, `price`, `cat_id`, `img_name`, `status`, `front_page`) VALUES ('$title','$description',$price,$category,'$imageName','SHOW','YES')";
            $result = mysqli_query($conn, $sql);
            if ($result)
                header("location: ../views/items.php");
            else
                echo "<br>adding data was failed";
        }
    }
}
function imageUpload($fileNameToBe, $checkSameName)
{
    $fileName = $_FILES['file']['name'];
    $uploadOk = true;
    $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $target_file = "../assets/img/" . $fileNameToBe . "." . $imageFileType;
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $allow = array('jpg', 'jpeg', 'png', 'gif');

    if ($fileName == "" && $fileSize == 0) {
        //returning true because uploading file is not required and this block will execute if no image was uploaded.
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
        echo "<br>Sorry, your file was not uploaded.<br>Please <a href=\"../views/addEditItem.php\">Click Here To Try Again.</a>";
    } else {
        if (move_uploaded_file($fileTmpName, $target_file)) {
            echo "The file " . htmlspecialchars(basename($fileName)) . " has been uploaded.<br>Please <a href=\"../views/items.php\">Click Here To go back.</a>";
            return true;
        } else {
            echo "Sorry, there was an error uploading your file.<br>Please <a href=\"../views/addEditItem.php\">Click Here To Try Again.</a>";
        }
    }
    return false;
}
