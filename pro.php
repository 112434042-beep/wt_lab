<!DOCTYPE html>
<html>
<head>
    <title>Simple Post Website</title>
    <style>
        body{
            font-family: Arial;
            background:#f4f4f4;
            margin:0;
            padding:20px;
        }
        .container{
            width:700px;
            margin:auto;
            background:#fff;
            padding:20px;
            border-radius:5px;
        }
        textarea{
            width:100%;
            height:120px;
        }
        input[type=submit]{
            background:#007bff;
            color:#fff;
            padding:10px 20px;
            border:none;
            cursor:pointer;
        }
        .post{
            border:1px solid #ddd;
            padding:10px;
            margin-top:10px;
            background:#fafafa;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Create Post</h2>

    <form action="save.php" method="POST">
        <input type="text" name="title" placeholder="Post Title" required><br><br>

        <textarea name="content" placeholder="Write your post..." required></textarea><br><br>

        <input type="submit" value="Publish Post">
    </form>

    <hr>

    <h2>All Posts</h2>

    <?php
    if(file_exists("posts.txt")){
        $posts=file("posts.txt");
        foreach(array_reverse($posts) as $post){
            echo "<div class='post'>$post</div>";
        }
    }
    ?>
</div>

</body>
</html><?php

$username = $_GET['username'];
$password = $_GET['password'];

// Valid credentials
$validUser = "admin";
$validPass = "12345";

echo "<h2>PHP Response</h2>";

if ($username == $validUser && $password == $validPass)
{
    echo "<h3 style='color:green;'>Login Successful!</h3>";
    echo "Welcome, " . htmlspecialchars($username);
}
else
{
    echo "<h3 style='color:red;'>Login Failed!</h3>";
    echo "Invalid Username or Password.";
}

?>