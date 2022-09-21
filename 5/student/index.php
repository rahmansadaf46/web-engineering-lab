<!DOCTYPE html>
<html>
<head>
<title>Lab 3(a)</title>

<!-- CCS part -->
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body bgcolor="#FFFFCC">
	
<center>
<form action="process.php" method="post" id="form"  style="background-color:#f0f8ff" onSubmit="process.php"> 
<fieldset>
    <legend style="background-position:center"><h2><b>Students Admission From</b></h2> </legend> 
	<p class="left"> <a href="display.php"><b> Show Details </b></a></p>
	<p><label>First name: <input type="text" name="firstname" class="input"> <span class="error">*</span></label></p> 
	<p><label>Last name: <input type="text" name="lastname" class="input"></label></p>
	<p><label>Father Name: <input type="text" name="fname" class="input"></label></p>
	<p><label>Mother Name: <input type="text" name="mname" class="input"></label></p>
	<p> <label class="address_field">Address:  <textarea rows="4" cols="50"placeholder="Adress goes here..." name="address"></textarea></label> </p>
 	<p><label for="email">Email address: </label> <input class="input" type="text" name="email" id="email" size="20" maxlength="50" /></p>
   	<p>Password: <input type="password" name="pwd" placeholder="Password" class="input"></p>
  	<p>Gender:<br><input type="radio" name="gender" value="male">Male<br>
			<input type="radio" name="gender" value="female">Female</p>
	<p><input type="checkbox" name="c1" value="Laptop">I have a Laptop<br>
		<input type="checkbox" name="c2" value="Desktop">I have a Desktop</p>
	<p>Department:<select name="dept"  id="dept">
					<option></option>
  					<option value="CSE">CSE</option>
  					<option value="ECE">ECE</option>
  					<option value="BBA">BBA</option>
  				</select></p>
				<p>Session: <input type="text" name="session" placeholder="Session" class="input"></p>
    
	<button type="reset" value="reset" class="submit"> Clear </button>
	<button type="submit" value="submit" class="submit"> Submit </button> 
</fieldset>
</form>
</center>

</body>
</html>