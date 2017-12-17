<html>

<title>
Virtual ClassRoom
</title>
<script src="script.js"></script>
<form >
<body>
<center>
<img align="middle" src="banner.png" /></br>
<!--<input   type='button' value='Login'>
<input   type='button' value='Register'> -->

<div id="mainform">
<div class="innerdiv">

<h2>Virtual ClassRoom- User Registration</h2>
<form action='#' id="myForm" method='post' name="myForm">
<h3>Fill Your Information!</h3>
<table >
<tr>
<td>Username</td>
<td><input id='username1' name='username' onblur="validate('username', this.value)" type='text'></td>
<td>
<div id='username'></div>
</td>
</tr>
<tr>
<td>Password</td>
<td><input id='password1' name='password' onblur="validate('password', this.value)" type='password'></td>
<td>
<div id='password'></div>
</td>
</tr>
<tr>
<td>Email</td>
<td><input id='email1' name='email' onblur="validate('email', this.value)" type='text'></td>
<td>
<div id='email'></div>
</td>
</tr>
<tr>
<td>website</td>
<td><input id='website1' name='website' onblur="validate('website', this.value)" type='text'></td>
<td>
<div id='website'></div>
</td>
</table>
</tr>
<form>
<td>
<input  onclick="checkForm()" type='button' value='Submit'>
</td></form></br></br>
Already Registered ?<a href="login.php"><u>Login</u></a> here
</center>
</form>
</div>
</body>
</html>

