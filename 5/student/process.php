<?php

 //$link = mysql_connect("localhost", "root", "root123");
//mysql_select_db("student_registation", $link);

$con = mysqli_connect("localhost","root","","person");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} 
//Here I connected database
/*********************************  Add Student Info  ************************************/
	
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$fname = $_POST["fname"];
		$mname = $_POST["mname"];
		$address= $_POST["address"];
		$email = $_POST["email"];
		$password = $_POST["pwd"];
		$gender = $_POST["gender"];
		$c1 = isset($_POST["c1"]) ? $_POST["c1"] : '';
		$c2 = isset($_POST["c2"]) ? $_POST["c2"] : '';
		$dept=$_POST["dept"];
		$session = $_POST["session"];
		
 
	//Here I connected table
		if( !empty($firstname) ){
			$query = "INSERT INTO person_data
					  SET first_name = '{$firstname}',
					  	  last_name = '{$lastname}',
						  father_name = '{$fname}',
						  mother_name = '{$mname}',
					  	  address = '{$address}',
						  email = '{$email}',
						  password = '{$password}',
						  sex = '{$gender}',
						  optional_1 = '{$c1}',
						  optional_2 = '{$c2}',
						  dept = '{$dept}',
						  session = '{$session}'";
		
			$result = mysqli_query($con,$query) or die (mysqli_error($con));
            echo "<script>window.alert('Added succsessfully');</script>";
			echo "<script>window.location='index.php';</script>";
		}
		echo "<script>window.location='index.php';</script>";
	?>