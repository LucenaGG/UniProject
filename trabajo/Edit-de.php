<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from `department` where `department` . `ID` ='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $a = $_POST['a'];
    $b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$e = $_POST['e'];
	
	
    $edit = mysqli_query($db,"update `department` set `D_Name`='$a', `D_head`='$b', `P_number`='$c',`Company`='$d',`Comment`='$e' where `department` . `ID`='$id'");
	
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

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="a" value="<?php echo $data['D_Name'] ?>" placeholder="Enter Deparment Name" Required>
  <input type="text" name="b" value="<?php echo $data['D_head'] ?>" placeholder="Enter Head Name" Required>
  <input type="text" name="c" value="<?php echo $data['P_number'] ?>" placeholder="Enter Phone Number" Required>
  <input type="text" name="d" value="<?php echo $data['Company'] ?>" placeholder="Enter Company" Required>
  <input type="text" name="e" value="<?php echo $data['Comment'] ?>" placeholder="Enter Comment" Required>
  <input type="submit" name="update" value="Update">
</form>