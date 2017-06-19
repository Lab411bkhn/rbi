<?php
    require_once '../../Model/equipmentModel.php';
    $eqUnit = new equipmentModel();
    $unitCodes = $eqUnit->getAllEquipmentUnitCode();
?>
<head>
    <link rel="stylesheet" href="../../../../Public/css/home.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../js/newEquipment.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div>
    <form action="#">
    <fieldset>
        <legend>Create new Equipment:</legend>
        <table class="newEquipment">
            <tr><td>Item No:</td><td><input type="number" name="eqItemNo"></td></tr>
            <tr><td>Name:</td><td><input type="text" name="eqName"></td></tr>
            <tr>
                <td><strong>Select Existing Equipment: </strong></td>
                <td><input list="eqId" name="eqId" >
                    <datalist id="eqId">
                        <?php
                            foreach ($unitCodes as $value) {
                                echo "<option value='".$value[0]."'>";
                            }
                        ?>
                    </datalist> 
                </td>
            </tr>
            
            <tr>
                <td>Equipment Type:</td>
                <td><input list="eqType" name="eqType">
                <datalist id="eqType">
                    <option value="Air Cooler">
                    <option value="Filter">
                    <option value="Pump">
                    <option value="Tank">
                    <option value="Tower">
                </datalist> 
                </td>
            </tr>
            <tr>
                <td>Equipment Name:</td><td><input type="text" name="eqName" value=""></td>
            </tr>
            <tr>
                <td>Design Code:</td>
                <td><input type="text" name="eqDesignCode" value=""></td>
                <td><a href="index.php?data=home&action=createFormAddDetailEquipment&param=inputDsCode&left=equipment_left">
                        <i class="fa fa-plus-square-o" style="font-size:18px;color:#00A69B"></i>
                </a></td>
            </tr>
            <tr>
                <td>Site:</td><td>  <input type="text" name="eqSite" value=""></td>
                <td>
                    <a href="index.php?data=home&action=createFormAddDetailEquipment&param=inputSite&left=equipment_left">
                        <i class="fa fa-plus-square-o" style="font-size:18px;color:#00A69B"></i></a>
                </td>
            </tr>
            <tr>
                <td>Facility:</td><td><input type="text" name="eqFacility" value=""></td>
                <td><a href="index.php?data=home&action=createFormAddDetailEquipment&param=inputFacility&left=equipment_left">
                        <i class="fa fa-plus-square-o" style="font-size:18px;color:#00A69B"></i></a></td>
            </tr>
            <tr>
                <td>Manufacturer:</td><td><input type="text" name="eqManufacturer" value=""></td>
                <td><a href="index.php?data=home&action=createFormAddDetailEquipment&param=inputManu&left=equipment_left">
                        <i class="fa fa-plus-square-o" style="font-size:18px;color:#00A69B"></i></a></td>
            </tr>
            <tr>
                <td>Commission Date:</td><td><input type="text" name="eqCommissionDate" value=""></td>
            </tr>
            <tr>
                <td>PFD No.:</td><td><input type="text" name="eqPfdNo" value=""></td>
            </tr>
            <tr>
                <td>Process Description:</td><td><input type="text" name="eqProcessDescription" value=""></td>
            </tr>
            <tr>
                <td>Description:</td><td><input type="text" name="eqDescription" value=""></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </fieldset>
  </form>
</div>

    
</body>
