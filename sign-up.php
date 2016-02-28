<?php 
include ('myfunctions.php');

session_start();	

if(isset($_POST['btn-log-out']))
{
	session_destroy();
}
$errors = array();
//if register form had been submitted
if(isset($_POST['signup']))
{
	//POST[]	&&	//Prevention of SQL injection Codes	
	$username = mysql_real_escape_string($_POST["username"]);
	$password = mysql_real_escape_string($_POST["password"]);
	$cpassword = mysql_real_escape_string($_POST["cpassword"]);
	$province = mysql_real_escape_string($_POST["province_name"]);
	$gender = $_POST["gender"];
	
	// Null Value checking

	if(empty($checkUser)) 
	{
		$errors["username"] = "Please enter a username.";
	}

	if(empty($password)) 
	{
		$errors["password"] = "Please enter a password.";
 	}

	if(empty($cpassword)) 
	{
		$errors["cpassword"] = "Please re-enter your password.";
 	}

 	if(!empty($checkPassword) && !empty($checkRepassword) && $check != $cpassword)
	{
		$errors["password"] = "The password does not match!";
	}

	if(!filter_var($enteredEmail, FILTER_VALIDATE_EMAIL)) 
	{
		$errors["email"] = "This is not a valid e-mail!";
	}

	if(!validateEmail($username))
	{
		$errors["emailDuplicate"] = "This email is already taken";
	}

	if(count($errors) == 0) 
	{
		if(isset($_POST['agree']))
		{
		//no errors in $errors array, INSERT
		mysql_query("INSERT INTO account (username,password,province,gender) 
					VALUES ('".$username."','".$password."','".$province."','".$gender."')") 
					or die(mysql_error());
		}
		else
		{
			die("you must accept the terms and agreement of bboynation");
		}
	}
}//end of isset

include 'title.php'; 
?>
<style type="text/css">
#signup-form{
	margin-top: 150px;
}
#lbl{
	font-size: 30px;
	color:white;
	padding-right: 10px;
}
.textbox,#button{
	height: 30px;
	width: 300px;
}
#button:hover{
	background-color: #FF6666;
}
#rlbl{
	color:white;
}
#validation-confirmation{
	border: 1px solid red;
	width: 100%;
	color: red;
}
.select_input{
	height: 30px;
	width:150px;
}
</style>
<?php include 'header.php'; ?>
<div id="main-content-area">		
	<div id="signup-form">
		<div id="display_errors">
			<?php
				foreach($errors as $error)
				{
					echo $error."<br />";
				}
			?>
		</div>
		<form id='signup-form' action='<?php $_SERVER['PHP_SELF']; ?>' method='POST' >
			<center>
				<table border = "0" style="padding:10px;">
				<h2>Sign-up Form</h2>
				<tbody>
					<tr>
						<td><label id='lbl'>Email Adress:</label></td>
						<td><input type='text' name='username' class='textbox' maxlength='50'></td>
					</tr>
					<tr>
						<td><label id='lbl'>Password:</label></td>
						<td><input type='password' name='password' class='textbox' maxlength='50'></td>
					</tr>
					<tr>
						<td><label id='lbl'>Confirm Password:</label></td>
						<td><input type='password' name='cpassword' class='textbox' maxlength='50'></td>
					</tr>
					<tr>
						<td><label id='lbl'>First Name:</label></td>
						<td><input type='text' name='first_name' class='textbox' maxlength='50'></td>
					</tr>
					<tr>
						<td><label id='lbl'>Last Name:</label></td>
						<td><input type='text' name='last_name' class='textbox' maxlength='50'></td>
					</tr>
					<tr>
						<td><label id='lbl'>Province:</label></td>
						<td>
						<?php
							$sql = "SELECT province_name FROM provinces";
							$result = mysql_query($sql);

							echo "<select class='select_input' name='province_name'>";
							while ($row = mysql_fetch_array($result)) 
							{
							    echo "<option value='" . $row['province_name'] . "'>" . $row['province_name'] . "</option>";
							}
							echo "</select>";
						?>
						</td>
					</tr>
					<tr>
						<td><label id='lbl'>Birthday:</label></td>
						<td><label id='lbl'>Month:</label>
						<?php
							$months = array("Jan", "Feb");
							$result = mysql_query($sql);

							echo "<select class='select_prov' name='month'>";
							while ($row = mysql_fetch_array($result)) {
							    echo "<option value='" . $row['month'] . "'>" . $row['month'] . "</option>";
							}
							echo "</select>";
						?>
						<label id='lbl'>Day:</label>
						<?php
							$sql = "SELECT day FROM dob";
							$result = mysql_query($sql);

							echo "<select class='select_prov' name='day'>";
							while ($row = mysql_fetch_array($result)) {
							    echo "<option value='" . $row['day'] . "'>" . $row['day'] . "</option>";
							}
							echo "</select>";
						?>
						<label id='lbl'>Year:</label>
						<?php
							$sql = "SELECT year FROM dob";
							$result = mysql_query($sql);

							echo "<select class='select_prov' name='year'>";
							while ($row = mysql_fetch_array($result)) {
							    echo "<option value='" . $row['year'] . "'>" . $row['year'] . "</option>";
							}
							echo "</select>";
						?>
						</td>
					</tr>
					<tr>
						<td><label id='lbl'>Gender:</label></td>
						<td id="rlbl">
							<input type="radio" value="M" name="gender" checked="yes" /> Male
							<input type="radio" value="F" name="gender" /> Female
						</td>
					</tr>
					<!--<tr>
						<td><label id='lbl'>Account Type:</label></td>
						<td id="rlbl">
						<input type="radio" value="Member" name="account_type" checked="yes"/> Member
						<input type="radio" value="Teacher" name="account_type" /> Guru
						<input type="radio" value="Sponsor" name="account_type" /> Sponsor
						<input type="radio" value="Event" name="account_type" /> Event Manager
						</td>
					</tr> -->
					<tr>
						<td>
							<input type="checkbox" name="agree" value="0" style="float:right">
						</td>
						<td>
							<label>By Signing up we assume you have read and accept the rules and regulations of <a href="#">Bboynation.ph</a></label>
						</td>
					</tr>
					<tr>
						<td><span id="error" style="color:red;"></span></td>
						<td><input type='submit' name='signup' value='Sign-up' /></td>
					</tr>
				</tbody>
				</table>
			</center>		
		</form>
	</div><!--end of sign-form-->
	<?php include 'footer.php'; ?>
</div><!--end of main content area-->

