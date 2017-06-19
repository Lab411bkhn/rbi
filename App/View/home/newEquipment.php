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
    <form action="#" name="newEquipment" onsubmit="return validateForm()">
    <fieldset>
        <legend>Create new Equipment:</legend>
        <table class="newEquipmentTable">
            <tr>
                <td>Item No:</td><td><input type="number" name="eqItemNo"></td><td width="20px">
                <td>Name:</td><td><input type="text" name="eqName"></td><td width="20px">
                <td>Quantity:</td><td><input type="number" name="eqQuantity"></td>
            </tr>
        <tr><td>Semi-Quantitative:</td>
            <td><input list="eqSemiQuan" name="eqSemiQuan">
                <datalist id="eqSemiQuan">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist> 
            </td>
            <td width="20px"></td><td>Quantitative:</td><td><input list="eqQuan" name="eqQuan">
            <datalist id="eqQuan">
                <option value="Yes"/>
                <option value="No"/>
            </datalist> 
        </td>
        </tr>
        <tr></tr>
        <tr><td>Process Stream:</td><td><input list="eqProcessStream" name="eqProcessStream">
            <datalist id="eqProcessStream">
                <option value="Yes"/>
                <option value="No"/>
            </datalist> 
        </td></tr>
        <tr><td>Pressure:</td><td><input list="eqPressure" name="eqPressure">
            <datalist id="eqPressure">
                <option value="Yes"/>
                <option value="No"/>
            </datalist> 
        </td></tr>
        <tr><td>PHA:</td><td><input list="eqPHA" name="eqPHA">
            <datalist id="eqPHA">
                <option value="Yes"/>
                <option value="No"/>
            </datalist> 
        </td></tr>
        <tr><td>Business Loss:</td><td><input list="eqBusinessLoss" name="eqBusinessLoss">
            <datalist id="eqBusinessLoss">
                <option value="Yes"/>
                <option value="No"/>
            </datalist> 
        </td></tr>        
        <tr><td>Process Stream Fluid:</td><td><input type="text" name="eqProcessStreamFluid"></td></tr>
        <tr><td>Operating Pressure:</td><td><input type="number" name="eqOperatingPressure"></td></tr>
        <tr><td>PHA Rating:</td><td><input type="text" name="eqPHARate"></td></tr>
        <tr><td>Business Loss Value:</td><td><input type="text" name="eqBusinessLossValue"></td></tr>
        <tr><td>Group:</td><td><input type="text" name="eqGroup"></td></tr>
        <tr><td>Type:</td><td><input type="text" name="eqType"></td></tr>
        <tr><td>Equipment Description:</td><td><input type="text" name="eqDescription" style="height: 120px;"></td></tr>
        <tr><td>Business Loss:</td><td><input list="eqUnitCode" name="eqUnitCode">
            <datalist id="eqUnitCode">
                <?php
                    foreach ($unitCodes as $value) {
                        echo "<option value='".$value[0]."'>";
                    }
                ?>
            </datalist> 
        </td></tr> 
        <tr><td></td><td><input type="submit" value="Creat new Equipment" class="button"/></td></tr>
        </table>
    </fieldset>
  </form>
</div>    
</body>
<script>
    function validateForm() {
        var x = document.forms["newEquipment"]["eqName"].value;
        if (x == "") {
            alert("Equipment code must be filled out");
            return false;
        }
    }
</script>
