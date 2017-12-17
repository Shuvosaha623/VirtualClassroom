<html>
<title>
Admin Dashboad
</title>
<body>
<table align="center" width="50%" >
<tr>
<td  align="right">
<img src="adminbanner.png" />
Welcome <a width="20%" href="admindashboard.php"><u>Admin</u></a> | 
<a  href="login.php"><u>Logout</u></a> 
</td>
</tr>

<tr>
<td align="left">
<!--<a  href="login.html">-->
<a  href="admindashboard.php"><input   type='submit' value='Home'>
<a  href="muser.php"><input   type='submit' value='Manage user'>
<a  href="addques.php"><input   type='submit' value='Add Ques'>
<a  href="ql.php"><input   type='submit' value='Ques List'>
<a  href="discussion.php"><input   type='submit' value='Discussion'>
<a  href="assginment.php"><input   type='submit' value='Assginment'>
</td>
</tr>

<tr>
<td align="center"></br></br>

<h2>Admin Pannel-Manage User </h2>

</td>
</tr>

<table border="1" align="center" width="50%"  >
<tr>
            <th>User ID</th>
            <th>Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Action</th>
			
			
</tr>

<tr>
<td>1</td>
<td>Suvo</td>
<td>Suvo Saha</td>
<td>suvosaha58@gmail.com</td>
<td>
<a onclick="return confirm('Are you sure to Disable')" href=" ?dis= 1">Disable</a>
								 |
<a onclick="return confirm('Are you sure to Remove')" href=" ?del= 1">Remove</a> 
</td>
</tr>

<tr>
<td>2</td>
<td>Shovon</td>
<td>Ishtiaque Shams</td>
<td>ishti.shams@gmail.com</td>
<td>
<a onclick="return confirm('Are you sure to Disable')" href=" ?dis= 1">Disable</a>
								 |
<a onclick="return confirm('Are you sure to Remove')" href=" ?del= 1">Remove</a> 
</td>
</tr>

<tr>
<td>3</td>
<td>Sakib</td>
<td>Nazmus Sakib</td>
<td>sakib@gmail.com</td>
<td>
<a onclick="return confirm('Are you sure to Disable')" href=" ?dis= 1">Disable</a>
								 |
<a onclick="return confirm('Are you sure to Remove')" href=" ?del= 1">Remove</a> 
</td>
</tr>




</table>












</table>
</body>
</html>