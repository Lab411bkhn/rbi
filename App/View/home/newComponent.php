<link rel="stylesheet" href="../../../../Public/css/home.css">
<div>
    <form action="#">
    <fieldset>
        <legend>Create new Component:</legend>
        <table class="newComponent">
            <tr>
                <td><strong>Select Existing Component: </strong></td>
                <td><input type="text" name="cpnId" value="null"></td>
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
                <td>Design Code:</td><td><input type="text" name="cpnDesignCode" value=""></td>
            </tr>
            <tr>
                <td>Site:</td><td><input type="text" name="cpnSite" value=""></td>
            </tr>
            <tr>
                <td>Facility:</td><td><input type="text" name="cpnFacility" value=""></td>
            </tr>
            <tr>
                <td>Component Number:</td><td><input type="number" name="cpnNumber" value=""></td>
            </tr>
            <tr>
            <td>Component Type:</td><td>
                <input list="cpmType" name="cpmType">
                <datalist id="cpmType">
                    <option value="Bend/Elbow">
                    <option value="Fixed Roof">
                    <option value="Floating Roof">
                    <option value="Nozzle">
                    <option value="Shell">
                </datalist> 
            </td>
            </tr> 
            <tr>
                <td>API Component Type:</td>
                <td>
                    <input list="cpmType" name="cpmType">
                    <datalist id="cpmType">
                        <option value="COURSE-1">
                        <option value="COURSE-2">
                        <option value="COURSE-3">
                        <option value="PIPE-1">
                        <option value="PIPE-2">
                    </datalist> 
                </td>
            </tr>
            <tr>
                <td>Component Name:</td><td><input type="number" name="cpnName" value=""></td>
            </tr>
            
            <tr>
            <td>Component Risk Links to Equipment Risk:</td><td><input type="checkbox" name="cpnRiskLink" value=""></td>
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
