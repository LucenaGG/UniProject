<!DOCTYPE html>

<html>

<?php
include('header.php');
include('dbConn.php');
?>

<body>



<?php
echo  nl2br ("Company table \n");

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
<table class="tg">
<thead>
  <tr>
    <th class="tg-ryol">Company Name</th>
    <th class="tg-ryol">Address</th>
	<th class="tg-ryol">Phone Number</th>
    <th class="tg-ryol">Email</th>
    <th class="tg-ryol">Company Owner</th>
    <th class="tg-ryol">Comment</th>
	<th class="tg-ryol">Edit</th>
	<th class="tg-ryol">Active</th>
	<th class="tg-ryol">Remove</th>
	
  </tr>
</thead>
<tbody>
<?php


$records = mysqli_query($db,"select * from `company`");

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['C_Name']; ?></td>
    <td><?php echo $data['Address']; ?></td>
	<td><?php echo $data['P_Num']; ?></td>
	<td><?php echo $data['Email']; ?></td>
	<td><?php echo $data['Owner']; ?></td>
    <td><?php echo $data['Comment']; ?></td> 	
    <td><a href="Edit-co.php?id=<?php echo $data['ID']; ?>">Edit</a></td>
	<td><?php echo $data['Active']; ?></td>
    <td><a href="delete-c.php?id=<?php echo $data['ID']; ?>" onclick="if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Delete</a></td>
  </tr>	
<?php
}
?>
</tbody>
</table>
<button class="button" onClick="location.href='Add-co.php'";>
     <span class="icon">Add Company</span>
</button>
</body>
</html>