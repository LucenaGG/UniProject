<?php

$db = mysqli_connect("localhost","root","","trabajo");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>