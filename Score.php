<?php 
class Score 
{ 
    public $score = [];
    public function setScore(int $numSet, int $nbJ1, int $nbJ2)
    {
        $this->score[] = new score();
        $this->score[(count($this->score)-1)] = array($this->numSet, $this->pointJ1,$this->pointJ2);
    }
    public function getScore()
    {
        return this->score;
    }
}
?>