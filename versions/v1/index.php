<?php 
session_start();
include 'title.php'; ?>
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
</style>
<?php include 'header.php'; ?>
		<div id="main-content-area">
			<div id="banner">
				<img src="pictures/banners/final-design.jpg" style="width:100%; height: 100%;">
			</div>
			<div id="event-area">
				<h2><a href="events.php">EVENTS</a></h2>
				<div id="event-poster">
					<center><table border='0'>
					<tbody id="table1">
					<tr>
						<td><div class="event-poster" onclick ="location.href='sample-event1.php'" style:"cursor:pointer;"><img src="pictures/events/R-16/poster-main.jpg" id="event-r-16"></div></td>
						<td><div class="event-poster">2</div></td>
						<td><div class="event-poster">3</div></td>
					</tr>
					<tr>
						<td><div class="event-poster">4</div></td>
						<td><div class="event-poster">5</div></td>
						<td><div class="event-poster">6</div></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><a href="events.php" style="font-size:25px; text-decoration:none; color:white;"><h3>See more Events</h3></a></td>
					</tr>
					</tbody>
					</table></center>	
					<div class="clear"></div><!--clear area-->
				</div><!-- end of events poster-->
			</div><!-- end of event area-->
			<div class="clear"></div><!--clear area-->
			<div id="tutorials">
			<h2><a href="tutorials.php">TUTORIALS</a></h2>
				<center><table border='0' >
					<tbody id="table1">
					<tr>
						<td><div id="" class="tutorial-banner">Top Rock</div></td>
						<td><div id="" class="tutorial-banner">Footwork</div></td>
						<td><div id="" class="tutorial-banner">Power</div></td>
						<td><div id="" class="tutorial-banner">Freeze</div></td>
					</tr>
					</tbody>
				</table></center>	
			</div>
			<div id="gallery-findme">
				<div id="find-me-area">
					<h2><a href="tutorials.php">FIND ME</a></h2>
				<img src="pictures/find-me.gif">
				</div><!--end of fine-me-area-->
				<div id="gallery-area">
					<h2><a href="tutorials.php">GALLERY</a></h2>
						<center><table border='0' >
						<tbody id="table1">
						<tr>
							<td><div id="" class="gallery-prev"></div></td>
							<td><div id="" class="gallery-prev"></div></td>
							<td><div id="" class="gallery-prev"></div></td>
							<td><div id="" class="gallery-prev"></div></td>
						</tr>
						<tr>
							<td><div id="" class="gallery-prev"></div></td>
							<td><div id="" class="gallery-prev"></div></td>
							<td><div id="" class="gallery-prev"></div></td>
							<td><div id="" class="gallery-prev"></div></td>
						</tr>
						</tbody>
						</table></center>
				</div><!-- end of gallery-area-->
				<div id="social-media-area">
					<h2><a href="tutorials.php"><?php echo $_SESSION['user']; ?>CONNECT WITH US</a></h2>
						<center><table border='0' >
							<tbody id="table1">
							<tr>
								<td><div id="" class="social-icon"></div></td>
								<td><div id="" class="social-icon"></div></td>
								<td><div id="" class="social-icon"></div></td>
							</tr>
						</table></center>
				</div>
			<div class="clear"></div><!--clear area-->
			</div><!-- end of gallery-findme-->
		<?php include 'footer.php'; ?>
		<a href="../../index.php">Back to newest version</a>
		</div><!-- end of main content area-->
</body>
</html>	