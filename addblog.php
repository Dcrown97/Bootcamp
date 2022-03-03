<?php
require 'connection.class.php';
function validator(array $fields)
{
    $msg = '';
    foreach ($fields as $key => $field) {
        if ($field == null && strlen($field) == '') {
            $msg .= $key . ' is required <br>';
        }
    }
    return $msg;
}

// var_dump(isset($errMsg));
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $image = $_FILES['image']['name'];
    $content = $_POST['content'];

    $slug = str_replace(' ', '-', $title);

    $errMsg = validator(['title' => $title, 'image' => $image, 'content' => $content]);

    if ($errMsg == '') {

        $our_oooo = new Dbconnection();
        $query = "INSERT INTO blogs (blog_title, slug, author, image, content) VALUES ('$title', '$slug', '$author', '$image', '$content')";
        if ($our_oooo->ourquery($query)) {
            $errMsg = "Entered data successfully . <br>";
        } else {
            $errMsg = 'could not enter data: ' . $conn->error . '. <br>';
        }
    }
}

// $db_host = 'localhost'; // Server Name
// $db_user = 'root'; // Username
// $db_pass = ''; // Password
// $db_name = 'bootcamp2021'; // Database Name

// $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// $query = "SELECT * FROM blogs";
// $stmt = $conn->query($query);
// $count = mysqli_num_rows($stmt);
// // var_dump($stmt->fetch_assoc());
// $all_data = [];


?>
<!DOCTYPE html>
<html>

<head>
    <title>add user</title>
</head>

<body>
    <h1>Add user</h1>
    <form method="POST" enctype="multipart/form-data">
        <?php if (isset($errMsg)) : ?>
            <?= $errMsg; ?>
        <?php endif; ?>
        <label>Title:</label> <input type="text" name="title" placeholder="enter the title" value=""><br><br>
        <label>Author:</label> <input type="text" name="author" placeholder="enter the author" value=""><br><br>
        <label>image:</label> <input type="file" name="image" value=""><br><br>
        <label>Content:</label> <textarea name="content" id="" cols="30" rows="10"></textarea><br><br>

        <input type="submit" name="submit" value="submit">
    </form>

    <table>
        <thead>
            <th>
                <td>Title</td>
                <td>Slug</td>
                <td>Content</td>
                <td>Author</td>
                <td>Image</td>
                <td>Created</td>
            </th>
        </thead>
        <tbody>
            <?php
                if ($count > 0):                    
                    while ($row = $stmt->fetch_assoc()):
            ?>
            <tr>
                <td><?=$row['blog_title']?></td>
                <td><?=$row['slug']?></td>
                <td><?=$row['content']?></td>
                <td><?=$row['author']?></td>
                <td><?=$row['image']?></td>
                <td><?=$row['created_at']?></td>
            </tr>
            <?php endwhile;endif; ?>
        </tbody>
    </table>

</body>

</html>