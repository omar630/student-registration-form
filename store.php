<?php
	$rollnumber=$mobile1=$mobile2=$firstname=$lastname=$email=$gender=$college=$dob="";
	$errors=array();
	$fnameerror="";

	$db=mysqli_connect('localhost','root','omar@sql','student registration');
	if(isset($_POST['register'])){
		$firstname=$_POST['firstname'];
		if(isset($_POST['rollnumber']))
		$rollnumber=$_POST['rollnumber'];
		$email=$_POST['email'];
		$lastname=$_POST['lastname'];
		$college=$_POST['college'];
		$course=$_POST['course'];
		$mobile1=$_POST['mobile1'];
		$mobile2=$_POST['mobile2'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$startyear=$_POST['startyear'];
		$endyear=$_POST['endyear'];

		if(empty($firstname)){
			array_push($errors,"First Name cannot be empty");
		}
		if(empty($lastname)){
			array_push($errors,"Last Name cannot be empty");
		}
		if(empty($email)){
			array_push($errors,"email is required");
		}
		if(empty($dob)){
			array_push($errors,"Date of birth is required");
		}
		if(empty($college)){
			array_push($errors,"College name is required");
		}
		if(empty($mobile1) && empty($mobile2)){
			array_push($errors,"Mobile number cannot be empty");
		}
		if(empty($gender)){
			array_push($errors,"Please select any gender");
		}
		if(empty($rollnumber)){
			array_push($errors,"Roll Number cannot be empty");
		}



		$user_check_query="select * from registered where rollnumber='$rollnumber' or email='$email' limit 1";
		$result=mysqli_query($db,$user_check_query);
		$user=mysqli_fetch_assoc($result);
		if($user){
			if($user['rollnumber']===$rollnumber){
				array_push($errors,"Roll Number Already Registered");
			}
			if(($user['mobilenumber1']==$mobile1 || $user['mobilenumber1']==$mobile2) || ($user['mobilenumber2']==$mobile2 || $user['mobilenumber2']==$mobile1)){
				array_push($errors,"Mobile Number Already Registered");
			}
			if($user['email']===$email){
				array_push($errors,"Email Already Registered");
			}
		}
			if(count($errors)==0)
		{
			$query="insert into registered(rollnumber,firstname,lastname,email,dateofbirth,college,course,startyear,endyear,mobilenumber1,mobilenumber2,gender) values('$rollnumber','$firstname','$lastname','$email','$dob','$college','$course','$startyear','$endyear','$mobile1','$mobile2','$gender')";
			mysqli_query($db,$query);
			header('location:success.php');
			}			
	}
		
?>