<?php
class Joueur 
{
    public function __construct(string $userName) 
    {  
        $this->userName = $userName; 
        // $this->id = $userId; 
    } 
    public function getName() 
    { 
        return $this->userName; 
    } 
    public function getId() 
    { 
        return $this->userId; 
    } 
}
?>