<?php

// connecting with database

$conn = new mysqli('localhost:3307','root','','test');
if($conn->connect_error)
{
    die("Problem Occured".$conn->connect_error);
}
 ?>