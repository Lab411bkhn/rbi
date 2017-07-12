
<?php
// upload file equipmentUnit
if(isset($_POST["submit1"])) {
    if (isset($_FILES['fileupload_1'])) {
        $file_path = $_FILES['fileupload_1']["tmp_name"];
        $file_name = $_FILES['fileupload_1']["name"];
        $file_type = $_FILES['fileupload_1']["type"];
        $new_path = "C:/Users/DOG/Dropbox/Lab_Associates Team Folder/RBI/input/" . $file_name;
         //$new_path = "http://lab411s.esy.es/RBI/rbi/input/".$file_name;
        if (file_exists($new_path)) {
            //echo"tep da ton tai";
            unlink($new_path);
        }
        move_uploaded_file($file_path, $new_path);
    }
}
header('Location: ../../View/home/index.php?data=home&action=listEquipmentUnit&left=home_left');

/// upload file component
if(isset($_POST["submit2"])) {
    if (isset($_FILES['fileupload_1'])) {
        $file_path = $_FILES['fileupload_1']["tmp_name"];
        $file_name = $_FILES['fileupload_1']["name"];
        $file_type = $_FILES['fileupload_1']["type"];
        $new_path = "C:/Users/DOG/Dropbox/Lab_Associates Team Folder/RBI/input/" . $file_name;
        // $new_path = "C:/xampp/htdocs/rbi/App/Controller/home/input/".$file_name;
        if (file_exists($new_path)) {
            //echo"tep da ton tai";
            unlink($new_path);
        }
        move_uploaded_file($file_path, $new_path);
    }
}
header('Location: ../../View/home/index.php?data=home&action=listComponent&left=home_left');

/// upload file equipmentTemplate
if(isset($_POST["submit3"])) {
    if (isset($_FILES['fileupload_1'])) {
        $file_path = $_FILES['fileupload_1']["tmp_name"];
        $file_name = $_FILES['fileupload_1']["name"];
        $file_type = $_FILES['fileupload_1']["type"];
        $new_path = "C:/Users/DOG/Dropbox/Lab_Associates Team Folder/RBI/input/" . $file_name;
        // $new_path = "C:/xampp/htdocs/rbi/App/Controller/home/input/".$file_name;
        if (file_exists($new_path)) {
            //echo"tep da ton tai";
            unlink($new_path);
        }
        move_uploaded_file($file_path, $new_path);
    }
}
header('Location: ../../View/home/index.php?data=home&action=listEquipmentTemp&left=home_left');
/// uploaf file eqipment
if(isset($_POST["submit4"])) {
    if (isset($_FILES['fileupload_1'])) {
        $file_path = $_FILES['fileupload_1']["tmp_name"];
        $file_name = $_FILES['fileupload_1']["name"];
        $file_type = $_FILES['fileupload_1']["type"];
        $new_path = "C:/Users/DOG/Dropbox/Lab_Associates Team Folder/RBI/input/" . $file_name;
        // $new_path = "C:/xampp/htdocs/rbi/App/Controller/home/input/".$file_name;
        if (file_exists($new_path)) {
            //echo"tep da ton tai";
            unlink($new_path);
        }
        move_uploaded_file($file_path, $new_path);
    }
}
header('Location: ../../View/home/index.php?data=home&action=listEquipment&left=home_left');
?>


