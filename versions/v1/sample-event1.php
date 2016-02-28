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
h1{
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
	margin:5px;
	height:300px;
	width:600px;
	background-color: white;
	border: 2px solid black;
    /*border-radius: 15px;*/
	box-shadow: 10px 10px 20px black;
}
.event-poster-display{
	float: left;
	margin:5px;
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
#comment-box{
	border: 2px solid white;
}
.comment{
	margin-top: 10px;
	margin-right: auto;
	margin-left: auto;
	border: 2px solid white;
	background-color: #D6D6D6;
	height: 200px;
	width: 700px;
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
	height:150px;
	width:500px;
	background-color: white;
	border: 2px solid black;
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
			<h2>REGISTRATION INFORMATION</h2>
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
			<h2>LOCATION INFORMATION</h2>
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
			<div class="comment">
				<div id="profile-pic">
					
				</div><!--end profile pic-->
				<div id="response">
						&ldquo;
							Lets join the event bros!!!
						&rdquo; <br><?php echo date('Y-m-d H:i:s'); ?>
				</div><!--end response-->
			</div>
			<div class="comment">

			</div>
			<div class="comment">

			</div>
		</div>
	</div>
<?php include 'footer.php';?>
