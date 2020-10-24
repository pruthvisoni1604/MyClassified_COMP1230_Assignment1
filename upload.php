<?php

if (isset($_POST['submit'])) {
     $file = $_FILES['file'];

     $fileName = $_FILES['file']['name'];
     $fileTmpName = $_FILES['file']['tmp_name'];
     $fileSize = $_FILES['file']['size'];
     $fileError = $_FILES['file']['error'];
     $fileType = $_FILES['file']['type'];

     $fileExt = explode('.', $fileName);
     $fileActualExt = strtolower(end($fileExt));

     $allow = array('jpg' , 'jpeg' , 'png' , 'pdf');

     if(in_array($fileActualExt , $allow)){
         if($fileError === 0){
             if($fileSize < 1000000){
                 $fileNameNew = uniqid ('' ,true).".".$fileActualExt;
                 $fileDestination = 'uploads/'.$fileNameNew; 
                 move_uploaded_file($fileTmpName, $fileDestination);
                 header("Loaction: try.php?uploadsuccess");

             }else{
                 echo " Yuor file is too big!";
             }

         }else{
             echo " There was an error uploding your file!";
         }


     }else{
         echo " You can not upload files of this type! ";
     }
}
