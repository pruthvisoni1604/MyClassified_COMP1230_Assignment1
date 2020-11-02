<?php
$category_details = array();
for ($i = 0; $i < sizeof(file("../categoryDetails.txt")); $i++) {
    $category_info = explode(":", file("../categoryDetails.txt")[$i]);
    $category_details[$i][] = $category_info[0];
    $category_details[$i][] = $category_info[1];
}

$item_details = array();
for ($i = 0; $i < sizeof(file("../itemDetails.txt")); $i++) {
    $item_info = explode(":", file("../itemDetails.txt")[$i]);
    $item_details[$i][] = $item_info[0];
    $item_details[$i][] = $item_info[1];
    $item_details[$i][] = $item_info[2];
    $item_details[$i][] = $item_info[3];
    $item_details[$i][] = $item_info[4];
}
