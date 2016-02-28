<?php
include ('myfunctions.php');
connectDB();
session_start();

if(isset($_POST['login']))
{	
	$user = $_POST['username'];
	$pass = $_POST['password'];		
	
	$loginResult = authenticate($user, $pass);
	
	if($loginResult == true) 
	{
		header('location: index.php');
	}
	else
	{
		die("error ");
	}
}//end isset($_POST['login'])

	include 'title.php';
?>
<style type="text/css">
#login-form{
	margin-top: 175px;
}
#lbl-email,#lbl-pass{
	font-size: 30px;
	color:white;
	float: right;
	padding-right: 10px;
}
.textbox,#button{
	height: 30px;
	width: 100%;
}
#button:hover{
	background-color: #FF6666;
}
#error{
	visibility:hidden; 
}
</style>
<?php include 'header.php';?>
<div id="main-content-area">		
	<div id="login-form">
		<form id='login-form' action='<?php $_SERVER['PHP_SELF']; ?>' method='post' >
			<center>
				<table border = "0" style="padding:10px;">
					<tbody>
						<tr>
							<td><label id='lbl-email'>Email Adress:</label></td>
							<td><input type='text' name='username' class='textbox' maxlength='50'></td>
							<td><span id='error'>*</span></td>
						</tr>
						<tr>
							<td><label id='lbl-pass'>Password:</label></td>
							<td><input type='password' name='password' class='textbox' maxlength='12'></td>
							<td><span id='error'>*</span></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='submit' name='login' value='Log-in' id='button' /></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</center>		
		</form>
	</div><!--end of login-form-->
	<?php include 'footer.php';?>
</div><!--end of maincontainer-->

