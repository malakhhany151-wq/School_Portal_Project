<?php

$host = "localhost";
$username = "root";
$pass= "";
$db = "student_db";

$con = mysqli_connect($host , $username , $pass , $db  );

if (!$con){
    die("connection is field : " . mysqli_connect_error());
}
else{
    
}

?>