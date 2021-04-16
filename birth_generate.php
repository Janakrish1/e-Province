<?php
	$username='';
	session_start();
	$mysqli =mysqli_connect("localhost","root","","province");
	//$conn = mysqli_connect("localhost", $dbuser, $dbpassword, $db);
	if ($mysqli -> connect_errno) {
		echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		exit();
	  }
	  
	  // Return name of current default database
	 
	if(!empty($_SESSION['uname']))
	{
		$username=$_SESSION['uname'];

		$data1="SELECT DOB FROM Birth_Certificate WHERE UID='$username'";
		$result1=mysqli_query($mysqli,$data1);
		$DOB=mysqli_fetch_array($result1);

		$data2="SELECT Child_Name FROM Birth_Certificate WHERE UID='$username'";
		$result2=mysqli_query($mysqli,$data2);
		$Child_Name=mysqli_fetch_array($result2);

		$data3="SELECT Gender FROM Birth_Certificate WHERE UID='$username'";
		$result3=mysqli_query($mysqli,$data3);
		$Gender=mysqli_fetch_array($result3);

		$data4="SELECT Father_Name FROM Birth_Certificate WHERE UID='$username'";
		$result4=mysqli_query($mysqli,$data4);
		$Father_Name=mysqli_fetch_array($result4);

		$data5="SELECT Mother_Name FROM Birth_Certificate WHERE UID='$username'";
		$result5=mysqli_query($mysqli,$data5);
		$Mother_Name=mysqli_fetch_array($result5);

		$data6="SELECT Place_Of_Birth FROM Birth_Certificate WHERE UID='$username'";
		$result6=mysqli_query($mysqli,$data6);
		$Place_Of_Birth=mysqli_fetch_array($result6);

		$data7="SELECT Weight FROM Birth_Certificate WHERE UID='$username'";
		$result7=mysqli_query($mysqli,$data7);
		$Weight=mysqli_fetch_array($result7);

		$data8="SELECT Panchayat FROM Birth_Certificate WHERE UID='$username'";
		$result8=mysqli_query($mysqli,$data8);
		$Panchayat=mysqli_fetch_array($result8);

		$data9="SELECT Doctor_Name FROM Birth_Certificate WHERE UID='$username'";
		$result9=mysqli_query($mysqli,$data9);
		$Doctor_Name=mysqli_fetch_array($result9);

		$data10="SELECT Hospital FROM Birth_Certificate WHERE UID='$username'";
		$result10=mysqli_query($mysqli,$data10);
		$Hospital=mysqli_fetch_array($result10);
?>
<html>
	<head>
		<style>
			.button {
    width: 200px;
    line-height: 40px;
    margin:0px auto 20px;
    font-size: 19px;
    font-weight: 500;
    color: white;
    color: rgba(255, 255, 255, 0.95);
    text-align: center;
    text-shadow: 0 1px rgba(0, 0, 0, 0.3);
    background: #2cc426;
    border-radius: 50px;
    background-image: -webkit-linear-gradient(top, #68dc5e, #42d444);
    background-image: -moz-linear-gradient(top, #68dc5e, #42d444);
    background-image: -o-linear-gradient(top, #68dc5e, #42d444);
    background-image: linear-gradient(to bottom, #68dc5e, #42d444);
    -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), inset 0 0 0 1px rgba(255, 255, 255, 0.05), 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
    box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), inset 0 0 0 1px rgba(255, 255, 255, 0.05), 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
  }
		</style>
		<title>Birth Certificate</title>
	</head>
	<body style="background: #2d4259; background-image:url('swj.jpg');background-repeat:no-repeat;background-size:20%;background-position:200px">
				<table border="25" align="center" style="border-color:yellowgreen">
				<tr>
					<th bgcolor="red" height="50" colspan="2">BIRTH CERTIFICATE</th>
				</tr>
				<tr>
					<td bgcolor="lightblue" height="50"><label>User ID:</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $username; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>Date Of Birth:</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $DOB['DOB']; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>Child Name:</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $Child_Name['Child_Name']; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>Gender:</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $Gender['Gender']; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>Weight:</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $Weight['Weight']; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>Father's Name:</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $Father_Name['Father_Name']; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>Mother's Name:</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $Mother_Name['Mother_Name']; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>Place Of Birth:</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $Place_Of_Birth['Place_Of_Birth']; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>Panchayat</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $Panchayat['Panchayat']; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>Doctor's Name:</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $Doctor_Name['Doctor_Name']; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>Hospital:</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $Hospital['Hospital']; ?></td>
				</tr>
				</table>
				<form name="logout" action="index.html" method="POST">
    <p align="right"> <input class="button" type="submit" name="logout" value="PRINT" style="margin:-130px 200px 0px" ></p>
</form>
<form name="logout" action="index.html" method="POST">
    <p align="left"> <input class="button" type="submit" name="logout" value="LOGOUT" style="margin:-130px 200px 0px"></p>
</form>
	</body>
</html>
<?php
	}
	else
	{
?>
<html>
	<head>
		<title>Birth Certificate</title>
	</head>
	<body>
	<form name="logout" action="logout.php" method="POST">
<p align="right"> <input type="submit" name="logout" value="logout"></p>
</form>
                    <form name="birth_cer" method="post" action="birth.php">
				<table border="0" align="center">
				<tr>
					<th height="50" colspan="2">Birth Certificate</th>
				</tr>
				<tr>
					<td height="50"><label>User ID:</label></td>
					<td><input name="UID" type="text" id="UID" size="20" required  oninvalid="this.setCustomValidity('Please Enter The User ID')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Date Of Birth:</label></td>
					<td><input name="DOB" type="text" id="DOB" placeholder="dd/mm/yyyy" required  oninvalid="this.setCustomValidity('Please Enter Your Date Of Birth')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Child Name:</label></td>
					<td><input name="Child_Name" type="text" id="Child_Name" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Child's Name')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Gender:</label></td>
					<td><select name="Gender">
						<option value="">Select Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select></td>
				</tr>
				<tr>
					<td height="50"><label>Weight:</label></td>
					<td><input name="Weight" type="number" id="Weight" size="20" placeholder="weight in kg" required oninvalid="this.setCustomValidity('Please Enter The Weight')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Father's Name:</label></td>
					<td><input name="Father_Name" type="text" id="Father_Name" size="20"  required  oninvalid="this.setCustomValidity('Please Enter The Father's Name')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Mother's Name:</label></td>
					<td><input name="Mother_Name" type="text" id="Mother_Name" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Mother's Name')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Place Of Birth:</label></td>
					<td><input name="Birth_Place" type="text" id="Birth_Place" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Place Of Birth')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Panchayat</label></td>
					<td><input name="Panchayat" type="text" id="Panchayat" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Name Of The Panchayat')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Doctor's Name:</label></td>
					<td><input name="Doctor_Name" type="text" id="Doctor_Name" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Doctor's Name')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50"><label>Hospital:</label></td>
					<td><input name="Hospital" type="text" id="Hospital" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Name Of The Hospital')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td height="50" colspan="2" align="center"><input type="submit" name="Submit" value="Confirm"/></td>
				</tr>
				</table>
				</form>
	</body>
</html>
<?php
	}
?>
