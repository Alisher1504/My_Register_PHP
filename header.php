<?php

session_start();

@include 'config.php';

if(!isset($_SESSION['usermail'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="container">

    <div class="content">

        <h3>welcome!</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus quasi rerum, culpa in odit porro! Esse eos velit debitis iste fuga ut quo? Sit voluptatibus ab explicabo voluptate, aut aspernatur!</p>
        <p>your email: <span><?php echo $_SESSION['usermail']; ?></span></p>
        <a href="./logout.php" class="logout">logout</a>
    </div>

    </div>

</body>
</html>