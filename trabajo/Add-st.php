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
	$h = $_POST['h'];
	$i = $_POST['i'];
	
    $edit = mysqli_query($db,"INSERT INTO `student` (`stu_id`, `Student_ID`, `Student_Name`, `Gender`, `Address`, `Telephone`, `Semester`, `Company`, `Department`, `Comment`) VALUES (NULL, '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i')");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:index.php"); // redirects to all records page
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
  <input type="text" name="a" placeholder="Enter ID" Required>
  <input type="text" name="b" placeholder="Enter Name" Required>
  <input type="text" name="c" placeholder="Enter Gender" Required>
  <input type="text" name="d" placeholder="Enter Address" Required>
  <input type="text" name="e" placeholder="Enter Phone Number" Required>
  <input type="text" name="f" placeholder="Enter Semester" Required>
  <input type="text" name="g" placeholder="Enter Company" Required>
  <input type="text" name="h" placeholder="Enter Department" Required>
  <input type="text" name="i" placeholder="Enter Comment" Required>
  <input type="submit" name="update" value="Add">
</form>