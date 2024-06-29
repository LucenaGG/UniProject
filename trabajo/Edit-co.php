<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from `company` where `company` . `ID` ='$id'"); // select query

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
	
    $edit = mysqli_query($db,"update `company` set `C_Name`='$a', `Address`='$b', `P_Num`='$c',`Email`='$d',`Owner`='$e',`Active`='$f',`Comment`='$g' where `company` . `ID`='$id'");
	
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

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="a" value="<?php echo $data['C_Name'] ?>" placeholder="Enter ID" Required>
  <input type="text" name="b" value="<?php echo $data['Address'] ?>" placeholder="Enter Name" Required>
  <input type="text" name="c" value="<?php echo $data['P_Num'] ?>" placeholder="Enter Gender" Required>
  <input type="text" name="d" value="<?php echo $data['Email'] ?>" placeholder="Enter Address" Required>
  <input type="text" name="e" value="<?php echo $data['Owner'] ?>" placeholder="Enter Phone Number" Required>
  <input type="text" name="f" value="<?php echo $data['Active'] ?>" placeholder="Enter Semester" Required>
  <input type="text" name="g" value="<?php echo $data['Comment'] ?>" placeholder="Enter Company" Required>
  <input type="submit" name="update" value="Update">
</form>