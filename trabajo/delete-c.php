<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"delete from `company` where `company` . `ID` = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:company.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>