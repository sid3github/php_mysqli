<?php

require('config/db.php');

// create query
$query = 'SELECT * FROM posts';

// get result
$result = mysqli_query($conn,$query);

//fetch data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
        <h1>Posts</h1>
        <?php foreach($posts as $post) : ?>
        <div class="card">
            <h2><?php echo $post['title']; ?></h2>
            <small><?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
            <p><?php echo $post['body']; ?></p>
            <a class="btn btn-primary" href="post.php?id=<?php echo $post['id']; ?>">Read more</a>
        </div>
        <?php endforeach; ?>
    </div>
</body>

</html>