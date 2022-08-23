<?php

$conn = mysqli_connect('localhost','root','','user_db');


if(!conn){
    die("connection filed" . mysqli_connect_error());
}

echo("connect successfully");

?>