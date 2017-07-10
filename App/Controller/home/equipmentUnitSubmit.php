<?php
//require'../../View/home/equipmentUnitList.php';
if(isset($_FILES['fileupload_1'])) {
    $file_path = $_FILES['fileupload_1']["tmp_name"];
    $file_name = $_FILES['fileupload_1']["name"];
    $file_type = $_FILES['fileupload_1']["type"];
    $new_path = "C:/Users/DOG/Dropbox/Lab_Associates Team Folder/RBI/input/" . $file_name;
    if (file_exists($new_path)) {
        //echo"tep da ton tai";
        unlink($new_path);
    }
    move_uploaded_file($file_path, $new_path);
}
?>


