<?php

Class Floor{

    private ?int $id;
    private ?string $name;
    private ?int $level;

    public function __construct($floorId = null, $name = null, $level= null)
    {
        $this->id = $floorId;
        $this->name = $name;
        $this->level = $level;
    }
    
    public function setId($floorId){
        $this->id = $floorId;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setLevel($level){
        $this->level = $level;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getLevel(){
        return $this->level;
    }


}
?>