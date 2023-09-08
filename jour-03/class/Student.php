<?php

Class Student {

    private ?int $id;
    private ?int $grade_id;
    private ?string $email;
    private ?string $fullname;
    private ?datetime $birthdate;
    private ?string $gender;

    public function __construct($studentId = null, $gradeId = null, $email = null, $fullname = null, $birthdate = null, $gender = null)
    {
        $this->id = $studentId;
        $this->grade_id = $gradeId;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
    }

    public function setId($studentId){
        $this->id = $studentId;
    }

    public function setGradeId($gradeId){
        $this->grade_id = $gradeId;
    }   

    public function setEmail($email){
        $this->email = $email;
    }

    public function setFullname($fullname){
        $this->fullname = $fullname;
    }

    public function setBirthdate($birthdate){
        $this->birthdate = $birthdate;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }

    public function getId(){
        return $this->id;
    }

    public function getGradeId(){
        return $this->grade_id;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getFullname(){
        return $this->fullname;
    }

    public function getBirthdate(){
        return $this->birthdate;
    }

    public function getGender(){
        return $this->gender;
    }
}   
?>