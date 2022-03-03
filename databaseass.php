<?php

function validator(array $fields)
{
    $errMsg = '';
    foreach ($fields as $key => $field) {
        if ($field == null && $field == '') {
            $errMsg .= $key . " is required" . "<br>";
        }
    }
    return $errMsg;
}


if (isset($_POST['submit'])) {
    $firstName = $_POST['FirstName'];
    $secondName = $_POST['SecondName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];


    $errMsg = validator(['First Name' => $firstName, 'Second Name' => $secondName, 'Age' => $age, 'Gender' => $gender, 'Class' => $class]);
    echo $errMsg;

    if ($errMsg == '') {

        $db_host = 'localhost'; // Server Name
        $db_user = 'root'; // Username
        $db_pass = ''; // Password
        $db_name = 'databaseass'; // Database Name


        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if (!$conn) {
            die('Failed to connect to MySQL: ' . mysqli_connect_error());
        }

        $query = "INSERT INTO students (Firstname, Secondname, Age, Gender, Class) VALUES ('$firstName', '$secondName', '$age', '$gender', '$class')";

        if ($conn->query($query)) {
            $errMg = "Entered data successfully" . "<br>";
        } else {
            $errMg = "could not enter data: " . $conn->error . ". <br>";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            margin: 40px 350px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .col-25,
        .col-75,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    </style>
</head>

<body>
    
    <div class="container">
    <h1>Students Information</h1>
        <form action="" method="POST" enctype="multipart/form-data">
        <?php 
            if(isset($errMg)):
        ?>
            <?=$errMg;?>
            <?php endif; ?>
            <div class="row">
                <div class="col-25">
                    <label>First Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="FirstName" placeholder="First Name">
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-25">
                    <label>Second Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="SecondName" placeholder="Second Name">
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-25"><label>Age:</label>
                </div>
                <div class="col-75">
                    <input type="number" name="age">
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-25">
                    <label>Gender</label>
                </div>
                <div class="col-75">
                    <label>Male</label>
                    <input type="radio" name="gender" value="Male" checked>
                    <label>Female</label>
                    <input type="radio" name="gender" value="Female">
                </div><br>
                <div class="row">
                    <div class="col-25"><label>Class:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="class" placeholder="Class">
                    </div>
                </div><br>
                <div class="row">
                    <input type="submit" name="submit" value="submit">
                </div>
        </form>
    </div>
</body>

</html>