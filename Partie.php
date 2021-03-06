<?php 
class Partie 
{  
    private $est_fini = false; 
    public $set = [];
    public $nbSetJ1 = 0;
    public $nbSetJ2 = 0;
    public function __construct(Joueur $joueur1, Joueur $joueur2) 
    { 
        $this->joueur1 = $joueur1;
        $this->joueur2 = $joueur2;
        // $this->startNouveauSet();
    } 
    public function estFini(): bool 
    { 
        if (($this->nbSetJ1 > 2) || ($this->nbSetJ2 > 2))
        {
            $this->est_fini = true ;
        }
        return $this->est_fini; 
    } 
    public function startNouveauSet() 
    { 
        $this->set[] = new Set();
        $this->set[(count($this->set)-1)]->initPoint();
        echo "Nouveau set : ".(count($this->set))."<br>";
    }
    public function getDernierSet() : set
    {
        return end($this->set);
    }
}