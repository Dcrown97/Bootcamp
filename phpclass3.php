<?php

    function validator(array $fields){
        $errMsg = '';
        foreach($fields as $key => $field){
            if($field == null && strlen($field) < 1 ){
                $errMsg.= 'field is required <br>';
            } 
        }
        return $errMsg;
    }




if (isset($_POST['Title'])){
    $Title = $_POST['Title'];
    $Author = $_POST['Author'];
    $Image = $_FILES['Image']['name'];
    $Content = $_POST['Content'];
    $errMsg = '';

    $errMsg = validator(['Title' =>$Title, 'Author' =>$Author, 'Image' =>$Image, 'Content' =>$Content]);
    if($errMsg ==''){







        $errMsg = 'Successful <br>';
    }

    if($Title == null && $Title == ''){
        $errMsg.= 'Title is required <br>';
    }
    if($Author == null && $Author == ''){
        $errMsg.= 'Author is required <br>';
    }
    if($Image == null && $Image == ''){
        $errMsg.= 'Image is required <br>';
    }
    if($Content == null && $Content == ''){
        $errMsg.= 'Title is required <br>';
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
</head>
<body>
    <h1>My First Form</h1>
    <form action="" method="POST">
        <label>Title</label><br/>
        <input type="text" name="Title" placeholder="Title"><br/>
        <label>Author</label><br/>
        <input type="text" name="Author" placeholder="Author"></br>
        <label>Image</label><br/>
        <input type="file" name="Image"></br>
        <label>Content</label><br/>
        <textarea name="Content"></textarea></br>
        <button type="submit" name="dara">Upload file</button></br>
    </form>
    <table>
        <thead>
            <th>
                <tr>Title</tr>
                <tr>Slug</tr>
                <tr>Author</tr>
                <tr>Image</tr>
                <tr>Content</tr>
                <tr>Created</tr>
            </th>
        </thead>
    </table>
</body>
</html>