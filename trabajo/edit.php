<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from `student` where `student` . `stu_id` ='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

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
	
    $edit = mysqli_query($db,"update `student` set `Student_ID`='$a', `Student_Name`='$b', `Gender`='$c',`Address`='$d',`Telephone`='$e',`Semester`='$f',`Company`='$g',`Department`='$h',`Comment`='$i' where `student` . `stu_id`='$id'");
	
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

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="a" value="<?php echo $data['Student_ID'] ?>" placeholder="Enter ID" Required>
  <input type="text" name="b" value="<?php echo $data['Student_Name'] ?>" placeholder="Enter Name" Required>
  <input type="text" name="c" value="<?php echo $data['Gender'] ?>" placeholder="Enter Gender" Required>
  <input type="text" name="d" value="<?php echo $data['Address'] ?>" placeholder="Enter Address" Required>
  <input type="text" name="e" value="<?php echo $data['Telephone'] ?>" placeholder="Enter Phone Number" Required>
  <input type="text" name="f" value="<?php echo $data['Semester'] ?>" placeholder="Enter Semester" Required>
  <input type="text" name="g" value="<?php echo $data['Company'] ?>" placeholder="Enter Company" Required>
  <input type="text" name="h" value="<?php echo $data['Department'] ?>" placeholder="Enter Department" Required>
  <input type="text" name="i" value="<?php echo $data['Comment'] ?>" placeholder="Enter Comment" Required>
  <input type="submit" name="update" value="Update">
</form>