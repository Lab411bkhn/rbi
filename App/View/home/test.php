
<form method="post" enctype="multipart/form-data">
    <div class="content">
        <div class="row">
            <span>Equipment template:</span>
            <input type="file" name="fileupload_2"/><input type="submit" value="submit" name="submit2"/>
        </div>
</form>
<?php
if(isset($_POST["submit2"])) {
if (isset($_FILES['fileupload_2'])) {
$file_path = $_FILES['fileupload_2']["tmp_name"];
$file_name = $_FILES['fileupload_2']["name"];
$file_type = $_FILES['fileupload_2']["type"];


$new_path = "C:/Users/DOG/Dropbox/Lab_Associates Team Folder/RBI/input/" . $file_name;
move_uploaded_file($file_path, $new_path);
}
}
?>

