<?php
include 'title.php';
include 'header.php';
include 'myfunctions.php';
/**
*
*
*
*
*/
connectDB();

$result = mysql_query("SELECT event_id,event_name,event_date,event_version FROM event ") or die(" ".mysql_error());
?>
<style type="text/css">
#main-content-area
{
	margin-top: 300px;
}
#create-event-form
{
	
}
.lbl
{
	font-size: 30px;
	color:white;
	padding-right: 10px;
}
.textbox,#button
{
	height: 30px;
	width: 300px;
}
.select_input
{
	height: 30px;
	width:150px;
}
#display_timestamp
{
	color: red;
}
#event-info tr
{
	background-color: white;
}
#event-info td
{
	border: 1px solid white; 
	padding:10px;
}
</style>
<div id="main-content-area">
	<div id="display_timestamp">
		<table id="event-info">
		<h2>Events</h2>
			<tbody>
				<?php
				$edit = '<input type="checkbox" name="agree" value="0">';
				$delete ='<input type="checkbox" name="agree" value="0">';
				while($row = mysql_fetch_array($result)) 
				{
					$id = $row['event_name'];
					$name = $row['event_name'];
					$date = $row['event_date'];
					$version = $row['event_version'];

					echo '<tr><td><input type="checkbox" checked ></td><td>
						 '.$id.'</td><td>'.$name.'</td><td>'.$date.'</td><td>'
						 .$version."</td><td><input ='submit' name='' value='Delete'>
						 </td><td><input ='submit' name='' value='Edit'>
						 </td></td></tr>";	
				}
				?>
			</tbody>	
		</table>
	</div>		
	<form id='create-event-form' action='<?php $_SERVER['PHP_SELF']; ?>' method='POST' >
		<center>
			<table border = "0" style="padding:10px;">
			<h2>Events</h2>
			<tbody>
				<tr>
					<td><label class='lbl'>Event Name:</label></td>
					<td><input type='text' name='event_name' class='textbox' maxlength='50'></td>
				</tr>
				<tr>
					<td><span id="error" style="color:red;"></span></td>
					<td><input type='submit' name='createEvent' value='Create Event' /></td>
				</tr>
			</tbody>
			</table>
		</center>		
	</form>
	<?php include 'footer.php';?>
</div><!--end of main-content-area-->