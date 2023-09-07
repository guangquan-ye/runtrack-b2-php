<?php

function insert_student(string $email, string $fullname, string $gender, string $birthdate, int $gradeId){
        
        $db = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8', 'root', 'root');
        $query = 'INSERT INTO student (email, fullname, gender, birthdate, grade_id) VALUES (:email, :fullname, :gender, :birthdate, :grade_id)';
        $stmt = $db->prepare($query);
        $stmt->execute([
            ':email' => $email,
            ':fullname' => $fullname,
            ':gender' => $gender,
            ':birthdate' => $birthdate,
            ':grade_id' => $gradeId
        ]);
        
   
}

if(isset($_POST["submit"])){
    $inputEmail = $_POST["input-email"];
    $inputFullname = $_POST["input-fullname"];
    $inputGender = $_POST["input-gender"];
    $inputBirthdate = $_POST["input-birthdate"];
    $inputGradeId = $_POST["input-grade_id"];
    $birthdate = new DateTime($inputBirthdate);

    insert_student($inputEmail, $inputFullname, $inputGender, $birthdate->format('Y-m-d'), $inputGradeId);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
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

    input {
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
    input, select {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
    input[type="submit"]:hover {
        background-color: #7c6eff;
    }
    </style>
</head>
<body>
    <form action="" method="POST">
       
        <label for="email">Email</label>
        <input type="email" name="input-email" id="email" required>
        <label for="fullname">Fullname</label>
        <input type="text" name="input-fullname" id="fullname" required>
        <label for="gender">Gender</label>
        <select name="input-gender" >
            <option value="female">female</option>
            <option value="male">male</option>
        </select>
        <label for="birthdate">Birthdate</label>
        <input type="date" name="input-birthdate" id="birthdate" required>
        <label for="grade">Grade</label>
        <input type="number" name="input-grade_id" id="grade" required>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
