<?php
class database
{
    private $__conn;

    function __construct()
    {

    }

    // Hàm Kết Nối
    function connect()
    {
        // do some thing
        if (!$this->__conn) {
            // Kết nối
            $this->__conn = mysqli_connect('localhost', 'root', '', 'rbi') or die ('Lỗi kết nối');
            // Xử lý truy vấn UTF8 để tránh lỗi font
            mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
        }
    }

    // Hàm Ngắt Kết Nối
    function dis_connect()
    {
        // do some thing
        // Nếu đang kết nối thì ngắt
        if ($this->__conn) {
            mysqli_close($this->__conn);
        }
    }

    // Hàm Insert
    function insert($table, $data)
    {
        // do some thing
        $this->connect();
        // Lưu trữ danh sách field
        $field_list = '';
        // Lưu trữ danh sách giá trị tương ứng với field
        $value_list = '';
        // Lặp qua data
        foreach ($data as $key => $value) {
            $field_list .= ",$key";
            $value_list .= ",'" . mysql_escape_string($value) . "'";
        }
        // Vì sau vòng lặp các biến $field_list và $value_list sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
        $sql = 'INSERT INTO ' . $table . '(' . trim($field_list, ',') . ') VALUES (' . trim($value_list, ',') . ')';
        $ret = mysqli_query($this->__conn, $sql) or die(mysqli_error($this->__conn));
        return $ret;
    }

    // Hàm Update
    function update($table, $data, $where)
    {
        $this->connect();
        $sql = '';
        // Lặp qua data
        foreach ($data as $key => $value) {
            $sql .= "$key = '" . mysql_escape_string($value) . "',";
        }
        // Vì sau vòng lặp biến $sql sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
        $sql = 'UPDATE ' . $table . ' SET ' . trim($sql, ',') . ' WHERE ' . $where;
        $ret = mysqli_query($this->__conn, $sql) or die(mysqli_error($this->__conn));
        return $ret;
    }

    // Hàm delete
    function remove($table, $where)
    {
        $this->connect();
        // Delete
        $sql = "DELETE FROM $table WHERE $where";
        $ret = mysqli_query($this->__conn, $sql) or die(mysqli_error($this->__conn));
        return $ret;
        // }
    }

// Hàm lấy danh sách
        function get_list($table, $select)
        {
            $this->connect();
            $sql = "SELECT $select FROM $table";
            $result = mysqli_query($this->__conn, $sql);
            if (!$result) {
                die ('Câu truy vấn bị sai');
            }
            $return = array();
            // Lặp qua kết quả để đưa vào mảng
            while ($row = mysqli_fetch_array($result)) {
                $return[] = $row;
            }
            // Xóa kết quả khỏi bộ nhớ
            mysqli_free_result($result);
            $this->dis_connect();
            return $return;
        }

        function get_list_assoc($table, $select)
        {
            $this->connect();
            $sql = "SELECT $select FROM $table";
            $result = mysqli_query($this->__conn, $sql);
            if (!$result) {
                die ('Câu truy vấn bị sai');
            }
            $return = array();
            // Lặp qua kết quả để đưa vào mảng
            while ($row = mysqli_fetch_assoc($result)) {
                $return[] = $row;
            }
            // Xóa kết quả khỏi bộ nhớ
            mysqli_free_result($result);
            return $return;
        }

        // Hàm lấy 1 record dùng trong trường hợp lấy chi tiết tin
        function get_row($table, $select, $where)
        {
            $this->connect();
            $sql = "SELECT $select FROM $table WHERE $where";
            $result = mysqli_query($this->__conn, $sql);
            if (!$result) {
                die(mysqli_error($this->__conn));
            }
            $row = mysqli_fetch_assoc($result);
            // Xóa kết quả khỏi bộ nhớ
            mysqli_free_result($result);
            if ($row) {
                return $row;
            }
            return false;
        }

        function demo()
        {
            $this->connect();
            $sql = "SELECT * FROM user WHERE username='trantam99'";
            $result = mysqli_query($this->__conn, $sql) or die(mysqli_error($this->__conn));
            $row = mysqli_fetch_array($result);
            echo $row['info'];
        }

}

//$demo = new database();
//////$row = $demo->get_row('user', '*', "username='haiduong'");
//$data = array(
//    'username' => "demow1",
//    'password' => "q222"      
//);
//$row = $demo->insert('user', $data);
//foreach ($data as $key => $value) {
//    echo $value;
//    
//}
////echo $row[1]['info'];