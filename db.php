<?php
 $connection=mysqli_connect('localhost','root','','comments');
 if ($connection!=true) {
     echo 'Не получается связаться с базой данных';
 }