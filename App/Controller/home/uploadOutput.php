
<?php

$uploaddir = "output/"; // Relative Upload Location of data file

if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    echo "<script type='text/javascript'>notice();</script>";
    $uploadfile = $uploaddir . basename($_FILES['file']['name']);

    // echo "File ". $_FILES['file']['name'] ." uploaded successfully. ";

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {

        echo "<script type='text/javascript'>notice();</script>";

    }

    else

        print_r($_FILES);

}

else {

    print_r($_FILES);

}

?>
<script>
    function notice () {
        notify = new Notification(
            'Ban co mot thong bao moi ', // Tiêu ?? thông báo
            {
                body: 'Co file moi .', // N?i dung thông báo
                // icon: 'https://freetuts.net/public/logo/icon.png', // Hình ?nh
                tag: 'http://lab411s.esy.es/RBI/rbi/input/' // ???ng d?n
            }
        );
        // Th?c hi?n khi nh?p vào thông báo
        notify.onclick = function () {
            window.location.href = this.tag; // Di chuy?n ??n trang cho url = tag
        }
    }
</script>