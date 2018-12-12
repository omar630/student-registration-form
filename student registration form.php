<?php include('store.php');  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Form</title>
	<link rel="stylesheet" type="text/css" href="student registration form.css">
</head>
<body bgcolor="	 #cce6ff" class="card">
	<form method="POST" class="form1" >
		
		<center class="title"><h1>Registration Form</h1></center>
		<?php include ('errors.php'); ?>
		<label>First Name:</label><input type="text" name="firstname" value="<?php echo $firstname;?>"><br><br>
		<label>Last Name:</label><input type="text" name="lastname" value="<?php echo $lastname;?>"><br><br>
		<label>Email:</label><input type="email" name="email" value="<?php echo $email?>"><br><br>
		<label>Roll Number:</label><input type="text" name="rollnumber" value="<?php echo $rollnumber?>"><br><br>
		<label>Date of Birth</label><input type="Date" name="dob" max="<?php echo date('Y-m-d');?>" value="<?php echo $dob?>"><br><br>
		<label>College:</label><input type="text" name="college" value="<?php echo $college?>"><br><br>
		<label>Course:</label>
		<select name="course">
			<option value="null">--</option>
			<option value="CSE" name="course">B.Tech(CSE)</option>
			<option value="CIVIL" name="course">B.Tech(CIVIL)</option>
			<option value="MECH" name="course">B.Tech(MECH)</option>
			<option value="IT" name="course">B.Tech(IT)</option>
			<option value="EEE" name="course">B.Tech(EEE)</option>
			<option value="B.com" name="course">B.Com</option>
			<option value="B.com computers" name="course">B.Com compt.</option>
			<option value="B.Com generals" name="course">B.Com generals</option>
		</select>
		<br><br>
		<label>Start Year(Course):</label>
		<select name="startyear">
			<option value="NA">--</option>
			<option value="2018" >2018</option>
 		    <option value="2017" >2017</option>
    		<option value="2016" >2016</option>
    		<option value="2015" >2015</option>
    		<option value="2014" >2014</option>
    		<option value="2013" >2013</option>
    		<option value="2012" >2012</option>
    		<option value="2011" >2011</option>
    		<option value="2010" >2010</option>
    		<option value="2009" >2009</option>
    		<option value="2008" >2008</option>
    		<option value="2007" >2007</option>
    		<option value="2006" >2006</option>
    		<option value="2005" >2005</option>
    		<option value="2004" >2004</option>
    		<option value="2003" >2003</option>
    		<option value="2002" >2002</option>
    		<option value="2001" >2001</option>
    		<option value="2000" >2000</option>
		</select>
		<label>End Year</label>
		<select name="endyear">
			<option value="NA">--</option>
			<option value="2018">2018</option>
    		<option value="2022">2022</option>
	    	<option value="2021">2021</option>
    		<option value="2020">2020</option>
    		<option value="2019">2019</option>
    		<option value="2018">2018</option>
    		<option value="2017">2017</option>
    		<option value="2016">2016</option>
    		<option value="2015">2015</option>
    		<option value="2014">2014</option>
    		<option value="2013">2013</option>
    		<option value="2012">2012</option>
    		<option value="2011">2011</option>
    		<option value="2010">2010</option>
    		<option value="2009">2009</option>
    		<option value="2008">2008</option>
    		<option value="2007">2007</option>
    		<option value="2006">2006</option>
    		<option value="2005">2005</option>
    		<option value="2004">2004</option>
		</select>
		<br><br>
		<label>Mobile number:</label><input type="text" name="mobile1" maxlength="10"><br><br>
		<label>Alternate Mobile Number:</label><input type="text" name="mobile2" maxlength="10"><br><br>
		<label name="gender" value="NA">Gender:<br/></label>
		<input type="radio" name="gender" value="Male" checked="true"><label>Male</label>
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="Others">Others<br><br>
		<button type="submit" name="register"> Register</button>
		<button name="reset">Reset</button>
		<p class="bottom border"></p>
	</form>

</body>
</html>