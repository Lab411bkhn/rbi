<?php
require'../../Model/libraries/excel_reader.php';
ob_start();
class equipmentTempController
{
    function __construct()
    {
        //;
        require("../../Model/home/equipmentTempModel.php");
        $this->newTempModel = new equipmentTempModel();
        $this->MaxSize = 500;
    }

    function index()
    {
        if (isset($_GET["act"])) {
            if ($_GET["act"] == 'delete') {
                $pltNameStr = isset($_GET["pltName"]) ? $_GET["pltName"] : NULL;
                $pltName = json_decode($pltNameStr);
                $this->newTempModel->deleteEquipmentTem($pltName);
              //  echo "DUONG DELETE";
            }
        } else {
            $pltName = isset($_POST["pltName"]) ? $_POST["pltName"] : "";
            $pltUnit = isset($_POST["pltUnit"]) ? $_POST["pltUnit"] : "";
            $pltEquipment = isset($_POST["pltEquipment"]) ? $_POST["pltEquipment"] : "";
            $pltComponent = isset($_POST["pltComponent"]) ? $_POST["pltComponent"] : "";
            $pltOPI = isset($_POST["pltOPI"]) ? $_POST["pltOPI"] : "";
            $pltOTI = isset($_POST["pltOTI"]) ? $_POST["pltOTI"] : "";
            $pltOTO = isset($_POST["pltOTO"]) ? $_POST["pltOTO"] : "";
            $pltOPO = isset($_POST["pltOPO"]) ? $_POST["pltOPO"] : "";
            $pltTestPress = isset($_POST["pltTestPress"]) ? $_POST["pltTestPress"] : "";
            $pltMDMT = isset($_POST["pltMDMT"]) ? $_POST["pltMDMT"] : "";
            $pltInService = isset($_POST["pltInService"]) ? $_POST["pltInService"] : "";
            $pltServiceDate = isset($_POST["pltServiceDate"]) ? $_POST["pltServiceDate"] : "";
            $pltInsType = isset($_POST["pltInsType"]) ? $_POST["pltInsType"] : "";
            $pltInsulated = isset($_POST["pltInsulated"]) ? $_POST["pltInsulated"] : "";
            $pltPWHT = isset($_POST["pltPWHT"]) ? $_POST["pltPWHT"] : "";
            $pltLIIDate = isset($_POST["pltLIIDate"]) ? $_POST["pltLIIDate"] : "";
            $pltLDTBXHCovered = isset($_POST["pltLDTBXHCovered"]) ? $_POST["pltLDTBXHCovered"] : "";
            $pltOperatingState = isset($_POST["pltOperatingState"]) ? $_POST["pltOperatingState"] : "";
            $pltInventoryLiquid = isset($_POST["pltInventoryLiquid"]) ? $_POST["pltInventoryLiquid"] : "";
            $pltInventoryVapor = isset($_POST["pltInventoryVapor"]) ? $_POST["pltInventoryVapor"] : "";
            $pltInventoryTotal = isset($_POST["pltInventoryTotal"]) ? $_POST["pltInventoryTotal"] : "";
            $pltCISA = isset($_POST["pltCISA"]) ? $_POST["pltCISA"] : "";
            $pltVapDenAir = isset($_POST["pltVapDenAir"]) ? $_POST["pltVapDenAir"] : "";
            $pltCorInh = isset($_POST["pltCorInh"]) ? $_POST["pltCorInh"] : "";
            $pltFFC = isset($_POST["pltFFC"]) ? $_POST["pltFFC"] : "";
            $pltMajChem = isset($_POST["pltMajChem"]) ? $_POST["pltMajChem"] : "";
            $pltContaminants = isset($_POST["pltContaminants"]) ? $_POST["pltContaminants"] : "";
            $pltOnlMon = isset($_POST["pltOnlMon"]) ? $_POST["pltOnlMon"] : "";
            $pltCatPro = isset($_POST["pltCatPro"]) ? $_POST["pltCatPro"] : "";
            $pltCorMon = isset($_POST["pltCorMon"]) ? $_POST["pltCorMon"] : "";
            $pltOHC = isset($_POST["pltOHC"]) ? $_POST["pltOHC"] : "";
            $pltDFF = isset($_POST["pltDFF"]) ? $_POST["pltDFF"] : "";
            $pltEqCou = isset($_POST["pltEqCou"]) ? $_POST["pltEqCou"] : "";
            $pltHAZOPRat = isset($_POST["pltHAZOPRat"]) ? $_POST["pltHAZOPRat"] : "";
            $pltPerDen = isset($_POST["pltPerDen"]) ? $_POST["pltPerDen"] : "";
            $pltMitEqu = isset($_POST["pltMitEqu"]) ? $_POST["pltMitEqu"] : "";
            $pltEnvRat = isset($_POST["pltEnvRat"]) ? $_POST["pltEnvRat"] : "";
            $pltITU = isset($_POST["pltITU"]) ? $_POST["pltITU"] : "";
            $pltEMR = isset($_POST["pltEMR"]) ? $_POST["pltEMR"] : "";
            $pltInsFin = isset($_POST["pltInsFin"]) ? $_POST["pltInsFin"] : "";
            $pltVapDen = isset($_POST["pltVapDen"]) ? $_POST["pltVapDen"] : "";
            $pltLiqDen = isset($_POST["pltLiqDen"]) ? $_POST["pltLiqDen"] : "";
            $pltVapor = isset($_POST["pltVapor"]) ? $_POST["pltVapor"] : "";
            $pltLiquid = isset($_POST["pltLiquid"]) ? $_POST["pltLiquid"] : "";
            $pltHMBPFDNum = isset($_POST["pltHMBPFDNum"]) ? $_POST["pltHMBPFDNum"] : "";
            $pltPIDNum = isset($_POST["pltPIDNum"]) ? $_POST["pltPIDNum"] : "";
            $pltService = isset($_POST["pltService"]) ? $_POST["pltService"] : "";
            $pltHMBStream = isset($_POST["pltHMBStream"]) ? $_POST["pltHMBStream"] : "";
            $pltCrackPresent = isset($_POST["pltCrackPresent"]) ? $_POST["pltCrackPresent"] : "";
            $pltPBarrier = isset($_POST["pltPBarrier"]) ? $_POST["pltPBarrier"] : "";
            $pltInLiner = isset($_POST["pltInLiner"]) ? $_POST["pltInLiner"] : "";
            $pltCaThinning = isset($_POST["pltCaThinning"]) ? $_POST["pltCaThinning"] : "";
            $pltNuOfInspection = isset($_POST["pltNuOfInspection"]) ? $_POST["pltNuOfInspection"] : "";
            $pltChThining = isset($_POST["pltChThining"]) ? $_POST["pltChThining"] : "";
            $pltCladding = isset($_POST["pltCladding"]) ? $_POST["pltCladding"] : "";
            $pltInPoiFip = isset($_POST["pltInPoiFip"]) ? $_POST["pltInPoiFip"] : "";
            $pltDeLegFdl = isset($_POST["pltDeLegFdl"]) ? $_POST["pltDeLegFdl"] : "";
            $pltWelConsFwd = isset($_POST["pltWelConsFwd"]) ? $_POST["pltWelConsFwd"] : "";
            $pltMaiAccFsm = isset($_POST["pltMaiAccFsm"]) ? $_POST["pltMaiAccFsm"] : "";
            $pltSettFsm = isset($_POST["pltSettFsm"]) ? $_POST["pltSettFsm"] : "";
            $pltCorrRaBaseMatel = isset($_POST["pltCorrRaBaseMatel"]) ? $_POST["pltCorrRaBaseMatel"] : "";
            $pltCorrRaCladding = isset($_POST["pltCorrRaCladding"]) ? $_POST["pltCorrRaCladding"] : "";
            $pltThickBaseMetal = isset($_POST["pltThickBaseMetal"]) ? $_POST["pltThickBaseMetal"] : "";
            $pltLinType = isset($_POST["pltLinType"]) ? $_POST["pltLinType"] : "";
            $pltLinAdj = isset($_POST["pltLinAdj"]) ? $_POST["pltLinAdj"] : "";
            $pltYearSer = isset($_POST["pltYearSer"]) ? $_POST["pltYearSer"] : "";
            $pltLvlCausti = isset($_POST["pltLvlCausti"]) ? $_POST["pltLvlCausti"] : "";
            $pltCatCaustic = isset($_POST["pltCatCaustic"]) ? $_POST["pltCatCaustic"] : "";
            $pltLvlAmine = isset($_POST["pltLvlAmine"]) ? $_POST["pltLvlAmine"] : "";
            $pltCatAmine = isset($_POST["pltCatAmine"]) ? $_POST["pltCatAmine"] : "";
            $pltCaSulfide = isset($_POST["pltCaSulfide"]) ? $_POST["pltCaSulfide"] : "";
            $pltPH = isset($_POST["pltPH"]) ? $_POST["pltPH"] : "";
            $pltSuConcentration = isset($_POST["pltSuConcentration"]) ? $_POST["pltSuConcentration"] : "";
            $pltCaH2S = isset($_POST["pltCaH2S"]) ? $_POST["pltCaH2S"] : "";
            $pltH2SConcentration = isset($_POST["pltH2SConcentration"]) ? $_POST["pltH2SConcentration"] : "";
            $pltCaCacbon = isset($_POST["pltCaCacbon"]) ? $_POST["pltCaCacbon"] : "";
            $pltCaConcentration = isset($_POST["pltCaConcentration"]) ? $_POST["pltCaConcentration"] : "";
            $pltCaPTA = isset($_POST["pltCaPTA"]) ? $_POST["pltCaPTA"] : "";
            $pltFunHeaTreat = isset($_POST["pltFunHeaTreat"]) ? $_POST["pltFunHeaTreat"] : "";
            $pltCaCLSCC = isset($_POST["pltCaCLSCC"]) ? $_POST["pltCaCLSCC"] : "";
            $pltTemperPH = isset($_POST["pltTemperPH"]) ? $_POST["pltTemperPH"] : "";
            $pltCloConcentration = isset($_POST["pltCloConcentration"]) ? $_POST["pltCloConcentration"] : "";
            $pltCaHF = isset($_POST["pltCaHF"]) ? $_POST["pltCaHF"] : "";
            $pltHFPresent = isset($_POST["pltHFPresent"]) ? $_POST["pltHFPresent"] : "";
            $pltBrilHardness = isset($_POST["pltBrilHardness"]) ? $_POST["pltBrilHardness"] : "";
            $pltCaHICHF = isset($_POST["pltCaHICHF"]) ? $_POST["pltCaHICHF"] : "";
            $pltSulfurConcentration = isset($_POST["pltSulfurConcentration"]) ? $_POST["pltSulfurConcentration"] : "";
            $pltCaExCorrosion = isset($_POST["pltCaExCorrosion"]) ? $_POST["pltCaExCorrosion"] : "";
            $pltDriExtend = isset($_POST["pltDriExtend"]) ? $_POST["pltDriExtend"] : "";
            $pltCoQuality = isset($_POST["pltCoQuality"]) ? $_POST["pltCoQuality"] : "";
            $pltCataCUI = isset($_POST["pltCataCUI"]) ? $_POST["pltCataCUI"] : "";
            $pltDriCUI = isset($_POST["pltDriCUI"]) ? $_POST["pltDriCUI"] : "";
            $pltCorrRateCUI = isset($_POST["pltCorrRateCUI"]) ? $_POST["pltCorrRateCUI"] : "";
            $pltComplexity = isset($_POST["pltComplexity"]) ? $_POST["pltComplexity"] : "";
            $pltInsu = isset($_POST["pltInsu"]) ? $_POST["pltInsu"] : "";
            $pltAllConfig = isset($_POST["pltAllConfig"]) ? $_POST["pltAllConfig"] : "";
            $pltEnterSoil = isset($_POST["pltEnterSoil"]) ? $_POST["pltEnterSoil"] : "";
            $pltInsuTpy = isset($_POST["pltInsuTpy"]) ? $_POST["pltInsuTpy"] : "";
            $pltCaEXCLSCC = isset($_POST["pltCaEXCLSCCI"]) ? $_POST["pltCaEXCLSCC"] : "";
            $pltDriExCLSCC = isset($_POST["pltDriExCLSCC"]) ? $_POST["pltDriExCLSCC"] : "";
            $pltPipingComp = isset($_POST["pltPipingComp"]) ? $_POST["pltPipingComp"] : "";
            $pltInsCondition = isset($_POST["pltInsCondition"]) ? $_POST["pltInsCondition"] : "";
            $pltCataHTHA = isset($_POST["pltCataHTHA"]) ? $_POST["pltCataHTHA"] : "";
            $pltAgeHTHA = isset($_POST["pltAgeHTHA"]) ? $_POST["pltAgeHTHA"] : "";
            $pltTempHTHA = isset($_POST["pltTempHTHA"]) ? $_POST["pltTempHTHA"] : "";
            $pltHydParPress = isset($_POST["pltHydParPress"]) ? $_POST["pltHydParPress"] : "";
            $pltTempMinBriFac = isset($_POST["pltTempMinBriFac"]) ? $_POST["pltTempMinBriFac"] : "";
            $pltTempUpsetBriFac = isset($_POST["pltTempUpsetBriFac"]) ? $_POST["pltTempUpsetBriFac"] : "";
            $pltTempBrittleFac = isset($_POST["pltTempBrittleFac"]) ? $_POST["pltTempBrittleFac"] : "";
            $pltMinimum = isset($_POST["pltMinimum"]) ? $_POST["pltMinimum"] : "";
            $pltTemImpact = isset($_POST["pltTemImpact"]) ? $_POST["pltTemImpact"] : "";
            $pltMatCUVE = isset($_POST["pltMatCUVE"]) ? $_POST["pltMatCUVE"] : "";
            $pltLowTemp = isset($_POST["pltLowTemp"]) ? $_POST["pltLowTemp"] : "";
            $pltSCE = isset($_POST["pltSCE"]) ? $_POST["pltSCE"] : "";
            $pltRefeTemperture = isset($_POST["pltRefeTemperture"]) ? $_POST["pltRefeTemperture"] : "";
            $pltTemp885 = isset($_POST["pltTemp885"]) ? $_POST["pltTemp885"] : "";
            $pltBriCheckt = isset($_POST["pltBriCheck"]) ? $_POST["pltBriCheck"] : "";
            $pltTempShutdown = isset($_POST["pltTempShutdown"]) ? $_POST["pltTempShutdown"] : "";
            $pltPerSigma = isset($_POST["pltPerSigma"]) ? $_POST["pltPerSigma"] : "";
            $pltNoFailures = isset($_POST["pltNoFailures"]) ? $_POST["pltNoFailures"] : "";
            $pltSevVibration = isset($_POST["pltSevVibration"]) ? $_POST["pltSevVibration"] : "";
            $pltNoWeeks = isset($_POST["pltNoWeeks"]) ? $_POST["pltNoWeeks"] : "";
            $pltCycType = isset($_POST["pltCycType"]) ? $_POST["pltCycType"] : "";
            $pltCorrAcTake = isset($_POST["pltCorrAcTake"]) ? $_POST["pltCorrAcTake"] : "";
            $pltTotalFitting = isset($_POST["pltTotalFitting"]) ? $_POST["pltTotalFitting"] : "";
            $pltTyThisPiping = isset($_POST["pltTyThisPiping"]) ? $_POST["pltTyThisPiping"] : "";
            $pltConPipe = isset($_POST["pltConPipe"]) ? $_POST["pltConPipe"] : "";
            $pltBraDiameter = isset($_POST["pltBraDiameter"]) ? $_POST["pltBraDiameter"] : "";



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
                "InventoryLiquip" => $pltInventoryLiquid,
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
                "CrackPresent"=>$pltCrackPresent,
                "ProtectionBarrier" => $pltPBarrier,
                "InternalLiner" => $pltInLiner,
                "CatalogThinning" =>$pltCaThinning,
                "NumberofInspection[l?n]" =>$pltNuOfInspection,
                "CheckThinning" => $pltChThining,
                "Cladding" => $pltCladding,
                "InjectionPointFip" => $pltInPoiFip,
                "DeadLegsFdl" => $pltDeLegFdl,
                "WeldedConstructionFwd" => $pltWelConsFwd,
                "MaintenanceAccordanceFam" =>$pltMaiAccFsm,
                "SettlementFsm" => $pltSettFsm,
                "CorrosionRateforBaseMatel" =>  $pltCorrRaBaseMatel,
                "CorrosionrateforCladding" => $pltCorrRaCladding,
                "ThicknessOfCompbasemetal" => $pltThickBaseMetal,
                "LinningType" => $pltLinType,
                "LinningConditionAdjusmentFlc" =>$pltLinAdj,
                "YearInService" => $pltYearSer,
                "LevelCaustic" =>$pltLvlCausti,
                "CatalogCaustic" => $pltCatCaustic,
                "LevelAmine" => $pltLvlAmine,
                "CatalogAmine" => $pltCatAmine,
                "CatalogSulfide" =>  $pltCaSulfide,
                "pH" =>  $pltPH,
                "SulfideConcentration[ppm]" => $pltSuConcentration,
                "CatalogHIC/H2S" =>$pltCaH2S,
                "H2SConcentration[ppm]" => $pltH2SConcentration,
                "CatalogCacbon" =>$pltCaCacbon,
                "CacbonConcentration[ppm]" => $pltCaConcentration,
                "CatalogPTA"=> $pltCaPTA,
                "FunctionOfHeatTreatment" => $pltFunHeaTreat,
                "CatalogCLSCC" => $pltCaCLSCC,
                "TemperatureOfpH" =>$pltTemperPH,
                "CloConcentration[ppm]" =>$pltCloConcentration,
                "CatalogHF" =>$pltCaHF,
                "HFpresent" =>$pltHFPresent,
                "BrinellHardness" =>$pltBrilHardness,
                "CatalogHIC/HF" => $pltCaHICHF,
                "SulfurConcentration" => $pltSulfurConcentration,
                "Catalog ExtenalCorrosion" => $pltCaExCorrosion,
                "DriverExtend" => $pltDriExtend ,
                "CoatQuality" => $pltCoQuality,
                "CatalogCUI" => $pltCataCUI,
                "DriverCUI" =>  $pltDriCUI,
                "CorrosionRateforCUI" =>$pltCorrRateCUI,
                "Complexity" =>$pltComplexity,
                "Insulation" => $pltInsu,
                "AllowConfig" =>$pltAllConfig,
                "EnterSoil" =>$pltEnterSoil,
                "InsulationType" => $pltInsuTpy,
                "CatalogExternalCLSCC" =>$pltCaEXCLSCC,
                "DriverExternalCLSCC" =>$pltDriExCLSCC,
                "PipingComplexity" => $pltPipingComp,
                "InsulationCondition" => $pltInsCondition,
                "CatalogHTHA" => $pltCataHTHA,
                "AgeHTHA" => $pltAgeHTHA,
                "TemperatureHTHA[*F]" => $pltTempHTHA,
                "HydrogenPartialPressure[MPa]" =>$pltHydParPress,
                "TempMinforBrittleFacture" =>$pltTempMinBriFac,
                "TempUpsetforBrittleFacture" => $pltTempUpsetBriFac,
                "Temp BoilingforBrittleFacture" => $pltTempBrittleFac,
                "MinimumDesignMetalTemp" =>  $pltMinimum,
                "TempImpact" =>$pltTemImpact,
                "MaterialCurve" => $pltMatCUVE,
                "LowTemperature" => $pltLowTemp ,
                "SCE" => $pltSCE,
                "ReferencTemperature" => $pltRefeTemperture,
                "TempMinfor885" =>$pltTemp885,
                "BrittleCheck" => $pltBriCheckt,
                "TempShutdown" => $pltTempShutdown,
                "PercentSigma" =>$pltPerSigma,
                "NoofPrFatigueFailures" => $pltNoFailures,
                "SeverityofVibration" => $pltSevVibration,
                "NoOfWeeks" => $pltNoWeeks,
                "CyclicType" => $pltCycType,
                "CorrectiveActionsTake" => $pltCorrAcTake,
                "TotalPipeFitting" =>  $pltTotalFitting,
                "TypeOfJointInThisPiping" => $pltTyThisPiping,
                "ConditionOfPipe" =>  $pltConPipe,
                "BranchDiameter" => $pltBraDiameter,
                "tbl_equipmentlist_ItemNo" => $pltEquipment,
                "tbl_component_componentName" => $pltComponent

            );

            if ($pltName != "") {
                if (!file_exists("../../Model/home/equipmentTempModel.php")) {
                    require '../../Controller/404.php';
                    return;
                }
                //require("../../Model/home/equipmentTempModel.php");
               // $newTempModel = new equipmentTempModel();
               // if ($newTempModel->isExist($pltName)) {

               // } else {

                    $this->newTempModel->insertTemplate($data);
               // }
            }
        }
    }

    function ImportData()
    {
        $excel = new PhpExcelReader();
        if (isset($_POST["Import"])) {
            $filename = $_FILES["file"]["tmp_name"];
            if ($_FILES["file"]["size"] > 0) {
                $excel->read($filename);
                for ($row = 2; $row < $this->MaxSize; $row++) {
                    if (($excel->sheets[1]['cells'][$row][1]) === 'Plant') {
                        while (++$row) {
                            try {
                                //echo "While" .$row;
                                $pltName = $excel->sheets[1]['cells'][$row][1];
                                $pltOPI = $excel->sheets[1]['cells'][$row][16];
                                $pltOTI = $excel->sheets[1]['cells'][$row][17];
                                $pltOPO = $excel->sheets[1]['cells'][$row][18];
                                $pltOTO = $excel->sheets[1]['cells'][$row][19];
                                $pltTestPress = $excel->sheets[1]['cells'][$row][20];
                                $pltMDMT = $excel->sheets[1]['cells'][$row][21];
                                $pltInService = $excel->sheets[1]['cells'][$row][22];
                                $pltServiceDate = $excel->sheets[1]['cells'][$row][23];
                                $pltLIIDate = $excel->sheets[1]['cells'][$row][24];
                                $pltLDTBXHCovered = $excel->sheets[1]['cells'][$row][25];
                                $pltInsulated = $excel->sheets[1]['cells'][$row][26];
                                $pltPWHT = $excel->sheets[1]['cells'][$row][27];
                                $pltInsType = $excel->sheets[1]['cells'][$row][28];
                                $pltOperatingState = $excel->sheets[1]['cells'][$row][29];
                                $pltInventoryLiquid = $excel->sheets[1]['cells'][$row][30];
                                $pltInventoryVapor = $excel->sheets[1]['cells'][$row][31];
                                $pltInventoryTotal = $excel->sheets[1]['cells'][$row][32];
                                $pltCISA = $excel->sheets[1]['cells'][$row][33];
                                $pltVapDenAir = $excel->sheets[1]['cells'][$row][34];
                                $pltCorInh = $excel->sheets[1]['cells'][$row][35];
                                $pltFFC = $excel->sheets[1]['cells'][$row][36];
                                $pltMajChem = $excel->sheets[1]['cells'][$row][37];
                                $pltContaminants = $excel->sheets[1]['cells'][$row][38];
                                $pltOnlMon = $excel->sheets[1]['cells'][$row][39];
                                $pltCatPro = $excel->sheets[1]['cells'][$row][40];
                                $pltCorMon = $excel->sheets[1]['cells'][$row][41];
                                $pltOHC = $excel->sheets[1]['cells'][$row][42];
                                $pltDFF = $excel->sheets[1]['cells'][$row][43];
                                $pltEqCou = $excel->sheets[1]['cells'][$row][44];
                                $pltHAZOPRat = $excel->sheets[1]['cells'][$row][45];
                                $pltPerDen = $excel->sheets[1]['cells'][$row][46];
                                $pltMitEqu = $excel->sheets[1]['cells'][$row][47];
                                $pltEnvRat = $excel->sheets[1]['cells'][$row][48];
                                $pltITU = $excel->sheets[1]['cells'][$row][49];
                                $pltEMR = $excel->sheets[1]['cells'][$row][50];
                                $pltInsFin = $excel->sheets[1]['cells'][$row][51];
                                $pltVapDen = $excel->sheets[1]['cells'][$row][52];
                                $pltLiqDen = $excel->sheets[1]['cells'][$row][53];
                                $pltVapor = $excel->sheets[1]['cells'][$row][54];
                                $pltLiquid = $excel->sheets[1]['cells'][$row][55];
                                $pltHMBPFDNum = $excel->sheets[1]['cells'][$row][56];
                                $pltPIDNum = $excel->sheets[1]['cells'][$row][57];
                                $pltService = $excel->sheets[1]['cells'][$row][58];
                                $pltHMBStream = $excel->sheets[1]['cells'][$row][59];

                                $pltCrackPresent = $excel->sheets[1]['cells'][$row][60];
                                $pltPBarrier = $excel->sheets[1]['cells'][$row][61];
                                $pltInLiner = $excel->sheets[1]['cells'][$row][62];
                                $pltCaThinning = $excel->sheets[1]['cells'][$row][63];
                                $pltNuOfInspection = $excel->sheets[1]['cells'][$row][64];
                                $pltChThining = $excel->sheets[1]['cells'][$row][65];
                                $pltCladding = $excel->sheets[1]['cells'][$row][66];
                                $pltInPoiFip = $excel->sheets[1]['cells'][$row][67];
                                $pltDeLegFdl = $excel->sheets[1]['cells'][$row][68];
                                $pltWelConsFwd = $excel->sheets[1]['cells'][$row][69];
                                $pltMaiAccFsm = $excel->sheets[1]['cells'][$row][70];
                                $pltSettFsm = $excel->sheets[1]['cells'][$row][71];
                                $pltCorrRaBaseMatel = $excel->sheets[1]['cells'][$row][72];
                                $pltCorrRaCladding = $excel->sheets[1]['cells'][$row][73];
                                $pltThickBaseMetal = $excel->sheets[1]['cells'][$row][74];
                                $pltLinType = $excel->sheets[1]['cells'][$row][75];
                                $pltLinAdj = $excel->sheets[1]['cells'][$row][76];
                                $pltYearSer = $excel->sheets[1]['cells'][$row][77];
                                $pltLvlCausti = $excel->sheets[1]['cells'][$row][78];
                                $pltCatCaustic = $excel->sheets[1]['cells'][$row][79];
                                $pltLvlAmine = $excel->sheets[1]['cells'][$row][80];
                                $pltCatAmine = $excel->sheets[1]['cells'][$row][81];
                                $pltCaSulfide = $excel->sheets[1]['cells'][$row][82];
                                $pltPH = $excel->sheets[1]['cells'][$row][83];
                                $pltSuConcentration = $excel->sheets[1]['cells'][$row][84];
                                $pltCaH2S = $excel->sheets[1]['cells'][$row][85];
                                $pltH2SConcentration = $excel->sheets[1]['cells'][$row][86];
                                $pltCaCacbon = $excel->sheets[1]['cells'][$row][87];
                                $pltCaConcentration = $excel->sheets[1]['cells'][$row][88];
                                $pltCaPTA = $excel->sheets[1]['cells'][$row][89];
                                $pltFunHeaTreat = $excel->sheets[1]['cells'][$row][90];
                                $pltCaCLSCC = $excel->sheets[1]['cells'][$row][91];
                                $pltTemperPH = $excel->sheets[1]['cells'][$row][92];
                                $pltCloConcentration = $excel->sheets[1]['cells'][$row][93];
                                $pltCaHF = $excel->sheets[1]['cells'][$row][94];
                                $pltHFPresent = $excel->sheets[1]['cells'][$row][95];
                                $pltBrilHardness = $excel->sheets[1]['cells'][$row][96];
                                $pltCaHICHF = $excel->sheets[1]['cells'][$row][97];
                                $pltSulfurConcentration = $excel->sheets[1]['cells'][$row][98];
                                $pltCaExCorrosion = $excel->sheets[1]['cells'][$row][99];
                                $pltDriExtend = $excel->sheets[1]['cells'][$row][100];
                                $pltCoQuality = $excel->sheets[1]['cells'][$row][101];
                                $pltCataCUI = $excel->sheets[1]['cells'][$row][102];
                                $pltDriCUI = $excel->sheets[1]['cells'][$row][103];
                                $pltCorrRateCUI= $excel->sheets[1]['cells'][$row][104];
                                $pltComplexity = $excel->sheets[1]['cells'][$row][105];
                                $pltInsu = $excel->sheets[1]['cells'][$row][106];
                                $pltAllConfig = $excel->sheets[1]['cells'][$row][107];
                                $pltEnterSoil =$excel->sheets[1]['cells'][$row][108];
                                $pltInsuTpy = $excel->sheets[1]['cells'][$row][109];
                                $pltCaEXCLSCC = $excel->sheets[1]['cells'][$row][110];
                                $pltDriExCLSCC = $excel->sheets[1]['cells'][$row][111];
                                $pltPipingComp = $excel->sheets[1]['cells'][$row][112];
                                $pltInsCondition = $excel->sheets[1]['cells'][$row][113];
                                $pltCataHTHA = $excel->sheets[1]['cells'][$row][114];
                                $pltAgeHTHA = $excel->sheets[1]['cells'][$row][115];
                                $pltTempHTHA = $excel->sheets[1]['cells'][$row][116];
                                $pltHydParPress = $excel->sheets[1]['cells'][$row][117];
                                $pltTempMinBriFac = $excel->sheets[1]['cells'][$row][118];
                                $pltTempUpsetBriFac= $excel->sheets[1]['cells'][$row][119];
                                $pltTempBrittleFac = $excel->sheets[1]['cells'][$row][120];
                                $pltMinimum = $excel->sheets[1]['cells'][$row][121];
                                $pltTemImpact = $excel->sheets[1]['cells'][$row][122];
                                $pltMatCUVE = $excel->sheets[1]['cells'][$row][123];
                                $pltLowTemp = $excel->sheets[1]['cells'][$row][124];
                                $pltSCE = $excel->sheets[1]['cells'][$row][125];
                                $pltRefeTemperture = $excel->sheets[1]['cells'][$row][126];
                                $pltTemp885 = $excel->sheets[1]['cells'][$row][127];
                                $pltBriCheckt = $excel->sheets[1]['cells'][$row][128];
                                $pltTempShutdown = $excel->sheets[1]['cells'][$row][129];
                                $pltPerSigma = $excel->sheets[1]['cells'][$row][130];
                                $pltNoFailures = $excel->sheets[1]['cells'][$row][131];
                                $pltSevVibration = $excel->sheets[1]['cells'][$row][132];
                                $pltNoWeeks = $excel->sheets[1]['cells'][$row][133];
                                $pltCycType = $excel->sheets[1]['cells'][$row][134];
                                $pltCorrAcTake = $excel->sheets[1]['cells'][$row][135];
                                $pltTotalFitting = $excel->sheets[1]['cells'][$row][136];
                                $pltTyThisPiping = $excel->sheets[1]['cells'][$row][137];
                                $pltConPipe = $excel->sheets[1]['cells'][$row][138];
                                $pltBraDiameter = $excel->sheets[1]['cells'][$row][139];

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
                                    "InventoryLiquip" => $pltInventoryLiquid,
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
                                    "CrackPresent"=>$pltCrackPresent,
                                    "ProtectionBarrier" => $pltPBarrier,
                                    "InternalLiner" => $pltInLiner,
                                    "CatalogThinning" =>$pltCaThinning,
                                    "NumberofInspection[l?n]" =>$pltNuOfInspection,
                                    "CheckThinning" => $pltChThining,
                                    "Cladding" => $pltCladding,
                                    "InjectionPointFip" => $pltInPoiFip,
                                    "DeadLegsFdl" => $pltDeLegFdl,
                                    "WeldedConstructionFwd" => $pltWelConsFwd,
                                    "MaintenanceAccordanceFam" =>$pltMaiAccFsm,
                                    "SettlementFsm" => $pltSettFsm,
                                    "CorrosionRateforBaseMatel" =>  $pltCorrRaBaseMatel,
                                    "CorrosionrateforCladding" => $pltCorrRaCladding,
                                    "ThicknessOfCompbasemetal" => $pltThickBaseMetal,
                                    "LinningType" => $pltLinType,
                                    "LinningConditionAdjusmentFlc" =>$pltLinAdj,
                                    "YearInService" => $pltYearSer,
                                    "LevelCaustic" =>$pltLvlCausti,
                                    "CatalogCaustic" => $pltCatCaustic,
                                    "LevelAmine" => $pltLvlAmine,
                                    "CatalogAmine" => $pltCatAmine,
                                    "CatalogSulfide" =>  $pltCaSulfide,
                                    "pH" =>  $pltPH,
                                    "SulfideConcentration[ppm]" => $pltSuConcentration,
                                    "CatalogHIC/H2S" =>$pltCaH2S,
                                    "H2SConcentration[ppm]" => $pltH2SConcentration,
                                    "CatalogCacbon" =>$pltCaCacbon,
                                    "CacbonConcentration[ppm]" => $pltCaConcentration,
                                    "CatalogPTA"=> $pltCaPTA,
                                    "FunctionOfHeatTreatment" => $pltFunHeaTreat,
                                    "CatalogCLSCC" => $pltCaCLSCC,
                                    "TemperatureOfpH" =>$pltTemperPH,
                                    "CloConcentration[ppm]" =>$pltCloConcentration,
                                    "CatalogHF" =>$pltCaHF,
                                    "HFpresent" =>$pltHFPresent,
                                    "BrinellHardness" =>$pltBrilHardness,
                                    "CatalogHIC/HF" => $pltCaHICHF,
                                    "SulfurConcentration" => $pltSulfurConcentration,
                                    "Catalog ExtenalCorrosion" => $pltCaExCorrosion,
                                    "DriverExtend" => $pltDriExtend ,
                                    "CoatQuality" => $pltCoQuality,
                                    "CatalogCUI" => $pltCataCUI,
                                    "DriverCUI" =>  $pltDriCUI,
                                    "CorrosionRateforCUI" =>$pltCorrRateCUI,
                                    "Complexity" =>$pltComplexity,
                                    "Insulation" => $pltInsu,
                                    "AllowConfig" =>$pltAllConfig,
                                    "EnterSoil" =>$pltEnterSoil,
                                    "InsulationType" => $pltInsuTpy,
                                    "CatalogExternalCLSCC" =>$pltCaEXCLSCC,
                                    "DriverExternalCLSCC" =>$pltDriExCLSCC,
                                    "PipingComplexity" => $pltPipingComp,
                                    "InsulationCondition" => $pltInsCondition,
                                    "CatalogHTHA" => $pltCataHTHA,
                                    "AgeHTHA" => $pltAgeHTHA,
                                    "TemperatureHTHA[*F]" => $pltTempHTHA,
                                    "HydrogenPartialPressure[MPa]" =>$pltHydParPress,
                                    "TempMinforBrittleFacture" =>$pltTempMinBriFac,
                                    "TempUpsetforBrittleFacture" => $pltTempUpsetBriFac,
                                    "Temp BoilingforBrittleFacture" => $pltTempBrittleFac,
                                    "MinimumDesignMetalTemp" =>  $pltMinimum,
                                    "TempImpact" =>$pltTemImpact,
                                    "MaterialCurve" => $pltMatCUVE,
                                    "LowTemperature" => $pltLowTemp ,
                                    "SCE" => $pltSCE,
                                    "ReferencTemperature" => $pltRefeTemperture,
                                    "TempMinfor885" =>$pltTemp885,
                                    "BrittleCheck" => $pltBriCheckt,
                                    "TempShutdown" => $pltTempShutdown,
                                    "PercentSigma" =>$pltPerSigma,
                                    "NoofPrFatigueFailures" => $pltNoFailures,
                                    "SeverityofVibration" => $pltSevVibration,
                                    "NoOfWeeks" => $pltNoWeeks,
                                    "CyclicType" => $pltCycType,
                                    "CorrectiveActionsTake" => $pltCorrAcTake,
                                    "TotalPipeFitting" =>  $pltTotalFitting,
                                    "TypeOfJointInThisPiping" => $pltTyThisPiping,
                                    "ConditionOfPipe" =>  $pltConPipe,
                                    "BranchDiameter" => $pltBraDiameter
                                );
                                if ($pltName != "") {
                                    if (!file_exists("../../Model/home/equipmentTempModel.php")) {
                                        require("../../Controller/404.php");
                                        return;
                                    }

                                    //print_r($data);
                                    $this->newTempModel->insertTemplate($data);
                                }
                                else
                                    return;
                            } catch (Exception $ex) {
                                return;
                            }
                        }
                        return;
                    }
                }
            }
            else {
                echo "Invalid File:Please Upload CSV File";
            }
        }
    }

}


$equTemp = new equipmentTempController();
$equTemp->imPortData();
$equTemp->index();
header('Location: ../../View/home/index.php?data=home&action=listEquipmentTemp&left=home_left');
ob_end_flush();



