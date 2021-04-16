<?php
    $mysqli =mysqli_connect("localhost","root","","province");
	session_start();
	$UID=$_SESSION['uname'];
    $gender=$_POST['Gender'];
	$DOD=$_POST['DOD'];
	$name=$_POST['name'];
	$POD=$_POST['POD'];
	$District=$_POST['District'];
	
	
	$enter="INSERT INTO death_certificate VALUES('$gender','$District','$POD','$DOD','$name','$UID')";
	mysqli_query($mysqli,$enter);
	$r="SELECT Gender,District,POD,DOD,name,UID FROM death_certificate";
	$res=mysqli_query($mysqli,$r);
	while($ro=mysqli_fetch_array($res))
	{   
		    echo "success"."<br>";
	}
	$_SESSION['user']=$UID;
    echo "<script>window.alert('Processing Certificate')</script>";
	echo "<script>window.location='Certificate_requested_success.html'</script>";
?>