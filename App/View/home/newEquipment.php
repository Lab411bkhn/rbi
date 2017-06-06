<link rel="stylesheet" href="../../../../Public/css/home.css">
<div>
    <form action="#">
    <fieldset>
        <legend>Create new Equipment:</legend>
        <table class="newEquipment">
            <tr>
                <td><strong>Select Existing Equipment: </strong></td>
                <td><input type="text" name="eqId" value="null"></td>
            </tr>
            <tr>
                <td>Equipment Number:</td><td><input type="number" name="eqNumber" value=""></td>
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
                <td>Design Code:</td><td><input type="text" name="eqDesignCode" value=""></td>
            </tr>
            <tr>
                <td>Site:</td><td><input type="text" name="eqSite" value=""></td>
            </tr>
            <tr>
                <td>Facility:</td><td><input type="text" name="eqFacility" value=""></td>
            </tr>
            <tr>
                <td>Manufacturer:</td><td><input type="text" name="eqManufacturer" value=""></td>
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