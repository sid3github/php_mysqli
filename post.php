<?php

require('config/db.php');

// get id
$id = mysqli_real_escape_string($conn, $_GET['id']);

// create query
$query = 'SELECT * FROM posts WHERE id = '. $id;

// get result
$result = mysqli_query($conn,$query);

//fetch data
$post = mysqli_fetch_assoc($result);
// var_dump($posts);

//free results
mysqli_free_result($result);

// close connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP with MySQLi Test_one</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <a href="/index.php"><button class="btn-primary">Back</button></a><br>
        <h1><?php echo $post['title']; ?></h1>
        <small><?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
        <p><?php echo $post['body']; ?></p>
    </div>
</body>

</html>