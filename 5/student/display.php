<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"></head>
<?php 
	// $link = mysql_connect("localhost", "root", "root123");
 //    mysql_select_db("student_registation", $link);
	// $query = "SELECT * FROM std_info i";
	// $result = mysql_query($query) or die( "Error in: ".mysql_error());
 //    $num = mysql_num_rows($result); 
	// //echo $num;

//Here I connected database
	$con = mysqli_connect("localhost","root","","person");

	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	} 



//Here I connected table
	$sql = "SELECT * FROM person_data i";
	$result = mysqli_query($con, $sql);

	// Fetch all
	//$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$result = mysqli_fetch_all($result);
	// $result = mysqli_fetch_row($result);

	// Free result set
	// mysqli_free_result($result);
	// echo '<pre>';
	// die(var_dump($result[0][0]));

	mysqli_close($con);
	?>
    <table id="customers">
	<tr>
		<th>ID</th>
		<th>FIrst Name</th>
		<th>Last Name</th>
		<th>Father Name</th>
		<th>Mother Name</th>
		<th>Address</th>
		<th>E-mail</th>
		<th>Password</th>
		<th>Gender</th>
		<th>Have</th>
		<th>Have</th>
		<th>Department</th>
		<th>Session</th>
	</tr>
  <tr id="alt">
  <?php //while(($row = $result)){ ?>
  <?php for ($row=0; $row < count($result); $row++) { ?>
  <?php //while(($row = mysqli_fetch_row($result) )){ ?>
    <td><?php echo $result[$row][0];?> </td>
    <td><?php echo $result[$row][1];?> </td>
    <td><?php echo $result[$row][2];?> </td>
    <td><?php echo $result[$row][3];?> </td>
    <td><?php echo $result[$row][4];?> </td>
    <td><?php echo $result[$row][5];?> </td>
   	<td><?php echo $result[$row][6];?> </td>
	<td><?php echo$result[$row][7];?> </td>
	<td><?php echo $result[$row][8];?> </td>
    <td><?php if($result[$row][9]) echo $result[$row][9];  else echo "X"; ?> </td>
    <td><?php if($result[$row][10]) echo $result[$row][10];  else echo "X"; ?> </td>
	<td><?php echo $result[$row][11];?> </td>
	<td><?php echo $result[$row][12];?> </td>
  </tr>
  <?php } ?>
  
</table>
</html>