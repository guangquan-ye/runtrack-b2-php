<?php

function find_one_student(string $email) : array{
    $db = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8', 'root', 'root');
    $query = 'SELECT * FROM student WHERE email = :email';
    $stmt = $db->prepare($query);
    $stmt->execute([':email' => $email]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);
    return $student;
}

if(isset($_GET['email'])) {
    $student = find_one_student($_GET['email']);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <style>
    form {
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="email"] {
        width: 90%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        justify-content: center;
    }

    input[type="submit"] {
        background-color: #9381FF;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 3px;
    }

    input[type="submit"]:hover {
        background-color: #7c6eff;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin: 5% auto;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #9381FF;
        color: #fff;
    }
</style>

</head>
<body>
    <form action="" method="GET">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Search">
    </form>

    <?php if (!empty($student)): ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Grade_ID</th>
                <th>Email</th>
                <th>Fullname</th>
                <th>Birthdate</th>
                <th>Gender</th>
            </tr>
            <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['grade_id'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= $student['fullname'] ?></td>
            <td><?= $student['birthdate'] ?></td>
            <td><?= $student['gender'] ?></td>
            </tr>
        
        </table>
    <?php endif; ?>    
</body>
</html>