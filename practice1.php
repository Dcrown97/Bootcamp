<?php

// function check($nameList, $fn, $sn){
//     for ($x = 0; $x < count($nameList); $x++){
//         if ($nameList[$x] = $fn || $sn);
//         echo "Welcome" . $fn . $sn;
//     }
// } 
function validate(array $names)
{
    $firstName = $_POST['firstName'];
    $secondName = $_POST['secName'];
    for ($x = 0; $x < count($names); $x++) {
        if ($names[$x] == $firstName || $names == $secondName) {
            return "Welcome $firstName $secondName";
        } else {
            return "Doesnt match";
        }
    }
}

if (isset($_POST['firstName'])) {

    $firstName = $_POST['firstName'];
    $secondName = $_POST['secName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $upload = $_FILES['image']['name'];
    $gender = $_POST['gender'];

    $nameList = ['bola', 'sola', 'yomi', 'tony', 'bayo', 'tolu', 'jimmy',];
    $result = validate($nameList);
    echo $result;
    // foreach ($nameList as $names) {
    //     if ($names == $firstName || $names == $secondName) {
    //         echo "Welcome $firstName $secondName";
    //     }
    // }


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
        .container {
            margin: 10% auto;
            width: 60%;
            border: 1px solid green;

        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method='POST' enctype="multipart/form-data">
            <div>
                <label>FirstName</label>
                <input type="text" name="firstName" placeholder="FirstName">
            </div>
            <div>
                <label>SecondName</label>
                <input type="text" name="secName" placeholder="SecodName">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Email Address">
            </div>
            <div>
                <label>Phone Number</label>
                <input type="number" name="phone_number">
            </div>
            <div>
                <label>Upload </label>
                <input type="file" name="image">
            </div>
            <div>
                <label>Gender</label>
                <div>
                    <label for="">Male</label>
                    <input type='radio' name='gender' value='Male' checked>
                </div>
                <div>
                    <label for="">Female</label>
                    <input type='radio' name='gender' value='Female'>
                </div>
            </div>

            <div><input type="submit" name='submit'></div>


        </form>
    </div>
</body>

</html>