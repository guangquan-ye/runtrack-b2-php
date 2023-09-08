<?php

Class Grade{

    private ?int $id;
    private ?int $room_id;
    private ?string $name;
    private ?DateTime $year;

    public function __construct($gradeId = null, $roomId = null, $name = null, $year = null)
    {
        $this->id = $gradeId;
        $this->room_id = $roomId;
        $this->name = $name;
        $this->year = $year;
    }

    public function setId($gradeId){
        $this->id = $gradeId;
    }

    public function setRoomId($roomId){
        $this->room_id = $roomId;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setYear($year){
        $this->year = $year;
    }

    public function getId(){
        return $this->id;
    }

    public function getRoomId(){
        return $this->room_id;
    }

    public function getName(){
        return $this->name;
    }

    public function getYear(){
        return $this->year;
    }

    
}

?>