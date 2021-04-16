<?php
    $mysqli =mysqli_connect("localhost","root","","province");
	//$conn = mysqli_connect("localhost", $dbuser, $dbpassword, $db);
	if ($mysqli -> connect_errno) {
		echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		exit();
	  }
	  
	 
	  
	$name=$_POST['name'];
	$UID=$_POST['UID'];
	$password=$_POST['pwd'];
	$cpassword=$_POST['repwd'];
	$DOB=$_POST['dob'];
	$gender=$_POST['gen'];
	$email=$_POST['email'];
	$pno=$_POST['phnum'];
	$add=$_POST['address'];

	if($password!=$cpassword)
	{
		echo "<script>window.alert('Your Passwords do not match')</script>";
		echo "<script>window.location='register.html'</script>";
	}
	else
	{
		$enter="INSERT INTO logintb VALUES('$UID','$name','$gender','$DOB',$pno,'$email','$password','$add')";
		mysqli_query($mysqli,$enter);

		$r="SELECT First_Name,Surname,Email_ID,Password FROM Members";
		$result=mysqli_query($mysqli,$r);
		if (is_object($result) && !empty($result->num_rows)) {
			while ($row = $result->fetch_array()) {
				echo "success"."<br>";
			}
		  }
		
		session_start();
		$_SESSION['uname']=$UID;
		echo "<script>window.alert('Registered Successfully')</script>";
		echo "<script>window.location='login.php'</script>";
	}
?>