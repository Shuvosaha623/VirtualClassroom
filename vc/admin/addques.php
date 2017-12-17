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

<h2>Admin Panel - Add Question </h2>

</td>
</tr>
<form action="" method="post">
<table align="center" border="1"  width="50%" >
<tr>
					<td>Question No:</td>
					
					<td><input type="number" value="6" name="q_no"></td>
				</tr>
				<tr>
					<td>Question: </td>
					
					<td><input type="text" name="question" placeholder="Enter question..." required></td>
				</tr>
				<tr>
					<td>Option one:</td>
					
					<td><input type="text" name="ans1" placeholder="Enter Option one" required></td>
				</tr>
				<tr>
					<td>Option two:</td>
					
					<td><input type="text" name="ans2" placeholder="Enter Option two" required></td>
				</tr>
				<tr>
					<td>Option three:</td>
					
					<td><input type="text" name="ans3" placeholder="Enter Option three" required></td>
				</tr>
				<tr>
					<td>Option four:</td>
					
					<td><input type="text" name="ans4" placeholder="Enter Option four" required></td>
				</tr>
				<tr>
					<td>Correct No.</td>
					
					<td><input type="number" name="rightAns" required></td>
				</tr>
				<tr>
					<td colspan="3"><input type="submit" value="Add a Question"></td>
				</tr>







</table>
</form>











</table>
</body>
</html>