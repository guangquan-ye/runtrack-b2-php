<?php

function find_all_students() : array {
    $db = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8', 'root', 'root');
    $query = 'SELECT * FROM student';
    $stmt = $db->prepare($query);
    $stmt->execute(); 
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $students;
}

$all_students = find_all_students();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #9381FF;
        }
        
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Grade_ID</th>
            <th>Email</th>
            <th>Fullname</th>
            <th>Birthdate</th>
            <th>Gender</th>
        </tr>
        <?php foreach($all_students as $student): ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['grade_id'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= $student['fullname'] ?></td>
            <td><?= $student['birthdate'] ?></td>
            <td><?= $student['gender'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
