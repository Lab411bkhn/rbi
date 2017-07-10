<div>
    <form action="../../Controller/home/componentController.php" onsubmit="return validateForm()" name="newComponent">
    <fieldset>
        <legend>Create new Component:</legend>
        <table class="newComponentTable">

            <tr>
                <td>Component Name </td><td><input type="text" name="cpnName"></td>
            </tr>
            <tr>
                <td>Component Description </td><td><input type="text" name="cpnDescription" value=""></td>
            </tr>
            <tr>
                <td>Masterial Of Construction (MOC) </td><td><input type="text" name="cpnMOC" value=""></td>
            </tr>
            <tr>
                <td>Linear MOC</td><td><input type="text" name="cpnLinearMOC" value=""></td>
            </tr>
            <tr>
                <td>Height Length (m)</td><td><input type="number" name="cpnHeightLength" value=""></td>
            </tr>            
            <tr>
                <td>Diameter (m)</td><td><input type="text" name="cpnDiameter" value=""></td>
            </tr>
            <tr>
            <td><strong>Nominal Thickness (mm)</strong></td><td><input type="text" name="cpnNominalThickness" value=""></td>
            </tr>
            <tr>
                <td>CA (mm)</td><td><input type="text" name="cpnCA" value=""></td>
            </tr>
            <tr>
                <td>Design Pressure (barg)</td><td><input type="text" name="cpnDesignPressure" value=""></td>
            </tr>
            <tr>
                <td>Design Temp (&ordm;C)</td><td><input type="text" name="cpnDesignTemp" value=""></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" value="Create New Component" class="button"></td>
            </tr>
        </table> 
    </fieldset>
  </form>
</div>
<script>
    function validateForm() {
        var x = document.forms["newComponent"]["cpnId"].value;
        if (x == "") {
            alert("Equipment code must be filled out");
            return false;
        }
    }
</script>
