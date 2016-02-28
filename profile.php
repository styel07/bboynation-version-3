<?php 
session_start();
$user = $_SESSION['user'];
include 'title.php'; 
include 'myfunctions.php';
?>
<style type="text/css">
.control-button{
	width:100px;
	height:100px;
	border:1px solid black;
	float: left;
	margin:10px;
}
a div.control-button:hover{
	box-shadow: 0px 0px 10px black; 
}
</style>
<?php include 'header.php'; ?>
	<div id="main-content-area">
		<div id="cpanel-area">
			<h2>Welcome <?php echo $user; ?></h2>
<?php
$result = mysql_query("SELECT account_type FROM account WHERE username='$user'");
while($row = mysql_fetch_array($result)) 
{
  	if($row['account_type'] == 'A')
  	{
		echo "Please select an option";
		echo '<br />
		<a href="profiles/manage-users.php"><div id="control1" class="control-button">Manage Users</div></a>
		<a href="create_event.php"><div id="control2" class="control-button">Create Events</div></a>
		<a href="view_events.php"><div id="control2" class="control-button">View All Events</div></a>
		<a href="#"><div id="control3" class="control-button">Manage Banner</div></a>
		<a href="#"><div id="control3" class="control-button">Upload Media</div></a>
		<a href="#"><div id="control4" class="control-button">Read Suggestions</div></a>';
	}
	elseif($row['account_type'] == 'M')
	{
		echo "Please select an option";
		echo '<br />
		<a href="#"><div id="control3" class="control-button">Upload Media</div></a>';
	}
	elseif($row['account_type'] == 'T')
	{
		echo "Please select an option";
		echo '<br />
		<a href="#"><div id="control3" class="control-button">Upload Media</div></a>';
	}
	else
	{
	
	}
}
?>
			</div>
		
		<div id="profile-area">
			<h2><?php echo $user; ?></h2>
		</div>

		<div id="social-media-area">
			<h2>Connect with Us</h2>
		</div>
	<?php include 'footer.php'; ?>
</div>
