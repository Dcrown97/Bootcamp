<?php
require "connection.class.php";
function validator(array $details)
{

   $errMsg = "";

   foreach ($details as $key => $detail) {

      if ($detail == null && $detail == "") {

         $errMsg .= $key . " is required" . "<br>";
      }
   }
   return $errMsg;
}


if (isset($_POST['Register'])) {

   // echo "What are you doing";
   $firstname = $_POST["firstname"];
   $lastname = $_POST["lastname"];
   $class = $_POST["class"];
   $age = $_POST["age"];
   $gender = $_POST["gender"];


   $errMsg =  validator(["firstname" => $firstname, "lastname" => $lastname, "class" => $class, "age" => $age, "gender" => $gender]);
   echo $errMsg;






   if ($errMsg == "") {

      $connectMe = new Dbconnection; 

      $query = "INSERT INTO students (Firstname, Secondname, Age, Gender, Class) VALUES ('$firstname', '$lastname', '$age', '$gender', '$class')";

      if ($connectMe->ourquery($query)) {

         $errMg = "Student profile created successfully! . <br>";
      } else {
         $errMg = 'could not enter data: ' . $conn->error . '. <br>';
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
   <title>Student</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <style>
      .card {
         width: 40%;
         background-color: #ffd1c4;
         margin: 40px 30%;
         border: 1px solid black;
         box-shadow: 5px 10px 8px 10px #b6e7e4;

      }

      .form {
         margin: 10% 30%;
      }

      .successmsg {
         color: green;
      }
   </style>
</head>

<body>
   <div class="container">
      <div class="card">
         <div class="form">
            @csrf
            <?php if (isset($errMg)) { ?>
               <div class="successmsg">
                  <h3><?php echo $errMg; ?></h3>
               </div>
            <?php } else { ?>
               <form action="" method="POST" enctype="multipart/form-data">

                  <label for="">Firtname:</label>
                  <input type="text" name="firstname" required><br><br>
                  <label for="">Lastname:</label>
                  <input type="text" name="lastname" required> <br><br>
                  <label for="">Class:</label>
                  <input type="text" name="class" required> <br><br>
                  <label for="">Age:</label>
                  <input type="number" name="age" required><br><br>
                  <label for="">Gender:</label>
                  <h4>Male</h4>
                  <input type="radio" checked name="gender" value="Male">
                  <h4>Female</h4>
                  <input type="radio" name="gender" value="Female"><br>
                  <button class="btn btn-primary" name="Register" type="submit">Register</button>

               </form>
            <?php } ?>
         </div>
      </div>
   </div>
</body>

</html>