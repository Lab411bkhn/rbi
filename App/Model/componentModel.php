<?php
/**
 * Description of equipmentModel
 *
 * @author Dương
 */
require_once 'database.php';
class componentModel extends database{
    //put your code here
    function __construct() {
        
    }
    
    function setComponent($eq) {
        //$this->userName = $userName;
    }
    
    public function getAllComponent() {
        return $this->get_list("tbl_component","componentName");
    }
}
