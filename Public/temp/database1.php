<?php
class database1 {
    private $__conn;
    function __construct() {
        
    }
    // Hàm Kết Nối
    function connect(){
        // do some thing
        if (!$this->__conn){
            // Kết nối
            $this->__conn = mysqli_connect('192.168.0.100', 'root', 'root   ', 'rbi') or die ('Lỗi kết nối');
            echo "Connect Successfully";
            // Xử lý truy vấn UTF8 để tránh lỗi font
            mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
        }
    }
}

$demoDa = new database();
$demoDa->connect();