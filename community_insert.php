<?php
    $mysqli =mysqli_connect("localhost","root","","province");
	session_start();
	$UID=$_SESSION['uname'];
	$DOB=$_POST['DOB'];
	$name=$_POST['app_name'];
	$gender=$_POST['Gender'];
    $card_no = $_POST['card_no'];
    $address = $_POST['address'];
	$f_name=$_POST['f_name'];
	$father=$_POST['Father_Name'];
	$mother=$_POST['Mother_Name'];
    $p_comm = $_POST['p_comm'];
	
	$enter="INSERT INTO community_certificate VALUES('$UID','$name','$f_name','$gender','$address','$card_no','$DOB','$father','$mother','$p_comm')";
	mysqli_query($mysqli,$enter);
	$r="SELECT UID,name,f_name, gender, address,card_no,dob,father_name,mother_name,p_comm FROM community_certificate";
	$res=mysqli_query($mysqli,$r);
	while($ro=mysqli_fetch_array($res))
	{   
		    echo "success"."<br>";
	}
	$_SESSION['user']=$UID;
    echo "<script>window.alert('Processing Certificate')</script>";
	echo "<script>window.location='Certificate_requested_success.html'</script>";
?>