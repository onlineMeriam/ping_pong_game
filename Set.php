<?php 
class Set 
{ 
    private $est_fini = false; 
    Public $pointJ1 = 0;
    Public $pointJ2 = 0;
    public $listScore = array();
    public function __construct() 
    { 
    } 
    public function estFini()
    { 
        $ecart = abs($this->pointJ1 - $this->pointJ2);
        if ((($this->pointJ1 > 10) || ($this->pointJ2 > 10)) && ($ecart > 1))
            {
                // echo "Le set fini avec un score de ".$this->pointJ1."-".$this->pointJ2."<br>";
                $this->est_fini = true;
            }
        return $this->est_fini; 
    } 
    public function addPoint(int $p1, int $p2)
    {
        $this->pointJ1 = $this->pointJ1 + $p1;
        $this->pointJ2 = $this->pointJ2 + $p2;
        array_push($this->listScore, $this->pointJ1,$this->pointJ2);
    }
    
    public function initPoint()
    {
        $this->pointJ1 = 0;
        $this->pointJ2 = 0;
        array_push($this->listScore, $this->pointJ1,$this->pointJ2);
    }

}
