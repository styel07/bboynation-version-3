<?php  session_start();

include('connectsql.php');

if(isset($_POST['suggest'])){
	//POST[]
		$username = $_SESSION["user"];
		$suggestion = $_POST["suggestion"];
		$page = $_SERVER['PHP_SELF'];
	if(!isset($_SESSION["user"])){
		$username="Guest";
	}

	//INSERT Codes
	//add validation codes here

			$suggestion = mysql_real_escape_string($suggestion);

	mysql_query("INSERT INTO suggestion (username,page,suggestion) VALUES ('".$username."','".$page."','".$suggestion."')") or die(mysql_error());
			}//end of INSERT 

?>
<style type="text/css">
#suggestion-area{
	color:black;
	font-family: sans-serif;
	border: 1px solid white;
	position: fixed;
	bottom: 10px;
	right:10px;
	background-color: #ddd;
	text-align: center;
	border-radius: 15px;
}
#suggestion-area:hover{
	background-color: #ff6363;
	transition: all 0.5s ease-in;
}
#suggestion-box{
	border:none;
	padding:5px;
	width:80%;
	height:200px;
	font-family: sans-serif;
	font-size: 18px;
}
#btn-suggestion{
	border:none;
	width: 80%;
	height: 40px;
	font-size: 20px;
}
#btn-suggestion:hover{
	background-color: #333333;
	color:white;
}
</style>
</head>
<body>
	<div id="header">
		<div id="header-container">
			<div id ="logo">
				<div class="stack"><img src="pictures/logostars.png" id="logo1" ></div>
				<div class="stack"><img src="pictures/logo-bboynation.png"id="logo2"></div>
			</div>
			<div id="login-menu">
				<div id="log">	
					Welcome <?php if(isset($_SESSION['user'])){ 
						echo $_SESSION['user'];
						echo '<div>
		 						<form action="sign-up.php" method="POST">
		 						<input type="submit" name="btn-log-out" value="Log-out" style="height:20px; width:80px; background-color:#ff6363;">
								</form>
								</div>';
						}
						else{
							echo 'Guest 
						! <div id="log-in-confirmed">Please <a href="login.php" style="color:#ff6363">Log-in</a> or <a href="sign-up.php" style="color:#ff6363">Sign-up</a></div>';
						} 
						?>
				</div><!--end of log-->
				<?php
				//function selected(){
				//		if($page=){
				//		echo'class="selected"';
				//	}
			//	}
				?>
				<div class="menu">
					<ul>
						<li><a href="index.php" <?php //function selected();?> class="selected">Home</a></li>
						<li><a href="events.php">Events</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="about-us.php">About Us</a></li>
						<?php if(isset($_SESSION['user'])){ 
						echo '<li><a href="profile.php">Profile</a></li>';
						}
						?>
					</ul>
					
				</div><!--end of menu-->
			</div><!--end of login-menu-->
			<div class="clear"></div><!--clear area-->
		</div><!--end of header-container-->
	
	</div><!-- end of header-->
	
	<!-- beginning of suggestion box
	<div id="suggestion-area">
		<h1>Suggestion Box</h1>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			<textarea id="suggestion-box" name="suggestion">Enter your suggestion here...</textarea>
			<input type='submit' name='suggest' value='Submit Suggestion' id="btn-suggestion"/>
		</form>
	</div>
	end of suggestion box-->