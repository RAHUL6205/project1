<?php
require_once('../config.php');
db_connect();

$insert_sql = "INSERT INTO studentdata(studentname,usn,phone_no,semester,dob,gender) VALUES (?,?,?,?,?,?)";
$statement = $conn->prepare($insert_sql);
$statement->bind_param('ssssss',$_POST['name'],$_POST['usn'],$_POST['number'],$_POST['semester'],$_POST['gender']);

