<?php

include "dbConn.php"; // Using database connection file here


if(isset($_POST['update'])) // when click on Update button
{
    $a = $_POST['a'];
    $b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$e = $_POST['e'];
	$f = $_POST['f'];
	$g = $_POST['g'];
	
	
    $edit = mysqli_query($db,"INSERT INTO `company` (`ID`, `C_Name`, `Address`, `P_Num`, `Email`, `Owner`, `Active`, `Comment`) VALUES (NULL, '$a', '$b', '$c', '$d', '$e', '$f', '$g')");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:company.php"); // redirects to all records page
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
  <input type="text" name="a" placeholder="Enter Company" Required>
  <input type="text" name="b" placeholder="Enter Address" Required>
  <input type="text" name="c" placeholder="Enter Phone Number" Required>
  <input type="text" name="d" placeholder="Enter Email" Required>
  <input type="text" name="e" placeholder="Enter Owner's name" Required>
  <input type="text" name="f" placeholder="Active(yes) or no" Required>
  <input type="text" name="g" placeholder="Enter Comment" Required>
  <input type="submit" name="update" value="Add">
</form>