<?php 
include 'title.php'; 
include 'connectsql.php'; 
?>
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
test


<?php
$result = mysqli_query($connectsql,"SELECT * FROM Accounts");

while($row = mysqli_fetch_array($result)) {
  echo $row['first_name'] . " " . $row['last_name'];
  echo "<br>";
}

mysqli_close($connectsql);
?>

<?php include 'footer.php'; ?>

