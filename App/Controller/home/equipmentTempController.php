<?php

class equipmentTempController {
    function __construct() {
        //;
    }
    function index(){
        $pltName = isset($_POST["pltName"])?$_POST["pltName"]:"";
        $pltUnit = isset($_POST["pltUnit"])?$_POST["pltUnit"]:"";
        $pltEquipment = isset($_POST["pltEquipment"])?$_POST["pltEquipment"]:"";
        $pltComponent = isset($_POST["pltComponent"])?$_POST["pltComponent"]:"";
        $pltOPI = isset($_POST["pltOPI"])?$_POST["pltOPI"]:"";
        $pltOTI = isset($_POST["pltOTI"])?$_POST["pltOTI"]:"";
        $pltOTO = isset($_POST["pltOTO"])?$_POST["pltOTO"]:"";
        $pltOPO = isset($_POST["pltOPO"])?$_POST["pltOPO"]:"";
        $pltTestPress = isset($_POST["pltTestPress"])?$_POST["pltTestPress"]:"";
        $pltMDMT = isset($_POST["pltMDMT"])?$_POST["pltMDMT"]:"";
        $pltInService = isset($_POST["pltInService"])?$_POST["pltInService"]:"";
        $pltServiceDate = isset($_POST["pltServiceDate"])?$_POST["pltServiceDate"]:"";
        $pltInsType = isset($_POST["pltInsType"])?$_POST["pltInsType"]:"";
        $pltInsulated = isset($_POST["pltInsulated"])?$_POST["pltInsulated"]:"";
        $pltPWHT = isset($_POST["pltPWHT"])?$_POST["pltPWHT"]:"";
        $pltLIIDate = isset($_POST["pltLIIDate"])?$_POST["pltLIIDate"]:"";
        $pltLDTBXHCovered = isset($_POST["pltLDTBXHCovered"])?$_POST["pltLDTBXHCovered"]:"";
        $pltOperatingState = isset($_POST["pltOperatingState"])?$_POST["pltOperatingState"]:"";
        $pltInventoryLiquid = isset($_POST["pltInventoryLiquid"])?$_POST["pltInventoryLiquid"]:"";
        $pltInventoryVapor = isset($_POST["pltInventoryVapor"])?$_POST["pltInventoryVapor"]:"";
        $pltInventoryTotal = isset($_POST["pltInventoryTotal"])?$_POST["pltInventoryTotal"]:"";
        $pltCISA = isset($_POST["pltCISA"])?$_POST["pltCISA"]:"";
        $pltVapDenAir = isset($_POST["pltVapDenAir"])?$_POST["pltVapDenAir"]:"";
        $pltCorInh = isset($_POST["pltCorInh"])?$_POST["pltCorInh"]:"";
        $pltFFC = isset($_POST["pltFFC"])?$_POST["pltFFC"]:"";
        $pltMajChem = isset($_POST["pltMajChem"])?$_POST["pltMajChem"]:"";
        $pltContaminants = isset($_POST["pltContaminants"])?$_POST["pltContaminants"]:"";
        $pltOnlMon = isset($_POST["pltOnlMon"])?$_POST["pltOnlMon"]:"";
        $pltCatPro = isset($_POST["pltCatPro"])?$_POST["pltCatPro"]:"";
        $pltCorMon = isset($_POST["pltCorMon"])?$_POST["pltCorMon"]:"";
        $pltOHC = isset($_POST["pltOHC"])?$_POST["pltOHC"]:"";
        $pltDFF = isset($_POST["pltDFF"])?$_POST["pltDFF"]:"";
        $pltEqCou = isset($_POST["pltEqCou"])?$_POST["pltEqCou"]:"";
        $pltHAZOPRat = isset($_POST["pltHAZOPRat"])?$_POST["pltHAZOPRat"]:"";
        $pltPerDen = isset($_POST["pltPerDen"])?$_POST["pltPerDen"]:"";
        $pltMitEqu = isset($_POST["pltMitEqu"])?$_POST["pltMitEqu"]:"";
        $pltEnvRat = isset($_POST["pltEnvRat"])?$_POST["pltEnvRat"]:"";
        $pltITU = isset($_POST["pltITU"])?$_POST["pltITU"]:"";
        $pltEMR = isset($_POST["pltEMR"])?$_POST["pltEMR"]:"";
        $pltInsFin = isset($_POST["pltInsFin"])?$_POST["pltInsFin"]:"";        
        $pltVapDen = isset($_POST["pltVapDen"])?$_POST["pltVapDen"]:"";
        $pltLiqDen = isset($_POST["pltLiqDen"])?$_POST["pltLiqDen"]:"";
        $pltVapor = isset($_POST["pltVapor"])?$_POST["pltVapor"]:"";
        $pltLiquid = isset($_POST["pltLiquid"])?$_POST["pltLiquid"]:"";
        $pltHMBPFDNum = isset($_POST["pltHMBPFDNum"])?$_POST["pltHMBPFDNum"]:"";
        $pltPIDNum = isset($_POST["pltPIDNum"])?$_POST["pltPIDNum"]:"";
        $pltService = isset($_POST["pltService"])?$_POST["pltService"]:"";
        $pltHMBStream = isset($_POST["pltHMBStream"])?$_POST["pltHMBStream"]:"";
        $data = array(
            "Plant" => $pltName,
            "OperingPressInlet" => $pltOPI,
            "OperTempInlet" => $pltOTI,
            "OperingPressOutlet" => $pltOPO,
            "OperTempOutlet" => $pltOTO,
            "TestPress" => $pltTestPress,
            "MDMT" => $pltMDMT,
            "InService" => $pltInService,
            "ServiceDate" => $pltServiceDate,
            "LastInternalInspectionDate" => $pltLIIDate,
            "LDTBXHCovered" => $pltLDTBXHCovered,
            "Insulated" => $pltInsulated,
            "PWHT" => $pltPWHT,
            "InsulatedType" => $pltInsType,
            "OperatingState" => $pltOperatingState,
            "InventoryLiquid" => $pltInventoryLiquid,
            "InventoryVapor" => $pltInventoryVapor,
            "InventoryTotal" => $pltInventoryTotal,
            "ConfidentInStreamAnalysis" => $pltCISA,
            "VaporDensityAir" => $pltVapDenAir,
            "CorrosionInhibitor" => $pltCorInh,
            "FrequentFeedChanged" => $pltFFC,
            "MajorChemicals" => $pltMajChem,
            "Contaminants" => $pltContaminants,
            "OnLineMonitoring" => $pltOnlMon,
            "CathodicProtection" => $pltCatPro,
            "CorrosionMonitoring" => $pltCorMon,
            "OHCalibUptodate" => $pltOHC,
            "DistFromFacility" => $pltDFF,
            "EquipCount" => $pltEqCou,
            "HAZOPRating" => $pltHAZOPRat,
            "PersonalDensity" => $pltPerDen,
            "MitigationEquip" => $pltMitEqu,
            "EnvRating" => $pltEnvRat,
            "InspTechUsed" => $pltITU,
            "EquipModification" => $pltEMR,
            "InspectionFinding" => $pltInsFin,
            "VaporDensity" => $pltVapDen,
            "LiquipDensity" => $pltLiqDen,
            "Vapor" => $pltVapor,
            "Liquip" => $pltLiquid,
            "HMBPFDNum" => $pltHMBPFDNum,
            "PIDNum" => $pltPIDNum,
            "Service" => $pltService,
            "HMBStream" => $pltHMBStream,
            "tbl_equipmentlist_ItemNo" => $pltEquipment,
            "tbl_component_componentName" => $pltComponent            
        );
        if($pltName != ""){
            if (!file_exists("../../Model/home/equipmentTempModel.php")) {                
                require '../../Controller/404.php';
                return;
            }            
            require ("../../Model/home/equipmentTempModel.php");
            $newTempModel = new equipmentTempModel();
            if($newTempModel->isExist($pltName)){
                
            }
            else {
                //print_r($data);
                $newTempModel->insertTemplate($data);
            }
        }
    }
}

$equTemp = new equipmentTempController();
$equTemp->index();
//$equIndex->importData();
header('Location: ../../View/home/index.php?data=home&action=listEquipmentTemp&left=home_left');


