<?php 

	include 'connectsql.php';
	echo '	<div class="clear"></div><!--clear area-->
	<div id="footer">
	<h2><a href="tutorials.php">POWERED BY:</a></h2>	
	</div><!-- end of end of footer-->';

	$result = mysql_query("SELECT * FROM account");

while($row = mysql_fetch_array($result)) {
  echo $row['first_name'] . " " . $row['last_name'];
  echo "<br>";
}
mysql_close($connectsql);
	?>