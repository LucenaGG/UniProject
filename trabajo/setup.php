<!DOCTYPE html>

<html>

<?php
include('header.php');
?>

<body>



<?php
echo  nl2br ("Set up\n");

?>

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-ryol{font-size:14px;font-style:italic;font-weight:bold;text-align:center;vertical-align:top}
.tg .tg-5frq{font-style:italic;text-align:center;vertical-align:top}
</style>
<?php

include "dbConn.php"; // Using database connection file here



$qry = mysqli_query($db,"select * from `set_up` where `set_up` . `ID` ='1'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) 
{
    $a = $_POST['a'];
    $b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$e = $_POST['e'];
	$f = $_POST['f'];
	
    $edit = mysqli_query($db,"update `set_up` set `U_Name`='$a', `U_Dep`='$b', `U_Add`='$c',`U_Num`='$d',`Prof_Name`='$e',`Prof_Title`='$f' where `set_up` . `ID`='1'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:setup.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<form method="POST">
<table class="tg">
<thead>
  <tr>
    <th class="tg-ryol">University Name</th>
    <th class="tg-ryol">University Department</th>
	<th class="tg-ryol">University Address</th>
    <th class="tg-ryol">University Phone number</th>
    <th class="tg-ryol">Professor name</th>
	<th class="tg-ryol">Professor tittle</th>
	<th class="tg-ryol">Edit</th>
	
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-5frq"><input type="text" name="a" value="<?php echo $data['U_Name'] ?>"  Required></td>
    <td class="tg-5frq"><input type="text" name="b" value="<?php echo $data['U_Dep'] ?>"  Required></td>
	<td class="tg-5frq"><input type="text" name="c" value="<?php echo $data['U_Add'] ?>"  Required></td>
    <td class="tg-5frq"><input type="text" name="d" value="<?php echo $data['U_Num'] ?>"  Required></td>
    <td class="tg-5frq"><input type="text" name="e" value="<?php echo $data['Prof_Name'] ?>" Required></td>
	<td class="tg-5frq"><input type="text" name="f" value="<?php echo $data['Prof_Title'] ?>" Required></td>
	<td class="tg-5frq"><input type="submit" name="update" value="update"></td>
 
  </tr>
  </form>
</tbody>
</table>
</body>
</html>