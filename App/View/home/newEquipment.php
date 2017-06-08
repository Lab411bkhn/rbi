<?php
    require_once '../../Model/user.php';
    $user = new user();
    $us = $user->getUserAll();
?>
<link rel="stylesheet" href="../../../../Public/css/home.css">
<script type="text/javascript" src="../js/newEquipment.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div>
    <form action="#">
    <fieldset>
        <legend>Create new Equipment:</legend>
        <table class="newEquipment">
            <tr>
                <td><strong>Select Existing Equipment: </strong></td>
                <td><input list="eqId" name="eqId" >
                    <datalist id="eqId">
                        <?php
                            foreach ($us as $value) {
                                echo "<option value='".$value['info']."'>";
                            }
                        ?>
                    </datalist> 
                </td>
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
                <td>Design Code:</td>
                <td><input type="text" name="eqDesignCode" value=""></td>
                <td><button id="btnAddDesignCode">
                    <i class="fa fa-plus-square-o" style="font-size:18px;color:#00A69B"></i>
                </button></td>
            </tr>
            <tr>
                <td>Site:</td><td><input type="text" name="eqSite" value=""></td>
                <td><button onclick="addSite()" id="btnAddSite">
                    <i class="fa fa-plus-square-o" style="font-size:18px;color:#00A69B"></i>
                </button></td>
            </tr>
            <tr>
                <td>Facility:</td><td><input type="text" name="eqFacility" value=""></td>
                <td><button onclick="addFacility()" id="btnAddFacility">
                    <i class="fa fa-plus-square-o" style="font-size:18px;color:#00A69B"></i>
                </button></td>
            </tr>
            <tr>
                <td>Manufacturer:</td><td><input type="text" name="eqManufacturer" value=""></td>
                <td><button onclick="addManufacturer()" id="btnAddManufacturer">
                    <i class="fa fa-plus-square-o" style="font-size:18px;color:#00A69B"></i>
                </button></td>
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

<script>
   
</script>