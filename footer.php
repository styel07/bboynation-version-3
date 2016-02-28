<?php 
	include 'connectsql.php';?>
	<div class="clear"></div><!--clear area-->
	<div id="footer">
		<div class="module-heading">
		<h2><a href="tutorials.php">POWERED BY:</a></h2>
	</div>
<?php
	$result = mysql_query("SELECT * FROM account");
	while($row = mysql_fetch_array($result)) {
	  echo $row['first_name'] . " " . $row['last_name'];
	  echo "<br>";
	}
mysql_close($connectsql);
	?>	
	</div><!-- end of end of footer-->

