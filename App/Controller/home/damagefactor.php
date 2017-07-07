<?php
require("../../Model/home/rbi.php");
class damageFactor
{
    public $calculatorDate = 2017;
    public $ageTK = 0;
    public  $Trd =30.5;
    public  $T =30; //?? NomailThich from component
    public  $Tmin =20;
    public  $InstallDate = 2016;
    public $Date = 2016;
    public  $CrB = 2;
    public  $InspEff = 2;
    public  $numOfnsp = 1;
    public  $Fps = 1;
    public  $Fip = 1;
    public  $CA = 20; // ???
    public  $levelInsp ='A';

    public $select = 0;
    public $Crcm =0;
    public  $Crbm = 2;
    public  $Fom = 10;
    public  $Fdl = 1;
    public  $Fwd = 1;
    public  $Fam =1;
    public  $Fsm = 1;
    public  $thinningDamage = 1;

    public  function min ($a , $b){
        if($a<=$b)
            return $a;
        else
            return $b;
    }
    public function  max($a, $b){
        if($a>=$b)
            return $a;
        else
            return $b;
    }
    private function ageCoat(){
        $age  = $this->calculatorDate -$this->Date;
          return max($age,0.0);
    }
    private function  age(){
        return min($this->ageCoat(), $this->ageTK);
    }
    public function Cr(){
        $cr = $this->CrB * max($this->Fps , $this->Fip);
        return $cr;
    }
    public function Artdex(){
        $art = (1- ($this->Trd - $this->Cr() * $this->age()) / ($this->Tmin +$this->CA));
        return max($art,0.0);
    }
    public  function  ageRC(){
        $age = ($this->Trd - $this->T) / $this->Crcm ;
        return max($age,0.0);
    }
    public  function Artdf(){
        $art = 0;
            if($this->select){
                $art = (1 - ($this->Trd - $this->Crcm * $this->ageRC() - $this->Crbm * ($this->ageTK - $this->ageRC())) / ($this->Tmin + $this->CA));
            }
              else
              {
                  $art = 1 - ($this->Trd - $this->Crbm * $this ->ageTK) / ($this->Tmin + $this->CA);
              }
                return max($art,0.0);

    }
    public function getDfb(){
        $rbi= new rbi();
        $art = $this->Artdf();
        $ART = "";
        if($art >0){
            $ART = $rbi->getmaxArt($art);
        }
        else{
            $ART = "0.02";
        }

        $getDfb = $rbi->getDfb($ART,$this->numOfnsp, $this->levelInsp);
       // $get = $getDfb[0];
        return $getDfb;
       // echo $getDfb;

    }

    public  function Df(){
        $df =($this->getDfb() * $this->Fip * $this->Fdl * $this->Fwd * $this->Fam * $this->Fsm) / ($this->Fom);
        return $df;
        echo $df;
    }
    public function  getDex(){
        $rbi = new rbi();
        $art = $this ->Artdex();
        $ART =$rbi->getmaxArt($art);
        $getDfb = $rbi->getDfb($ART, $this->numOfnsp,$this->levelInsp);
        return $getDfb;

    }
    public  function  getDF(){
        if($this->thinningDamage)
            return $this ->getDex()+ $this->df();
        else
            return max((double)$this->getDex() + (double)$this->df());
    }
    public function changeDF(){
        $df = $this->getDF();
        if($df <=2){
            return"A";
            echo "A";}
        else if($df >2 && $df <=20){
            return"B"; echo "B";}
        else if($df >20 && $df <=100){
            return"C"; echo "C";}
        else if($df >100 && $df<=100){
            return "D"; echo "D";}
        else {return"E"; echo "E";}
    }
}

$demo = new damageFactor();
$demo->changeDF();
//$demo->Df();
?>