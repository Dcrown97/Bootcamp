<?php

    // function validator($myArray) {
    //     $message="";
    //     foreach($myArray as $key => $value) {
    //         if(strlen($value < 1)){
    //             $message .= $key. "cannot be empty" . '<br>';
    //         }
    //         else {
    //             $message = "";
    //         }

    //     }
    //     return $message;
    // }

    if (isset($_POST['form_submit'])){
        $firstname=$_POST['first_name'];
        $secondname=$_POST['second_name'];
        $phonenumber=$_POST['phone_number'];
        $email=$_POST['user_email'];
        $image=$_FILES['user_image']['name'];

        // A way of validating your inputs.
        if (strlen($firstname) < 1 || strlen($secondname) < 1 || strlen($phonenumber) < 1 || strlen($email) < 1 || strlen($image) < 1) {
            echo "Please fill in all details";
        }
        else{
            
        }

    // $form_details = [
    //     'firstName' => $firstname,
    //     'secondName' => $secondname,
    //     'phn_number' => $phonenumber,
    //     'Email' => $email,
    //     'Image' => $image,
    // ];

    // $msg = validator($form_details);
    // echo $msg;

    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container{
            
            width: auto;
            height: auto;
            background-color: skyblue;
            border: 5px lightblue;
            border-radius: 5px;
            margin: 50px;
            padding: 50px;
            
        }
        .form{
            text-align: center;
            display: inline-block;
            width: 50%;
            height: 50%;
            padding: 10px;
            border: 2px seashell;
        }
        .btn{
            text-align: center;
        }

    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form">
                <label for="">First Name:</label>
                <input type="text" name="first_name">
            </div>
            <div class="form">
                <label for="">Second Name:</label>
                <input type="text" name="second_name">
            </div>
            <div class="form">
                <label for="">Phone Number:</label>
                <input type="number" name="phone_number">
            </div>
            <div class="form">
                <label for="">Email:</label>
                <input type="email" name="user_email">
            </div>
            <div class="form">
                <label for="">Image</label>
                <input type="file" name="user_image">
            <div class="btn">
                <button type="submit" name="form_submit">Submit</button>
            </div>
            </div>
        </form>

    </div>
</body>
</html>