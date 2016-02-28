<?php
/**
* Say something here, a brief summary what the function does.
*
* @param $number1 what is number1 for?
* @param $number2 what is number2 for? or what is it?
* @return what does this function return?
*/
function addNumbers($number1, $number2) 
{
	// Implementation
	$sum = $number1 + $number2;
	
	return $sum;
}

/**
* Validates the entered username and password. This will also set the session if
* the account is valid.
*
* @param enteredUsername Posted username from UI 
* @param enteredPassword Posted password from UI
* @return true if the account is valid, otherwise returns false
*/
function authenticate($enteredUsername, $enteredPassword)
{
	connectDB();

	$enteredUsername = mysql_real_escape_string($enteredUsername);
	$enteredPassword = mysql_real_escape_string($enteredPassword);

	$sql = "SELECT username, password 
	        FROM account 
	        WHERE username = '$enteredUsername' AND 
	              password = '$enteredPassword'";

	$query = mysql_query($sql) or die(mysql_error());
	$loginResult = false;

	if(mysql_num_rows($query) > 0) 
	{
		$user = mysql_result($query, 0, "username");
		$_SESSION['user'] = $user;

		$loginResult = true;
	} 
	else 
	{
		$loginResult = false;
	}

	return $loginResult;
}

function validateEmail($enteredEmail) 
{
	connectDB();
	$sql = "SELECT username
	        FROM account 
	        WHERE username = '$enteredEmail'";

	$query = mysql_query($sql) or die(mysql_error());

	if(mysql_num_rows($query) > 0)
	{
		return false;
	}

	return true;
}

function connectDB() 
{
	mysql_connect("localhost", "root", "") or die("myfunctions.php Line 62: ".mysql_error());
	mysql_select_db("db_bboynation") or die();

	date_default_timezone_set('UTC');
}
?>