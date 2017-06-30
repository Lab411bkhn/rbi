<?php
    require_once '../../Model/home/equipmentUnitModel.php';
    $eqUnit = new equipmentUnitModel();
    $unitCodes = $eqUnit->getAllEquipmentUnitCode();
?>

<body>
<div>
    <form action="../../Controller/home/equipmentController.php" name="newEquipment" onsubmit="return validateForm()">
    <fieldset>
        <legend>Create new Equipment:</legend>
        <table class="newEquipmentTable">
            <tr>
                <td>Item No <input type="text" name="eqItemNo"></td>
                <td>Equipment Name:<input type="text" name="eqName"></td>
                <td>Quantity <input type="number" name="eqQuantity"></td>
            </tr>
        <tr><td>Semi-Quantitative?<input list="eqSemiQuan" name="eqSemiQuan">
                <datalist id="eqSemiQuan">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist> 
            </td>
            <td>Quantitative?<input list="eqQuan" name="eqQuan">
            <datalist id="eqQuan">
                <option value="Yes"/>
                <option value="No"/>
            </datalist> 
            </td>
            <td>Process Stream Okay? <input list="eqProcessStream" name="eqProcessStream">
                <datalist id="eqProcessStream">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist> 
            </td>
        </tr>
        <tr>
        <td><strong>Pressure < 700kPa </strong><input list="eqPressure" name="eqPressure">
            <datalist id="eqPressure">
                <option value="Yes"/>
                <option value="No"/>
            </datalist> 
        </td>
        <td>PHA = Low? <input list="eqPHA" name="eqPHA">
            <datalist id="eqPHA">
                <option value="Yes"/>
                <option value="No"/>
            </datalist> 
        </td>
        <td>Business Loss <= XXX?<input list="eqBusinessLoss" name="eqBusinessLoss">
            <datalist id="eqBusinessLoss">
                <option value="Yes"/>
                <option value="No"/>
            </datalist> 
        </td></tr>        
        <tr>
            <td>Process Stream Fluid <input type="text" name="eqProcessStreamFluid"></td>
            <td>Operating Pressure <input type="number" name="eqOperatingPressure"></td>
            <td>PHA Rating <input type="text" name="eqPHARate"></td></tr>
        <tr>
            <td>Business Loss Value <input type="text" name="eqBusinessLossValue"></td>
            <td>Group <input type="text" name="eqGroup"></td>
            <td rowspan="2">Equipment Description <input type="text" name="eqDescription"  style="height: 100px;"></td>
        </tr>
        <tr>
            <td>Unit Code <input list="eqUnitCode" name="eqUnitCode">
            <datalist id="eqUnitCode">
                <?php
                    foreach ($unitCodes as $value) {
                        echo "<option value='".$value[0]."'>";
                    }
                ?>
            </datalist> 
            <td>Type <input type="text" name="eqType"></td>
            
        </tr> 
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
