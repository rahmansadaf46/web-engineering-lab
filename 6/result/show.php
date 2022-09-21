<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /></head>

<head>
<?php 
	//$link = mysql_connect("localhost", "root", "root123");
   // mysql_select_db("student_info", $link);
	//$query = "SELECT * FROM information i";
	//$result = mysql_query($query) or die( "Error in: ".mysql_error());
   // $num = mysql_num_rows($result); 
	//echo $num;
$con = mysqli_connect("localhost","root","","person");

	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	} 

	$sql = "SELECT * FROM information i";
	$result = mysqli_query($con, $sql);

	// Fetch all
	//$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$result = mysqli_fetch_all($result);
	// $result = mysqli_fetch_row($result);

	// Free result set
	// mysqli_free_result($result);
	// die(var_dump('<pre>', count($result)));

	mysqli_close($con);
	
	function calculate_gpa($m){ 
	if($m <= 39){
		$gpa = "F";}
	elseif($m <= 44){
		$gpa = "D";}
	elseif($m <= 49){
		$gpa = "C";}
	elseif($m <= 54){
		$gpa = "C+";}
	elseif($m <= 59){
		$gpa = "B-";}
	elseif($m <= 64){
		$gpa = "B";}
	elseif($m <= 69){
		$gpa = "B+";}
	elseif($m <= 74){
		$gpa = "A-";}
	elseif($m <= 79){
		$gpa = "A";}
	elseif($m <= 100){
		$gpa = "A+";}

	return $gpa;
}
	?>
	<center>
	<table class="names">
	

	<tr>
		
		<th>FIrst Name</th>
		<th>Last Name</th>
		<th>Student Roll</th>
		<th>Address</th>
		<th>E-mail</th>
		<th>Gender</th>
		<th>Extra have 1</th>
		<th>Extra have 1</th>
		<th>Department</th>
		<th>Session</th>
		<th>Grade</th>
	</tr>
  
 <tr>
 	
 <?php //while($row = mysqli_fetch_array($result)){ ?>
 <?php for ($row=0; $row < count($result); $row++) { ?>
   
    <td><?php echo $result[$row][0];?> </td>
	<td><?php echo $result[$row][1];?> </td>
    <td><?php echo $result[$row][2];?> </td>
	<td><?php echo $result[$row][3];?> </td>
    <td><?php echo $result[$row][4];?> </td>
   	<td><?php echo $result[$row][5];?> </td>
   	<td><?php echo $result[$row][6];?> </td>
	<td><?php if($result[$row][7]) echo $result[$row][7];  else echo "X"; ?> </td>
    <td><?php if($result[$row][8]) echo $result[$row][8];  else echo "X"; ?> </td>
    
	<td><?php echo $result[$row][9];?> </td>
	<td><?php echo calculate_gpa ($result[$row][10]);?> </td>
  </tr>
  <?php } ?>
  
</table>
<p class="left"> <a href="home.php"> Back </a></p>
</center>

</html>