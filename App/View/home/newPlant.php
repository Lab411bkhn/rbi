<?php
require_once '../../Model/home/equipmentUnitModel.php';
$eqUnit = new equipmentUnitModel();
$unitCodes = $eqUnit->getAllEquipmentUnitCode();
?>
<link rel="stylesheet" href="../../../../Public/css/home.css">
<form action="../../Controller/home/equipmentTempController.php" onsubmit="return validateForm()" name="newPlant" method="POST">
        <fieldset>            
        <table>
            <legend>Plant information</legend>
            <tr>
            <td><strong>Plant </strong><input type="text" name="pltName"></td>
            <td><strong>Unit </strong><input list="pltUnit" name="pltUnit"></td>
            <datalist id="pltUnit">
                <?php
                    foreach ($unitCodes as $value) {
                        echo "<option value='".$value[0]."'>";
                    }
                ?>
            </datalist> 
            <td><strong>Equipment </strong><input type="text" name="pltEquipment"></td>
            <td><strong>Component </strong><input type="text" name="pltComponent"></td>
            </tr>            
        </table>
        </fieldset>
        <fieldset>
            <table>
            <legend>Heat Exchanger</legend>
            <tr>
                <td><strong>Operating Pressure (barg) Inlet</strong></td>
                <td><input type="text" name="pltOPI"></td><td width="60px"></td>
                <td><strong>Operating Temp (C) Inlet</strong></td>
                <td><input type="text" name="pltOTI"></td>
            </tr>
            <tr>
                <td><strong>Operating Temp (C) Outlet</strong></td>
                <td><input type="text" name="pltOTO"></td><td width="60px"></td>
                <td><strong>Operating Pressure (barg) Outlet</strong></td>
                <td><input type="text" name="pltOPO"></td>
            </tr>            
            </table>
        </fieldset>
        <fieldset>
            <table>
            <legend>Values</legend>
            <tr>
                <td><strong>Test Pressure (barg) </strong><input type="text" name="pltTestPress"></td>
                <td><strong>MDMT, C </strong><input type="text" name="pltMDMT"></td>
                
                <td><strong>In Service? </strong><input list="pltInService" name="pltInService">
                    <datalist id="pltInService">
                        <option value="Yes"/>
                        <option value="No"/>
                    </datalist> 
                </td>
                <td><strong>Service Date </strong><br/><input type="date" name="pltServiceDate"/></td>
            </tr>
            <tr>
                <td><strong>LDTBXH Covered?</strong><br/><input list="pltLDTBXHCovered" name="pltLDTBXHCovered">
                <datalist id="pltLDTBXHCovered">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist> 
                </td>
                
                <td><strong>Insulated? </strong><br/><input list="pltInsulated" name="pltInsulated">
                <datalist id="pltInsulated">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist> 
                
                <td><strong>PWHT? </strong><br/><input list="pltPWHT" name="pltPWHT">
                <datalist id="pltPWHT">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
                
                <td><strong>Last Internal Inspection Date</strong><br/><input type="date" name="pltLIIDate"></td>
            </tr>  
            <tr>
                <td><strong>Insulation Type </strong><br/><input type="text" name="pltInsType"></td>                
                <td><strong>Operating State </strong><br/><input list="pltOperatingState" name="pltOperatingState">
                <datalist id="pltOperatingState">
                    <option value="liquid"/>
                    <option value="vapor"/>
                    <option value="slurry"/>
                </datalist> 
                
                <td><strong>Inventory Liquid (lbs)</strong><br/><input type="text" name="pltInventoryLiquid"></td>
                <td><strong>Inventory Vapor (lbs)</strong><br/><input type="text" name="pltInventoryVapor"></td>
            </tr>
            <tr>
                <td><strong>Inventory Total (lb)</strong><br/><input type="text" name="pltInventoryTotal"></td>                
                <td><strong>Confident In Stream Analysis? </strong><br/><input list="pltCISA" name="pltCISA">
                <datalist id="pltCISA">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist> 
                <td><strong>Vapor Density < Air? </strong><br/><input list="pltVapDenAir" name="pltVapDenAir">
                <datalist id="pltVapDenAir">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
                <td><strong>Corrosion Inhibitors? </strong><input list="pltCorInh" name="pltCorInh">
                <datalist id="pltCorInh">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
            </tr>
            <tr>
                <td><strong>Frequent Feed Changed? </strong><br/><input list="pltFFC" name="pltFFC">
                <datalist id="pltFFC">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>                 
                <td><strong>Major Chemicals (with %weight) </strong><br/><input type="text" name="pltMajChem">
                <td><strong>Contaminants</strong><br/><input type="text" name="pltContaminants">
                <td><strong>Online Monitoring? </strong><br/><input list="pltOnlMon" name="pltOnlMon">
                <datalist id="pltOnlMon">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
            </tr>
            <tr>
                <td><strong>Cathodic Protection? </strong><br/><input list="pltCatPro" name="pltCatPro">
                <datalist id="pltCatPro">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
                <td><strong>Corrosion Monitoring? </strong><br/><input list="pltCorMon" name="pltCorMon">
                <datalist id="pltCorMon">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
                <td><strong>OH Calib Up to Date? </strong><br/><input list="pltOHC" name="pltOHC">
                <datalist id="pltOHC">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
                <td><strong>Dist From Facility</strong><br/><input type="text" name="pltDFF">
            </tr>
            <tr>
                <td><strong>Equip Count</strong><br/><input type="text" name="pltEqCou">
                <td><strong>HAZOP Rating</strong><br/><input type="text" name="pltHAZOPRat">
                <td><strong>Personnel Density</strong><br/><input type="text" name="pltPerDen">
                <td><strong>Mitigation Equip</strong><br/><input type="text" name="pltMitEqu">
            </tr>
            <tr>
                <td><strong>Env Rating</strong><br/><input type="text" name="pltEnvRat">
                <td><strong>Insp Tech Used? </strong><br/><input list="pltITU" name="pltITU">
                <datalist id="pltITU">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
                <td><strong>Equip Modifications/Repairs</strong><br/><input type="text" name="pltEMR">
                <td><strong>Inspection Findings</strong><br/><input type="text" name="pltInsFin">
            </tr>
            <tr>
                <td><strong>Vapor Density, kg/m3</strong><br/><input type="text" name="pltVapDen">
                <td><strong>Liquid Density kg/m3</strong><br/><input type="text" name="pltLiqDen">
                <td><strong>Vapor, kg</strong><br/><input type="text" name="pltVapor">
                <td><strong>Liquid, kg</strong><br/><input type="text" name="pltLiquid">
            </tr>
            <tr>
                <td><strong>HMBPFDNum</strong><br/><input type="text" name="pltHMBPFDNum">
                <td><strong>PIDNum</strong><br/><input type="text" name="pltPIDNum">
                <td><strong>Service</strong><br/><input type="text" name="pltService">
                <td><strong>HMB Stream#</strong><br/><input type="text" name="pltHMBStream">
            </tr>
            </table>
        </fieldset>
    <input type="submit" value="Create New Plan" class="button" align="right">
</form>
<script>
    function validateForm() {
        var x = document.forms["newPlant"]["pltName"].value;
        if (x == "") {
            alert("Plant Name must be filled out");
            return false;
        }
    }
</script>

    
