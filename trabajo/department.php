<!DOCTYPE html>

<html>

<?php
include('header.php');
include('dbConn.php');
?>

<body>



<?php
echo  nl2br ("Department table \n");

?>

Company:  
<select>  
  <option value="Select">Select</option>  
  <option value="Aug2021">Google</option>  
  <option value="Jan2021">Amazon</option>  
</select> 

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
    <th class="tg-ryol">Department Name</th>
	<th class="tg-ryol">Department head</th>
    <th class="tg-ryol">Phone number</th>
	  <th class="tg-ryol">Company</th>
    <th class="tg-ryol">Comment</th>
	<th class="tg-ryol">Edit</th>
	<th class="tg-ryol">Remove</th>
	
  </tr>
</thead>
<tbody>
   <?php


$records = mysqli_query($db,"select * from `department`");

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['D_Name']; ?></td>
    <td><?php echo $data['D_head']; ?></td>
	<td><?php echo $data['P_number']; ?></td>
    <td><?php echo $data['Company']; ?></td> 
	<td><?php echo $data['Comment']; ?></td>	
    <td><a href="Edit-de.php?id=<?php echo $data['ID']; ?>">Edit</a></td>
    <td><a href="delete-d.php?id=<?php echo $data['ID']; ?>" onclick="if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Delete</a></td>
  </tr>	
<?php
}
?>
  
</tbody>
</table>
<button class="button" onclick="location.href='Add-de.php'";>
     <span class="icon">Add Deparment</span>
</button>
</body>
</html>