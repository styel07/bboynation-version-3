<?php
	session_start();
	include('connectsql.php');
	if(isset($_POST['login'])){
		
		$user = $_POST['username'];
		$pass = $_POST['password'];		

		$sql = "SELECT * FROM account WHERE username = '$user' and password = '$pass'";
		$result = mysql_query ($sql) or die(mysql_error());

		//if successful saves username and age in SESSION[];
		//$sql = "SELECT age FROM account WHERE username = '$user'";
		//$result = mysql_query ($sql) or die(mysql_error());
		//$_SESSION['user'] = $user;
		//$_SESSION['age'] = $age;

		if(mysql_num_rows($result)>0){

		//if successful redirect to index page
			header('Location:index.php');
		}// end mysql_num_rows
		else{
			echo '<span id="error">ERROR!</span>';
		}
	}//end isset($_POST['login'])
?>

<?php include 'title.php';?>
<style type="text/css">
.label{
	font-size: 100px;
	font-family: fantasy;
}
#label1{
	color: #6699FF;
}
#label2{
	color: white;
}
#label3{
	color: #FFFF66;
}
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
</style>
<?php include 'header.php';?>
	<div id="maincontainer">		
		<div id="login-form">
			<form id='login-form' action='login.php' method='post' >
				<center><table border = "0" style="padding:10px;">
				<tbody>
					<tr>
						<td><label id='lbl-email'>Email Adress:</label></td>
						<td><input type='text' name='username' class='textbox' maxlength='50'></td>
					</tr>
					<tr>
						<td><label id='lbl-pass'>Password:</label></td>
						<td><input type='password' name='password' class='textbox' maxlength='50'></td>
					</tr>
					<tr>
						<td><span id="error" style="color:red;"></span></td>
						<td><input type='submit' name='login' value='Log-in' id='button' /></td>
					</tr>
				</tbody>
				</table>
				</center>		
			</form>
		</div><!--end of login-form-->
	</div><!--end of maincontainer-->
<?php include 'footer.php';?>
