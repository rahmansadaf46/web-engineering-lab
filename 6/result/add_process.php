<?php

//$link = mysql_connect("localhost", "root", "");
//mysql_select_db("student_info", $link);

$con = mysqli_connect("localhost","root","","person");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} 

/*********************************  Add Student Info  ************************************/
	
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$stdroll = $_POST["stdroll"];
		$address= $_POST["address"];
		$email = $_POST["email"];
		$gender = $_POST["gender"];
		$c1 = $_POST["c1"];
		$c2 = $_POST["c2"];
		$dept=$_POST["dept"];
		$session = $_POST["session"];
		$submark=$_POST["submark"];
		
		
	
		if( !empty($firstname) ){
			$query = "INSERT INTO information
					  SET first_name = '{$firstname}',
					  	  last_name = '{$lastname}',
						  stdroll = '{$stdroll}',
					  	  address = '{$address}',
						  email = '{$email}',
						  sex = '{$gender}',
						  optional_1 = '{$c1}',
						  optional_2 = '{$c2}',
						  dept = '{$dept}',
						  session = '{$session}',
						  submark='{$submark}'";
						  //$result = mysqli_query($con,$query) or die (mysqli_error($con));
		
			$result = mysqli_query($con,$query) or die (mysqli_error($con));
            echo "<script>window.alert('Added succsessfully');</script>";
			echo "<script>window.location='home.php';</script>";
		}
		echo "<script>window.location='home.php';</script>";
	?>