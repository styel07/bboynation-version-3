<?php include 'title.php'; ?>
<style type="text/css">
#event-area{
	margin-top: 175px;
	margin-right: auto;
	margin-left: auto;
	width:1000px;
}
.event-poster{
	margin:5px;
	height:250px;
	width:200px;
	background-color: white;
	border: 2px solid black;
    /*border-radius: 15px;*/
	box-shadow: 10px 10px 20px black;
}
h3 a{
	font-size:25px;
	color:white;
	text-decoration: none;
}
h3 a:hover{
	color:red;
	transition: all 0.3s ease-in;
	-webkit-transition: all 0.5s ease-in; /*Safari & Chrome*/
}
</style>
<?php include 'header.php'; ?>
<div id ="main-content-area">
	<div id="event-area">
		<h2><a href="events.php">EVENTS</a></h2>
		<h3><a href="events.php">UPCOMING</a></h3>
			<div id="event-poster">
				<center><table border='0' >
				<tbody id="table1">
				<tr>
					<td><div class="event-poster" onclick ="location.href='sample-event1.php'" style:"cursor:pointer;">1</div></td>
					<td><div class="event-poster">2</div></td>
					<td><div class="event-poster">3</div></td>
					<td><div class="event-poster">4</div></td>
				</tr>
				<tr>
					<td><div class="event-poster">5</div></td>						
					<td><div class="event-poster">6</div></td>
					<td><div class="event-poster">7</div></td>
					<td><div class="event-poster">8</div></td>
				</tr>
				<tr>
					<td></td>						
					<td></td>
					<td><a href="events.php" style="font-size:25px; text-decoration:none; color:white;"><h3>See more Events</h3></a></td>
				</tr>
				</tbody>
				</table></center>	
		<h3><a href="events.php">PAST</a></h3>
			<div id="event-poster">
				<center><table border='0' >
				<tbody id="table1">
				<tr>
					<td><div class="event-poster" onclick ="location.href='sample-event1.php'" style:"cursor:pointer;">1</div></td>
					<td><div class="event-poster">2</div></td>
					<td><div class="event-poster">3</div></td>
					<td><div class="event-poster">4</div></td>
				</tr>
				<tr>
					<td><div class="event-poster">5</div></td>						
					<td><div class="event-poster">6</div></td>
					<td><div class="event-poster">7</div></td>
					<td><div class="event-poster">8</div></td>
				</tr>
				<tr>
					<td></td>						
					<td></td>
					<td><a href="events.php" style="font-size:25px; text-decoration:none; color:white; "><h3>See more Events</h3></a></td>
				</tr>
				</tbody>
				</table></center>	
			<!-- see more comment
				<div id="event-poster" style="display:none;">
				<center><table border='0' >
				<tbody id="table1">
				<tr>
					<td><div class="event-poster" onclick ="location.href='sample-event1.php'" style:"cursor:pointer;">1</div></td>
					<td><div class="event-poster">2</div></td>
					<td><div class="event-poster">3</div></td>
					<td><div class="event-poster">4</div></td>
				</tr>
				</tbody>
				</table></center>
			<div class="clear"></div><!--clear area-->
		</div><!-- end of events poster-->
		<?php include 'footer.php'; ?>
	</div><!-- end of event area-->


