<?php

if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
/*
    $expensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $expensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }
*/
    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if (empty($errors) == true) {
        //move_uploaded_file($file_tmp, "/var/www/html/p3/example/uploads/" . $file_name);
        //echo "Success";
        var_dump($_FILES);
    } else {
        print_r($errors);
    }
}