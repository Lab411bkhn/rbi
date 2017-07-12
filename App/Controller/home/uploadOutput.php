<?php

$uploaddir = "output/"; // Relative Upload Location of data file

if (is_uploaded_file($_FILES['file']['tmp_name'])) {

    $uploadfile = $uploaddir . basename($_FILES['file']['name']);

   // echo "File ". $_FILES['file']['name'] ." uploaded successfully. ";

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {

    }

    else

        print_r($_FILES);

}

else {
    
    print_r($_FILES);

}

?>
