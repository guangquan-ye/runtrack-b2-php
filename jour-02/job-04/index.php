<?php
function find_all_students_grade($grade_id) {
    $db = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8', 'root', 'root');

    $query = 'SELECT * FROM student INNER JOIN grade ON student.grade_id = grade.id WHERE student.grade_id = :grade_id';
    $stmt = $db->prepare($query);
    $stmt->bindParam(':grade_id', $grade_id, PDO::PARAM_INT);
    $stmt->execute();
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // echo '<pre>';
    // var_dump($students);
    // echo '</pre>';
    return $students;
}

$all_students = find_all_students_grade(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>By grade</title>
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
            <th>Email</th>
            <th>Fullname</th>
            <th>Grade Name</th>
        </tr>
        <?php foreach($all_students as $student): ?>
        <tr>
            <td><?= $student['email'] ?></td>
            <td><?= $student['fullname'] ?></td>
            <td><?= $student['name'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>