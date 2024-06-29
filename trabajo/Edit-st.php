<html>



<body>



<?php
echo  ("Page will edit selected student in the student table, it will be it's own window and filled with the student info");

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
    <th class="tg-ryol">Student ID</th>
    <th class="tg-ryol">Student Name</th>
	<th class="tg-ryol">Gender</th>
    <th class="tg-ryol">Address</th>
    <th class="tg-ryol">Telephone</th>
    <th class="tg-ryol">Semester</th>
    <th class="tg-ryol">Company</th>
    <th class="tg-ryol">Department</th>
    <th class="tg-ryol">Comment</th>
	
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-5frq"><input type="text" id="username" name="username"></td>
    <td class="tg-5frq"><input type="text" id="username" name="username"></td>
	<td class="tg-5frq"><select>  
  <option value="Select">Select</option>}  
  <option value="Aug2021">M</option>  
  <option value="Jan2021">F</option>  
  <option value="Jan2021">Other</option>  
</select> </td>
    <td class="tg-5frq"><input type="text" id="username" name="username"></td>
    <td class="tg-5frq"><input type="text" id="username" name="username"></td>
   
    <td class="tg-5frq"><select>  
  <option value="Select">Select</option>}  
  <option value="Aug2021">Aug-Dec 2021</option>  
  <option value="Jan2021">Jan-May2021</option>  
</select> </td>
    <td class="tg-5frq"><select>  
  <option value="Select">Select</option>}  
  <option value="Aug2021">Google</option>  
  <option value="Jan2021">Amazon</option>  
</select></td>
    <td class="tg-5frq"><select>  
  <option value="Select">Select</option>}  
  <option value="Aug2021">Systems Engineering</option>  
  <option value="Jan2021">Operations</option>  
</select></td> 
<td class="tg-5frq"><input type="text" id="username" name="username"></td>
	
  
</tbody>
</table>
<button class="button" onClick="window.close('trabajo/Add-st.php');">
     <span class="icon">Enter</span>
</button>
<button class="button" onClick="window.close('trabajo/Add-st.php');">
     <span class="icon">Exit</span>
</button>
</body>
</html>