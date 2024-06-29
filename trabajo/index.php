<!DOCTYPE html>

<html>

<?php
include('header.php');
include('dbConn.php');


?>

<body>



<?php
echo  nl2br ("Student table \n");

?>
<form method="POST">
Semester :  
<select>  
  <option value="Select">Select</option>}  
  <option value="Aug2021">Aug-Dec 2021</option>  
  <option value="Jan2021">Jan-May2021</option>  
</select> 
<input type="submit" name="Submit" value="Select" /><input type="submit" name="Add" value="Select" /> <input type="submit" name="Remove" value="Select" /> 


 </form>
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
    <th class="tg-ryol">Student ID</th>
    <th class="tg-ryol">Student Name</th>
	<th class="tg-ryol">Gender</th>
    <th class="tg-ryol">Address</th>
    <th class="tg-ryol">Telephone</th>
    <th class="tg-ryol">Semester</th>
    <th class="tg-ryol">Company</th>
    <th class="tg-ryol">Department</th>
    <th class="tg-ryol">Comment</th>
	<th class="tg-ryol">Edit</th>
	<th class="tg-ryol">Remove</th>
  </tr>
  <?php


$records = mysqli_query($db,"select * from `student`");

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Student_ID']; ?></td>
    <td><?php echo $data['Student_Name']; ?></td>
	<td><?php echo $data['Gender']; ?></td>
	<td><?php echo $data['Address']; ?></td>
	<td><?php echo $data['Telephone']; ?></td>
	<td><?php echo $data['Semester']; ?></td>
    <td><?php echo $data['Company']; ?></td> 
	<td><?php echo $data['Department']; ?></td>
	<td><?php echo $data['Comment']; ?></td>	
    <td><a href="edit.php?id=<?php echo $data['stu_id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['stu_id']; ?>" onclick="if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Delete</a></td>
  </tr>	
<?php
}
?>
</thead>
<tbody>

</tbody>
</table>
<button class="button" onclick="location.href='Add-st.php'";>
     <span class="icon">Add Student</span>
</button>

</body>
</html>