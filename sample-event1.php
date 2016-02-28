<?php session_start();
include 'connectsql.php';
$user=$_SESSION['user'];
if(isset($_POST['post-comment'])){
	if(!isset($_SESSION["user"])){
		$user="Guest";
	}
	$comment=$_POST['comment'];
	$date=date('d-m-Y');
	$time=date('H:i:s');
	mysql_query("INSERT INTO comment(comment,username,date,time) VALUES ('".$comment."','".$user."','".$date."','".$time."')") or die(mysql_error());
}

include 'title.php';?>
<style type="text/css">
#main-content-area h1{
	font-size:50px;
	color:white;
}
h2{
	font-size:30px;
	color:white;
}
#main-content-area{
	margin-top: 175px;
	margin-right: auto;
	margin-left: auto;
	width:1000px;
	border: 2px solid white;
}
.event-info{
	float: right;
	margin:10px;
	height:300px;
	width:600px;
	background-color: white;
	border: 2px solid black;
    /*border-radius: 15px;*/
	box-shadow: 10px 10px 20px black;
}
.event-poster-display{
	float: left;
	margin:10px;
	height:300px;
	width:300px;
	background-color: white;
	border: 2px solid white;
    /*border-radius: 15px;*/
	box-shadow: 10px 10px 20px black;
}
#registration-info{
	margin-top:20px;
	border: 2px solid white;

}
#registration-fee{
	width:330px;
}
#type-battle{
	width:500px;
}
#location-information{
	margin-top:20px;
	border: 2px solid white;
}
#event-r-16{
	height:300px;
	width:300px;
}
.comment{
	text-align: center;
	margin-right: auto;
	margin-left: auto;
	border: 2px solid #333333;
	background-color: #D6D6D6;
}
#profile-pic{
	float: left;
	display: inline;
	height:150px;
	width:150px;
	background-color: white;
	border: 2px solid black;
}
#response{
	float: left;
	text-align: center;
	vertical-align: middle;
	display: inline;
	padding: .3em;
	background-color: white;
	border: 2px solid black;
}
#textarea{
	width:600px;
	height:150px;
}
#btnpost-comment{
	height:30px;
	width: 80%px;
}

</style>
<?php include 'header.php';?>
	<div id="main-content-area">
		<H1>R-16</H1>
		<div class="event-info">
		</div><!--end of event info-->
		<div class="event-poster-display">
			<img src="pictures/events/R-16/poster-main.jpg" id="event-r-16">
		</div><!--end of event poster display-->
		<div class="clear"></div><!--clear area-->
		<div id="registration-info">
			<h2>Registration Information</h2>
			<center><table border='1' style="color:white;" >
							<tbody id="table1">
							<tr>
								<td><div id="registration-fee">
										<h3>Registration Fee</h3><br>
										150 per bboy<br>
										350 per crew
									</div>
								</td>
								<td><div id="type-battle" >
										<h3>Divisions</h3><br>
										1 vs 1<br>
										2 vs 2<br>
										crew vs crew
									</div>
								</td>
							</tr>
						</table></center>
		</div><!--end of registration info-->
		<div id="location-information">
			<h2>Location Information</h2>
			<center><table border='1' style="color:white;" >
							<tbody id="table1">
							<tr>
								<td><div id="registration-fee">
										<h3>Registration Fee</h3><br>
										150 per bboy<br>
										350 per crew
									</div>
								</td>
								<td><div id="type-battle" >
										<h3>Divisions</h3><br>
										1 vs 1<br>
										2 vs 2<br>
										crew vs crew
									</div>
								</td>
							</tr>
						</table></center>
		</div><!--end of location information-->
		<div id="venue-information">
			<h2>Venue Information</h2>
			<center><table border='1' style="color:white;" >
							<tbody id="table1">
							<tr>
								<td><div id="registration-fee">
										<h3>Registration Fee</h3><br>
										150 per bboy<br>
										350 per crew
									</div>
								</td>
								<td><div id="type-battle" >
										<h3>Divisions</h3><br>
										1 vs 1<br>
										2 vs 2<br>
										crew vs crew
									</div>
								</td>
							</tr>
						</table></center>
		</div><!--end of location information-->
		<div id="comment-box">
			<h2>COMMENT BOX</h2>
			<div class="comment-area">
				<div id="profile-pic">
					<label><?php echo $user; ?></label>
				</div><!--end profile pic-->
				<div id="response">
					<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
							
							<textarea id="textarea" name="comment">Enter your comment here...</textarea>
					
					<input type="submit" id="btnpost-comment" name="post-comment" value="Comment">
					</form>
				</div><!--end response-->
			</div>
			<div class="clear"></div><!--clear area-->
			<div class="comment">
				&ldquo;
					Lets join the event bros!!!
				&rdquo; <br><?php echo date('d-m-Y H:i:s'); ?>
			</div>
			<div class="comment">
			<?php
			$result = mysql_query("SELECT * FROM comment ORDER BY date AND time DESC");
				while($row = mysql_fetch_array($result)) {
					   echo '<div class="comment"><b>'.$row['username']."</b><br>".$row['comment']."<br><div id='date'>".$row['date']."<br>".$row['time'].'</div></div>';
					  // Delete comment 
					  // if($user == $row['username']){
					  // 	echo '<a href="#">Delete comment</a></div>';
					  // }









					   
					  // else{
					  // '</div>';
					  //}
					}
			?>

			</div>
		</div><!--end comment box-->
<?php include 'footer.php';?>
</div>