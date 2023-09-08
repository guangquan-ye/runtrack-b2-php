<?php
require_once 'class/Student.php';
require_once 'class/Grade.php';
require_once 'class/Room.php';
require_once 'class/Floor.php';


$student = new Student(1, 1, "nawak@email.com", "Jeremy Nawak", new DateTime("1990-01-01"), "Male");
$student = new Student();

$grade = new Grade(1, 8, "Bachelor 1", new DateTime("2023-01-09"));
$grade = new Grade();

$room = new Room(1, 1, "RDC Food and Drinks", 90);
$room = new Room();

$floor = new Floor(1, "Rez-de-chaussée", 0);
$floor = new Floor();


?>