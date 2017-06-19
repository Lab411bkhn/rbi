<link rel="stylesheet" href="../../../Public/css/details.css">
<?php
class inputParameter{
    function inputParameter($type) {
        $this->type = $type;
    }
    
    function creatForm(){   /*tao form nhap cac gia tri cua equipment*/
        $textTilte = "Undefined";
        switch ($this->type) {
            case "inputDsCode":
                $textTilte = "Design Code";
                break;
            
            case "inputSite":
                $textTilte = "Site";
                break;
            
            case "inputFacility":
                $textTilte = "Facility";
                break;
            
            case "inputManu":
                $textTilte = "Manufacturer";
                break;
            
            default:
                break;
        }
        ?>
        <div id="inputParameterDialog" title="Dialog Form">
            <form action="../../Controller/details/inputParameterController.php" method="post">
                <label>Add <?php echo $textTilte;?></label><br/>
                <input id="inputParam" name="<?php echo $this->type;?>" type="text">
                <input id="submit" type="submit" value="Submit">
                <a href="../../View/home/index.php?data=home&action=newEquipment&left=home_left" class="button">Cancel</a>
            </form>
        </div>
<?php   
    }
}
?>