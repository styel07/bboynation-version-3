<?php
echo ''; 

//checks if the form has been submitted
		if(isset($_POST["Register"])){ 
			//variable names
			$gfname = 'Eleazar';
			$glname = 'Corpuz';
			$gfname2 = 'eleazar';
			$glname2 = 'corpuz';
			$agree = $selected_radio='';
			//POST[]
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$email = $_POST["email"];
			$address = $_POST["address"];
			$gender = $_POST["gender"];
			$age = $_POST["age"];	
			$pass = $_POST["password"];
			$rpass = $_POST["rpass"];
			$selected_radio = $_POST["membertype"];
			$agree = $_POST["agree"];
			//first & last name validation
			if($firstname == $gfname || $firstname == $gfname2){
				if($lastname == $glname || $lastname == $glname2){
					echo 'Thank you for registering '.$firstname.' '.$lastname.'<br/>'.$email;
				}
			}	
			else{
			echo 'you have entered a wrong First Name or Last Name <br/>';
				}
			//checks pass if greater than 5
			if(strlen($pass)<= 5){
				echo '<div id="maincontainer">Your password is too short<br/></div>';
			}
			else{
				echo "good pass<br/>";
			}
			//checks if there is a ' @ ' character in input
			if(strpos($email,'@')== true){
				echo 'good email!<br/>';
			}
			else{
				echo 'not a valid email<br/>';
			}
			//checks the type of user
			if($selected_radio == 'Writer'){
				echo 'welcome new Artist!<br/>';
			}
			else if($selected_radio == 'Member'){
				echo 'welcome new Member!<br/>';
			}
			//checks if i accept checkbox is checked
			if($agree=='iaccept'){
				echo 'Thank you for agreeing to the terms and agreements';
			}
			else if($agree=='unchecked'){
				echo 'you must agree to the terms and agreements of this site';
			}

			$firstname = mysql_real_escape_string($firstname);
			$lastname = mysql_real_escape_string($lastname);
			$email = mysql_real_escape_string($email);
			$gender = mysql_real_escape_string($gender);
			$address = mysql_real_escape_string($address);
			$age = mysql_real_escape_string($age);
			$pass = mysql_real_escape_string($pass);
			$selected_radio = mysql_real_escape_string($selected_radio);
			$agree = mysql_real_escape_string($agree);

     		$fields="artist(firstname,lastname,email,gender,address,age,password,membertype,agree)";
	mysql_query("INSERT INTO '$fields' VALUES ('".$firstname."','".$lastname."','".$email."','".$gender."','".$address."','".$age."','".$pass."','".$selected_radio."','".$agree."')") or die(mysql_error());
			echo '<br/> REGISTRATION SUCCESSFUL!!!! Please <a href="signup.php">Log-in</a> to Continue.';
			}//end of isset
?>