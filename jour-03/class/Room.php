<?php

Class Room{
    
    private ?int $id;
    private ?int $floor_id;
    private ?string $name;
    private ?int $capacity;
   

    public function __construct($roomId = null, $floorId = null, $name = null, $capacity = null)
    {
        $this->id = $roomId;
        $this->floor_id = $floorId;
        $this->name = $name;
        $this->capacity = $capacity;
       
    }

    public function setId($roomId){
        $this->id = $roomId;
    }

    public function setFloorId($floorId){
        $this->floor_id = $floorId;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setCapacity($capacity){
        $this->capacity = $capacity;
    }

    public function getId(){
        return $this->id;
    }

    public function getFloorId(){
        return $this->floor_id;
    }

    public function getName(){
        return $this->name;
    }

    public function getCapacity(){
        return $this->capacity;
    }


}
?>