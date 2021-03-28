<?php
function db_connect()
{
    global $conn;

    $db_server = "localhost";
    $username ="root";
    $password ="";
    $db_name = "project1";

    $conn = new mysqli($db_server,$username,$password,$dbname);

}