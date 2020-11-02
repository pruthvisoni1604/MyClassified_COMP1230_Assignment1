<?php
$category_details=array();

for($i=0;$i<sizeof(file("../categoryDetails.txt"));$i++){
    $category_info=explode(":",file("../categoryDetails.txt")[$i]);
    $category_details[$i][]=$category_info[0];
    $category_details[$i][]=$category_info[1];

}
