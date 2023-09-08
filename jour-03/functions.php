<?php

require_once 'class/Student.php';
require_once 'class/Grade.php';
require_once 'class/Floor.php';
require_once 'class/Room.php';


function findOneStudent(int $id): Student
{

    $pdo = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8', 'root', 'root');
    $sql = "SELECT * FROM student WHERE id = :id";
    $statement = $pdo->prepare($sql);

    $statement->execute([
        ':id' => $id
    ]);

    $studentData = $statement->fetch(PDO::FETCH_ASSOC);

    return (new Student(
            $studentData["id"],
            $studentData["grade_id"],
            $studentData["email"],
            $studentData["fullname"],
            new DateTime($studentData["birthdate"]),
            $studentData["gender"]
        ));
}
$student = findOneStudent(3);

echo "<pre>";
var_dump($student);
echo "</pre>";


function findOneGrade(int $id): Grade
{

    $pdo = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8', 'root', 'root');
    $sql = "SELECT * FROM grade WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        ':id' => $id
    ]);
    $gradeData = $statement->fetch(PDO::FETCH_ASSOC);

    return (new Grade(
            $gradeData["id"],
            $gradeData["room_id"],
            $gradeData["name"],
            new DateTime($gradeData["year"])
        ));
}
$grade = findOneGrade(1);

echo "<pre>";
var_dump($grade);
echo "</pre>";

function findOnefloor(int $id): Floor
{

    $pdo = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8', 'root', 'root');
    $sql = "SELECT * FROM floor WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        ':id' => $id
    ]);
    $floorData = $statement->fetch(PDO::FETCH_ASSOC);
    return (new Floor(
            $floorData["id"],
            $floorData["name"],
            $floorData["level"]
        ));
}

$floor = findOneFloor(1);

echo "<pre>";
var_dump($floor);
echo "</pre>";

function findOneRoom(int $id): Room
{

    $pdo = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8', 'root', 'root');
    $sql = "SELECT * FROM room WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        ':id' => $id
    ]);
    $roomData = $statement->fetch(PDO::FETCH_ASSOC);
    return (new Room(
            $roomData["id"],
            $roomData["floor_id"],
            $roomData["name"],
            $roomData["capacity"]
        ));
}
$room = findOneRoom(2);
echo "<pre>";
var_dump($room);
echo "</pre>";
