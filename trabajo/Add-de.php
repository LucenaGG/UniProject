<?php

include "dbConn.php"; // Using database connection file here


if(isset($_POST['update'])) // when click on Update button
{
    $a = $_POST['a'];
    $b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$e = $_POST['e'];
	
	
    $edit = mysqli_query($db,"INSERT INTO `department` (`ID`, `D_Name`, `D_head`, `P_number`, `Company`, `Comment`) VALUES (NULL, '$a', '$b', '$c', '$d', '$e')");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:department.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Add Data</h3>

<form method="POST">
  <input type="text" name="a" placeholder="Enter Department Name" Required>
  <input type="text" name="b" placeholder="Enter Head Name" Required>
  <input type="text" name="c" placeholder="Enter Phone Number" Required>
  <input type="text" name="d" placeholder="Enter Company" Required>
  <input type="text" name="e" placeholder="Enter Comment" Required>
  <input type="submit" name="update" value="Add">
</form>