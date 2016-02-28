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
function insertcategory($last_event_id,$values)
{
	mysql_query("INSERT INTO `event-division` (event_id,category) 
				VALUES('".$last_event_id."','".$values."')") 
				or die(mysql_error());
}
connectDB();
$errors = array();
if(isset($_POST['createEvent']))
{

//POST[] &&	//Prevention of SQL injection Codes	
	$event_name = mysql_real_escape_string($_POST["event_name"]);
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	$version = $_POST['event_version'];

	//$date = $day.'-'.$month.'-'.$year;
	$date ="6/18/2014";
	$timestamp = strtotime($date);

	// Null Value checking
	if(empty($event_name)) 
	{
		$errors["event_name"] = "Please enter a Event Name.";
	}

	if(count($errors) == 0) 
	{
		//no errors in $errors array, INSERT
		mysql_query("INSERT INTO event (event_name,event_date,event_version) 
					VALUES ('".$event_name."','".$timestamp."','".$version."')") 
					or die(mysql_error());

		$last_event_id = mysql_insert_id();

		if(isset($_POST["div1"]))
		{
			insertcategory($last_event_id,"1 vs 1");
		}
		if(isset($_POST["div2"]))
		{
			insertcategory($last_event_id,"2 vs 2");
		}
		if(isset($_POST["div3"]))
		{
			insertcategory($last_event_id,"3 vs 3");
		}
		if(isset($_POST["div4"]))
		{
			insertcategory($last_event_id,"4 vs 4");
		}
		if(isset($_POST["div5"]))
		{
			insertcategory($last_event_id,"5 vs 5");
		}
		if(isset($_POST["div6"]))
		{
			insertcategory($last_event_id,"6 vs 6");
		}
		if(isset($_POST["div7"]))
		{
			insertcategory($last_event_id,"7 vs 7");
		}
		if(isset($_POST["divcrew"]))
		{
			insertcategory($last_event_id,"crew vs crew");
		}
	}
	else
	{
		var_dump($errors);
	}
}
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
</style>
<div id="main-content-area">
	<div id="display_timestamp">
		<?php
			echo $date."<br/>";
			echo $timestamp ."<br/>";
			echo gmdate("F d, Y, g:i a", $timestamp);
			echo date_default_timezone_get();
		?>
	</div>		
	<form id='create-event-form' action='<?php $_SERVER['PHP_SELF']; ?>' method='POST' >
		<center>
			<table border = "0" style="padding:10px;">
			<h2>Create Event Form</h2>
			<tbody>
				<tr>
					<td><label class='lbl'>Event Name:</label></td>
					<td><input type='text' name='event_name' class='textbox' maxlength='50'></td>
				</tr>
				<tr>
					<td><label class='lbl'>Event Date:</label></td>
					<td><label class='lbl'>Month:</label>
					<?php
						$months = array("January","February","March","April",
										"May","June","July","August","September",
										"October","November","December");
						echo "<select class='select_input' name='month'>";
						foreach($months as $month)
						{
							echo "<option value='".$month."'>" . $month . "</option>";
						}
						echo "</select>";
						//$month = $_POST['month'];
					?>
					<label class='lbl'>Day:</label>
					<?php
						if($month == "January" ||"March" ||"May" ||
									 "July" || "August" || "October" || "December")
						{
							$max_days = 31;	
						}
						
						elseif($month == "April" || "June" || "September" || "November" )
						{
							$max_days = 30;	
						}
						
						else
						{
							$max_days = 28;		
						}
						echo "<select class='select_input' name='day'>";
						for($day =1; $day <= $max_days; $day++)
						{
							echo "<option value='".$day."'>" . $day . "</option>";
						}
						echo "</select>";
					?>
					<label class='lbl'>Year:</label>
					<?php
						$year=2014;
						$year_max = 2025;
						echo "<select class='select_input' name='year'>";
						for($year=$year; $year <= $year_max; $year++)
						{
							echo "<option value='".$year."'>" . $year . "</option>";
						}
						echo "</select>";
					?>
					</td>
				<tr>
					<td><span id="error" style="color:red;"></span></td>
					<td><label class='lbl'>Version:</label>
					<?php
						echo "<select class='select_input' name='event_version'>";
						for($ver=1; $ver <= 10; $ver++)
						{
							echo "<option value='".$ver."'>" . $ver . "</option>";
						}
						echo "</select>";
					?>
					</td>
				</tr>
				<tr>
					<td><label class='lbl'>Upload Event Poster:</label></td>
					<td><input type='submit' name='upload_poster' value='Browse'></td>
					<td><label></label></td>
				</tr>
				<tr>
					<td><label class='lbl'>Choose Location:</label></td>
					<td><input type='submit' name='upload_poster' value='Choose Location'></td>
					<td><label></label></td>
				</tr>
				<tr>
					<table border = "0" style="padding:0px;">
					<h3>Choose Divisions:</h3>
					<tbody>
						<tr>
							<td>
								<input type="checkbox" name="div1" value="true">
								<label>1 vs 1</label>
								<br>
								<input type="checkbox" name="div2" value="true">
								<label>2 vs 2</label>
								<br>
								<input type="checkbox" name="div3" value="true">
								<label>3 vs 3</label>
								<br>
								<input type="checkbox" name="div4" value="true">
								<label>4 vs 4</label>
							</td>
							<td>
								<input type="checkbox" name="div5" value="true">
								<label>5 vs 5</label>
								<br>
								<input type="checkbox" name="div6" value="true">
								<label>6 vs 6</label>
								<br>
								<input type="checkbox" name="div7" value="true">
								<label>7 vs 7</label>
								<br>
								<input type="checkbox" name="divcrew" checked >
								<label>crew vs crew</label>
							</td>
						</tr>
					</tbody>
					</table>
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