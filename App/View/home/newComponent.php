<link rel="stylesheet" href="../../../../Public/css/home.css">
<div>
    <form action="#" onsubmit="return validateForm()" name="newComponent">
    <fieldset>
        <legend>Create new Component:</legend>
        <table class="newComponentTable">
            <tr>
                <td width="50%"><strong>Select Existing Component: </strong></td>
                <td><input type="text" name="cpnId"></td>
            </tr>
            <tr>
                <td>Component Name:</td><td><input type="text" name="cpnName"></td>
            </tr>
            <tr>
                <td>Component Description:</td><td><input type="text" name="cpnDescription" value=""></td>
            </tr>
            <tr>
                <td>MOC:</td><td><input type="text" name="cpnMOC" value=""></td>
            </tr>
            <tr>
                <td>LinearMOC:</td><td><input type="text" name="cpnLinearMOC" value=""></td>
            </tr>
            <tr>
                <td>Height Length:</td><td><input type="number" name="cpnHeightLength" value=""></td>
            </tr>            
            <tr>
                <td>Diameter:</td><td><input type="text" name="cpnDiameter" value=""></td>
            </tr>
            <tr>
                <td>Nominal Thickness:</td><td><input type="text" name="cpnNominalThickness" value=""></td>
            </tr>
            <tr>
                <td>CA:</td><td><input type="text" name="cpnCA" value=""></td>
            </tr>
            <tr>
                <td>Design Pressure:</td><td><input type="text" name="cpnDesignPressure" value=""></td>
            </tr>
            <tr>
                <td>Design Temp:</td><td><input type="text" name="cpnDesignTemp" value=""></td>
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
