<?php
require_once '../../Model/home/equipmentUnitModel.php';
$eqUnit = new equipmentUnitModel();
$unitCodes = $eqUnit->getAllEquipmentUnitCode();
?>
<link rel="stylesheet" href="../../../../Public/css/home.css" xmlns="http://www.w3.org/1999/html">
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
            <tr>
               <td><p><i>Thinning Damage</i></p></td>
            </tr>
            <tr>
                <td><strong>CrackPresent</strong><br/><input type="text" name="pltCrackPresent">
                <td><strong>PBarrier</strong><br/><input type="text" name="pltPBarrier">
                <td><strong>InLiner</strong><br/><input type="text" name="pltInLiner">
                <td><strong>Catalog Thinning</strong><br/><input type="text" name="pltCaThinning">
            </tr>
            <tr>
                <td><strong>Number of Inspection[l?n]</strong><br/><input type="text" name="pltNuOfInspection">
                <td><strong>Check Thinning</strong><br/><input type="text" name="pltChThining">
                <td><strong>Cladding</strong><br/><input type="text" name="pltCladding">
                <td><strong>Injection Point Fip</strong><br/><input type="text" name="pltInPoiFip">
            </tr>
            <tr>
                <td><strong>Dead Legs Fdl</strong><br/><input type="text" name="pltDeLegFdl">
                <td><strong>Welded Construction Fwd</strong><br/><input type="text" name="pltWelConsFwd">
                <td><strong>Maintenance Accordance Fam</strong><br/><input type="text" name="pltMaiAccFsm">
                <td><strong>Settlement Fsm</strong><br/><input type="text" name="pltSettFsm">
            </tr>
            <tr>
                <td><strong>Corrosion rate for Base Matel</strong><br/><input type="text" name="pltCorrRaBaseMatel">
                <td><strong>Corrosion rate for Cladding[mpy]</strong><br/><input type="text" name="pltCorrRaCladding">
                <td><strong>Thickness of comp base metal [in]</strong><br/><input type="text" name="pltThickBaseMetal">

            </tr>
            <tr><td><p><i>Linning Damage</i></p></td></tr>
            <tr>
                <td><strong>linning Type</strong><br/><input type="text" name="pltLinType">
                <td><strong>Linning Adjusmen(Flc)</strong><br/><input type="text" name="pltLinAdj">
                <td><strong>Year In Service</strong><br/><input type="text" name="pltYearSer">
            </tr>
           <tr>
               <td><p><i>Caustic Damage</i></p></td>
           </tr>
           <tr>
               <td><strong>Level Caustic</strong><br/><input type="text" name="pltLvlCaustic">
               <td><strong>Catalog Caustic</strong><br/><input type="text" name="pltCatCaustic">

           </tr>
           <tr>
               <td><p><i>Amine Damage</i></p></td>
           </tr>
           <tr>
               <td><strong>Level Amine</strong><br/><input type="text" name="pltLvlAmine">
               <td><strong>Catalog Amine</strong><br/><input type="text" name="pltCatAmine">

           </tr>
           <tr>
               <td><p><i>Sulfide Damage</i></p></td>
           </tr>
           <tr>
               <td><strong>Catalog Sulfide</strong><br/><input type="text" name="pltCaSulfide">
               <td><strong>pH</strong><br/><input type="text" name="pltPH">
               <td><strong>Sulfide Concentration</strong><br/><input type="text" name="pltSuConcentration">

           </tr>
           <tr>
               <td><p><i>HIC/SOHIC- H2S</i></p></td>
           </tr>
           <tr>
               <td><strong>Catalog HIC/H2S</strong><br/><input type="text" name="pltCaH2S">
               <td><strong>H2S Concentration</strong><br/><input type="text" name="pltH2SConcentration">

           </tr>
           <tr>
               <td><p><i>Carbonate Damage</i></p></td>
           </tr>
           <tr>
               <td><strong>Catalog Cacbon</strong><br/><input type="text" name="pltCaCacbon">
               <td><strong>Cacbon Concentration</strong><br/><input type="text" name="pltCaConcentration">

           </tr>
           <tr>
               <td><p><i>PTA Damage</i></p></td>
           </tr>
           <tr>
               <td><strong>Catalog PTA</strong><br/><input type="text" name="pltCaPTA">
               <td><strong>Function of heat Treatment</strong><br/><input type="text" name="pltFunHeaTreat">

           </tr>
           <tr>
               <td><p><i>CLSCC Damage</i></p></td>
           </tr>
           <tr>
               <td><strong>Catalog CLSCC</strong><br/><input type="text" name="pltCaCLSCC">
               <td><strong>Temperat of PH</strong><br/><input type="text" name="pltTemperPH">
               <td><strong>Clo Concentration</strong><br/><input type="text" name="pltCloConcentration">

           </tr>
           <tr>
               <td><p><i>HF Damage</i></p></td>
           </tr>
           <tr>
               <td><strong>Catalog HF</strong><br/><input type="text" name="pltCaHF">
               <td><strong>HF present</strong><br/><input type="text" name="pltHFPresent">
               <td><strong>Brinell Hardness</strong><br/><input type="text" name="pltBrilHardness">

           </tr>
           <tr><td><p><i>HIC/HF Damage</i></p></td></tr>
           <tr>
               <td><strong>Catalog HIC/H2F</strong><br/><input type="text" name="pltCaHICHF">
               <td><strong>Sulfur Concentration</strong><br/><input type="text" name="pltSulfurConcentration">

           </tr>
           <tr><td><p><i>External Corrosion Damage</i></p></td></tr>
           <tr>
               <td><strong>Catalog Extenal Corrosion</strong><br/><input type="text" name="pltCaExCorrosion">
               <td><strong>Driver Extend</strong><br/><input type="text" name="pltDriExtend">
               <td><strong>Coat Quality</strong><br/><input type="text" name="pltCoQuality">

           </tr>
           <tr><td><p><i>CUI Ferrictic Component </i></p></td></tr>
           <tr>
               <td><strong>Catalog CUI</strong><br/><input type="text" name="pltCataCUI">
               <td><strong>Driver CUI</strong><br/><input type="text" name="pltDriCUI">
               <td><strong>Corrosion Rate for CUI</strong><br/><input type="text" name="pltCorrRateCUI">
               <td><strong>Complexity</strong><br/><input type="text" name="pltComplexity">

           </tr>
           <tr>
               <td><strong>Insulation</strong><br/><input type="text" name="pltInsu">
               <td><strong>Allow Config</strong><br/><input type="text" name="pltAllConfig">
               <td><strong>Enter Soil</strong><br/><input type="text" name="pltEnterSoil">
               <td><strong>Insulation Type</strong><br/><input type="text" name="pltInsuTpy">

           </tr>
           <tr><td><p><i>External CLSCC</i></p></td></tr>
           <tr>
               <td><strong>Catalog Externak CLSCC</strong><br/><input type="text" name="pltCaEXCLSCC">
               <td><strong>Driver External CLSCC</strong><br/><input type="text" name="pltDriExCLSCC">

           </tr>
           <tr><td><p><i>External CUI</i></p></td></tr>
           <tr>
               <td><strong>Piping Complexity</strong><br/><input type="text" name="pltPipingComp">
               <td><strong>Insulation Condition</strong><br/><input type="text" name="pltInsCondition">

           </tr>
           <tr><td><p><i>HTHA</i></p></td></tr>
           <tr>
               <td><strong>Catalog HTHA</strong><br/><input type="text" name="pltCataHTHA">
               <td><strong>Age HTHA[hours]</strong><br/><input type="text" name="pltAgeHTHA">
               <td><strong>Temperat ure HTHA</strong><br/><input type="text" name="pltTempHTHA">
               <td><strong>Hydrogen Partial Pressure</strong><br/><input type="text" name="pltHydParPress">
           </tr>
           <tr><td><p><i>BrittleFacture</i></p></td></tr>
           <tr>
               <td><strong>TempMin for Brittle Facture</strong><br/><input type="text" name="pltTempMinBriFac">
               <td><strong>TempUpset of Brittle Facture</strong><br/><input type="text" name="pltTempUpsetBriFac">
               <td><strong> Temp Boiling for Brittle Facture</strong><br/><input type="text" name="pltTempBrittleFac">
               <td><strong>Minimum Design Metal Temp</strong><br/><input type="text" name="pltMinimum">
           </tr>
           <tr>
               <td><strong>Tem Impact</strong><br/><input type="text" name="pltTemImpact">
               <td><strong>Material CUVE</strong><br/><input type="text" name="pltMatCUVE">
               <td><strong>Low temperture</strong><br/><input type="text" name="pltLowTemp">
           </tr>

           <tr><td><p><i>885Embrittlement Damage</i></p></td></tr>
           <tr>
               <td><strong>SCE</strong><br/><input type="text" name="pltSCE">
               <td><strong>Reference Temperture</strong><br/><input type="text" name="pltRefeTemperture">
               <td><strong>Temp Min for 885</strong><br/><input type="text" name="pltTemp885">
               <td><strong>Brittle Check</strong><br/><input type="text" name="pltBriCheck">
           </tr>
           <tr><td><p><i> Sigma Phase</i></p></td></tr>
           <tr>
               <td><strong>Temp Shutdown</strong><br/><input type="text" name="pltTempShutdown">
               <td><strong>Percent Sigma</strong><br/><input type="text" name="pltPerSigma">

           </tr>

           <tr><td><p><i>Piping Chanical Fatugue Damage</i></p></td></tr>
           <tr>
               <td><strong>No. of Pre Fatigue Failures</strong><br/><input type="text" name="pltNoFailures">
               <td><strong>Severity of Vibration</strong><br/><input type="text" name="pltSevVibration">
               <td><strong>No. of weeks</strong><br/><input type="text" name="pltNoWeeks">
               <td><strong>Cyclic Type</strong><br/><input type="text" name="pltCycType">
           </tr>
           <tr>
               <td><strong>Corrective Action Take</strong><br/><input type="text" name="pltCorrAcTake">
               <td><strong>Total Pipe Fitting</strong><br/><input type="text" name="pltTotalFitting">
               <td><strong>Type of Joint in This Piping</strong><br/><input type="text" name="pltTyThisPiping">
               <td><strong>Condition of Pipe</strong><br/><input type="text" name="pltConPipe">
           </tr>
           <tr>
               <td><strong>Branch Diameter</strong><br/><input type="text" name="pltBraDiameter">
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

    
