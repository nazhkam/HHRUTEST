<?php
require "db.php";
$nickname = $_POST['nickname'];
$comment = $_POST['comment'];
$date = date("Y-m-d H:i:s");
$value=mysqli_query($connection, "INSERT INTO `comments` (`id`, `nickname`, `comment`, `date`) VALUES (NULL, '$nickname', '$comment', '$date')");
header('Location:index.php');
