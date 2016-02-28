<?php 
session_start();
include 'title.php'; ?>
<style type="text/css">

</style>
<?php include 'header.php'; ?>`
		<div id="main-content-area">
			<div id="banner">
				<img src="pictures/banners/final-design.jpg" style="width:100%; height: 100%;">
			</div>
			<div id="event-area" class="module-background">
				<div class="module-heading">
					<h2><a href="events.php">EVENTS</a><?php echo '$age'; ?></h2>
				</div>
				<div id="event-poster">
					<center><table border='0'>
					<tbody id="table1">
						<h3>Upcoming</h3>
					<tr>
						<td><a href="sample-event1.php">
							<div class="event-poster">
								<img src="pictures/events/R-16/poster-main.jpg" />
								<div class="event-info"></div>
							</div>
							</a>
						</td>
						<td><a href="sample-event1.php"><div class="event-poster">
								<img src="pictures/events/Skills/Skills-Hawaii-2014.jpg">
								<div class="event-info"></div>
								</div></a></td>
						<td><div class="event-poster"></div></td>
						<td><div class="event-poster"><iframe src="index.php" width="100%" height="100%"></iframe></div></td>
					</tr>
					</tbody>
					</table></center>

					<center><table border='0'>
					<tbody id="table1">	
						<h3>Past Event</h3>
					<tr>
						<td><div class="event-poster">5</div></td>
						<td><div class="event-poster">6</div></td>
						<td><div class="event-poster">7</div></td>
						<td><div class="event-poster">8</div></td>
					</tr>
					</tbody>
					</table></center>	

					<center><table border='0'>
					<tbody id="table1">
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
			
			<div id="tutorial-findme" class="module-background">
				<div id="find-me-area">
					<div class="module-heading">
					<h2><a href="tutorials.php">FIND ME</a></h2>
					</div>
				<img src="pictures/find-me.gif">
				</div><!--end of fine-me-area-->
				<div id="tutorials">
					<div class="module-heading">
					<h2><a href="tutorials.php">TUTORIALS</a></h2>
					</div>
						<center><table border='0' >
						<tbody id="table1">
						<tr>
							<td><div id="" class="tutorial-banner">Top Rock</div></td>
							<td><div id="" class="tutorial-banner">Footwork</div></td>
						</tr>
						<tr>
							<td><div id="" class="tutorial-banner">Power</div></td>
							<td><div id="" class="tutorial-banner">Freeze</div></td>
						</tr>
						</tbody>
						</table></center>
				</div><!-- end of tutorials-area-->
			</div><!-- end of gallery-findme-->
			<div id="gallery-area" class="module-background">
				<div class="module-heading">
				<h2><a href="gallery.php">GALLERY</a></h2>
				</div>
				<div id="gallery-right">
					<h3>Videos</h3>
				<center><table border='0' >
					<tbody id="table1">
					<tr>
						<td><div id="" class="gallery-prev"></div></td>
						<td><div id="" class="gallery-prev"></div></td>
						<td><div id="" class="gallery-prev"></div></td>
						<td><div id="" class="gallery-prev"></div></td>
						<td><div id="" class="gallery-prev"></div></td>
						<td><div id="" class="gallery-prev"></div></td>
					</tr>
					</tbody>
				</table></center>	
				</div>
				<div id="gallery-left">
					<h3>Pictures</h3>
					<center><table border='0' >
					<tbody id="table1">
					<tr>
						<td><div id="" class="gallery-prev"></div></td>
						<td><div id="" class="gallery-prev"></div></td>
						<td><div id="" class="gallery-prev"></div></td>
						<td><div id="" class="gallery-prev"></div></td>
						<td><div id="" class="gallery-prev"></div></td>
						<td><div id="" class="gallery-prev"></div></td>
					</tr>
					</tbody>
				</table></center>
				</div>
			</div><!-- end of gallery area-->
			<div class="clear"></div><!--clear area-->
				<div id="social-media-area" class="module-background">
					<div class="module-heading">
					<h2><a href="social-media.php">CONNECT WITH US</a></h2>
					</div>	
						<center><table border='0' >
							<tbody id="table1">
							<tr>
								<td><div id="" class="social-icon"></div></td>
								<td><div id="" class="social-icon"></div></td>
								<td><div id="" class="social-icon"></div></td>
							</tr>
						</table></center>
				</div>
		<?php include 'footer.php'; ?>
		<h3>Older Versions of Bboynation.ph</h3>
		<a href="versions/v1">version 1</a>
		</div><!-- end of main content area-->
</body>
</html>	