<?php
class RBICalcuatorConnModel
{
    private $__conn;
    function __construct(){

    }
    function connect(){
        // do some thing
        if (!$this->__conn){
            // K?t n?i
            $this->__conn = mysqli_connect('localhost', 'root', '', 'rbi') or die ('Loi ket noi');
            // X? lý truy v?n UTF8 ?? tránh l?i font
            mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
        }
    }
    function getmaxArt($art){
        $this->connect();
        $sql = "select art from tbl_dfb_thin where art <= '" .$art. "'";
        $result = mysqli_query($this->__conn, $sql);
        if (!$result){
            die ('Câu truy van sai');
        }
        $return = array();
               // L?p qua k?t qu? ?? ??a vào m?ng
        while ($row = mysqli_fetch_assoc($result)){
            $return[] = $row;
        }

        // Xóa k?t qu? kh?i b? nh?
        mysqli_free_result($result);
        return $return;
    }


    function getDfb($art, $insp, $level)
    {
        $this->connect();
        $sql = "SELECT " .$level." FROM tbl_dfb_thin WHERE insp='" .$insp."' AND art ='" .$art."'";
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die ('Câu truy van bi sai');
        }
       $return = array();
        // L?p qua k?t qu? ?? ??a vào m?ng
        while ($row = mysqli_fetch_row($result)) {
            $return[] = $row;
            $float = floatval($return);

           // $return = $row[0];
           // return $return;
           // echo $return;
          //  print_r($return);
            //return $return;
            return $float;

        }
        // Xóa k?t qu? kh?i b? nh?
        mysqli_free_result($result);


    }

    function getGff($comStyle)
    {
        $this->connect();
        $sql = "SELECT gffTotal FROM tbl_gff WHERE componentType='" .$comStyle. "'";
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die ('Câu truy van bi sai');
        }
        $return = array();
        // L?p qua k?t qu? ?? ??a vào m?ng
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
           // print_r($return);
        }
        // Xóa k?t qu? kh?i b? nh?
        mysqli_free_result($result);
        return $return;
    }


    function getGff_1($comStyle , $a)
    {
        $this->connect();
        if ($a == 1) $sql = "SELECT small FROM tbl_gff WHERE componentType='" .$comStyle."'";
        else if ($a == 2) $sql = "SELECT medium FROM tbl_gff WHERE componentType='" .$comStyle. "'";
        else if ($a == 3) $sql = "SELECT large FROM tbl_gff WHERE componentType='" .$comStyle. "'";
        else $sql = "SELECT rupture FROM tbl_gff WHERE componentType='" .$comStyle. "'";
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die ('Câu truy van bi sai');
        }
        $return = array();
        // L?p qua k?t qu? ?? ??a vào m?ng
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
           // print_r($return);
        }
        // Xóa k?t qu? kh?i b? nh?
        mysqli_free_result($result);
        return $return;
    }

    function  getMw($fluid)
    {
        $this->connect();
        $sql =  "SELECT MW FROM tbl_properties_level1 WHERE Fluid = '" .$fluid."'";
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die ('Câu truy van bi sai');
        }
        $return = array();
        // L?p qua k?t qu? ?? ??a vào m?ng
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
           // print_r($return);
        }
        // Xóa k?t qu? kh?i b? nh?
        mysqli_free_result($result);
        return $return;
    }

    function  getC($a)
    {
        $this->connect();
        $sql = "SELECT SIUnits FROM tbl_si_conversion WHERE conversionFactory = '" .$a."'";
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die ('Câu truy van bi sai');
        }
        $return = array();
        // L?p qua k?t qu? ?? ??a vào m?ng
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
          //  print_r($return);
        }
        // Xóa k?t qu? kh?i b? nh?
        mysqli_free_result($result);
        return $return;
    }

    function getAIT($fluid)
    {
        $this->connect();
        $sql = "SELECT Auto FROM tbl_properties_level1 WHERE Fluid = '" .$fluid."'";
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die ('Câu truy van bi sai');
        }
        $return = array();
        // L?p qua k?t qu? ?? ??a vào m?ng
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
           // print_r($return);
        }
        // Xóa k?t qu? kh?i b? nh?
        mysqli_free_result($result);
        return $return;
    }

    function  getcmd($fluid, $a,$type,$getX)
    {
        $this->connect();
        if ($a == 1)
        {
            $sql = "SELECT CAINL_" .$type."_" .$getX." FROM tbl_component_damage WHERE Fluid = '" .$fluid."'";
        }
        else if ($a == 2)
        {
            $sql = "SELECT CAIL_" .$type. "_" .$getX." FROM tbl_component_damage WHERE Fluid = '" .$fluid."'";
        }
        else if($a == 3)
        {
            $sql = "SELECT IAINL_" .$type. "_" .$getX." FROM tbl_component_damage WHERE Fluid = '" .$fluid. "'";
        }
        else
        {
            $sql = "SELECT IAIL_" .$type."_" .$getX." FROM tbl_component_damage WHERE Fluid = '" .$fluid."'";
        }

            $result = mysqli_query($this->__conn, $sql);
            if (!$result) {
                die ('Câu truy van bi sai');
            }
            $return = array();
            // L?p qua k?t qu? ?? ??a vào m?ng
            while ($row = mysqli_fetch_assoc($result)) {
                $return[] = $row;
                //print_r($return);
            }
            // Xóa k?t qu? kh?i b? nh?
            mysqli_free_result($result);
            return $return;
        }

    function  getinj($fluid,$type,$getX,$a)
    {
        $this->connect();
        if ($a == 1)
        {
            $sql = "SELECT CAINL_" .$type. "_" .$getX." FROM tbl_component_damage_personel WHERE Fluid = '" .$fluid."'";
        }
        else if ($a == 2)
        {
            $sql = "SELECT CAIL_" .$type."_" .$getX." FROM tbl_component_damage_personel WHERE Fluid = '" .$fluid."'";
        }
        else if ($a == 3)
        {
            $sql = "SELECT IAINL_" .$type."_" .$getX." FROM tbl_component_damage_personel WHERE Fluid = '" .$fluid."'";
        }
        else
        {
            $sql = "SELECT IAIL_" .$type."_" .$getX." FROM tbl_component_damage_personel WHERE Fluid = '" .$fluid."'";
        }
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die ('Câu truy van bi sai');
        }
        $return = array();
        // L?p qua k?t qu? ?? ??a vào m?ng
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
           // print_r($return);
        }
        // Xóa k?t qu? kh?i b? nh?
        mysqli_free_result($result);
        return $return;
    }


    function  getCp_ideal($fluid)
    {
        $this->connect();
        $sql = "SELECT ideal FROM tbl_properties_level1 WHERE Fluid = '" .$fluid."'";
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die ('Câu truy van bi sai');
        }
        $return = array();
        // L?p qua k?t qu? ?? ??a vào m?ng
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
           // print_r($return);
        }
        // Xóa k?t qu? kh?i b? nh?
        mysqli_free_result($result);
        return $return;
    }

    function  getCp($fluid,$getX)
    {
        $this->connect();
        $sql = "SELECT " .$getX." FROM tbl_properties_level1 WHERE Fluid = '" .$fluid."'";
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die ('Câu truy van bi sai');
        }
        $return = array();
        // L?p qua k?t qu? ?? ??a vào m?ng
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
           // print_r($return);
        }
        // Xóa k?t qu? kh?i b? nh?
        mysqli_free_result($result);
        return $return;
    }
}
$demo = new RBICalcuatorConnModel();
//$demo->getmaxArt(0.02);
$demo->getDfb(0.02,1,'A');
//$demo->getGff('COLMID');
//$demo->getGff_1('COLMID',1);
//$demo ->getMw('C5');
//$demo->getAIT('C5');
//$demo ->getcmd('EO','1','gas','a');
//$demo ->getC(1);
//$demo ->getinj('EO','gas','a','1');
//$demo ->getCp_ideal('C5');
//$demo ->getCp('C5','A');


