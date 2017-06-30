<head>
    <link rel="stylesheet" href="../../../../Public/css/home.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
</head>
<body>
<div>
    <form action="../../Controller/home/equipmentUnitController.php" onsubmit="return validateForm()" name="newEquipmentUnit">
    <fieldset>
        <legend>Create new Equipments for RBI Implement:</legend>
        <table class="newEquipmentUnit">
            <tr>
                <td width="50%"><strong>Unit Code: </strong></td>
                <td><input type="text" name="equUnitCode" >
                </td>
            </tr>
            <tr>
            <td>Unit name:</td><td><input type="text" name="equName"></td>
            </tr>
            <tr><td>Process System:</td><td><input type="text" name="equProcessSytem"></td></tr>
            <tr>
                <td></td><td><input type="submit" value="Creat new Equipment Unit" class="button"></td>
            </tr>
        </table>
    </fieldset>
  </form>
</div>  
<script>
    function validateForm() {
        var x = document.forms["newEquipmentUnit"]["equUnitCode"].value;
        if (x == "") {
            alert("Equipment code must be filled out");
            return false;
        }
    }
    
</script>
</body>
