<?php
	$username='';
	session_start();
	$mysqli =mysqli_connect("localhost","root","","province");
	//$conn = mysqli_connect("localhost", $dbuser, $dbpassword, $db);
	if ($mysqli -> connect_errno) {
		echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		exit();
	  }
	 
	if(!empty($_SESSION['uname']))
	{
		$username=$_SESSION['uname'];

		$data1="SELECT NAME FROM logintb WHERE uname='$username'";
		$result1=mysqli_query($mysqli,$data1);
		$name=mysqli_fetch_array($result1);

		$data2="SELECT GENDER FROM logintb WHERE uname='$username'";
		$result2=mysqli_query($mysqli,$data2);
		$gender=mysqli_fetch_array($result2);

		$data3="SELECT DOB FROM logintb WHERE uname='$username'";
		$result3=mysqli_query($mysqli,$data3);
		$dob=mysqli_fetch_array($result3);

		$data4="SELECT MOB_NO FROM logintb WHERE uname='$username'";
		$result4=mysqli_query($mysqli,$data4);
		$mob_no=mysqli_fetch_array($result4);

		$data5="SELECT EMAIL FROM logintb WHERE uname='$username'";
		$result5=mysqli_query($mysqli,$data5);
		$email=mysqli_fetch_array($result5);

		$data6="SELECT ADDRESS FROM logintb WHERE uname='$username'";
		$result6=mysqli_query($mysqli,$data6);
		$address=mysqli_fetch_array($result6);

    $data7="SELECT UID FROM birth_certificate WHERE UID='$username'";
    $result7=mysqli_query($mysqli,$data7);
    $birth=mysqli_fetch_array($result7);

    $data8="SELECT uid FROM death_certificate WHERE UID='$username'";
    $result8=mysqli_query($mysqli,$data8);
    $death=mysqli_fetch_array($result8);

    $data9="SELECT UID FROM community_certificate WHERE UID='$username'";
    $result9=mysqli_query($mysqli,$data9);
    $comm=mysqli_fetch_array($result9);

    $data10="SELECT username FROM caste WHERE username='$username'";
    $result10=mysqli_query($mysqli,$data10);
    $caste=mysqli_fetch_array($result10);
?>

<html>
	<head>
		<style>
      * {box-sizing: border-box;}

/* Style the navbar */
.topnav {
  overflow: hidden;
  background-color: #fdf03d;
  width: 550px;
  text-align: center;
}

/* Navbar links */
.topnav a {
  float: left;
  display:grid;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

/* Navbar links on mouse-over */
.topnav a:hover {
  background-color: #ddd;
  color: rgb(252, 7, 7);
}

/* Active/current link */
.topnav a.active {
  background-color: #21f321;
  color: rgb(7, 2, 2);
}

/* Style the input container */
.topnav .login-container {
  float: right;
}

/* Style the input field inside the navbar */
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width: auto; /* adjust as needed (as long as it doesn't break the topnav) */
}

/* Style the button inside the input container */
.topnav .login-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background: #ccc;
}

/* Add responsiveness - On small screens, display the navbar vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}

.register-title {
    width: 400px;
    line-height: 43px;
    margin: 50px auto 20px;
    font-size: 19px;
    font-weight: 500;
    color: white;
    color: rgba(255, 255, 255, 0.95);
    text-align: center;
    text-shadow: 0 1px rgba(0, 0, 0, 0.3);
    background: #d7604b;
    border-radius: 3px;
    background-image: -webkit-linear-gradient(top, #dc745e, #d45742);
    background-image: -moz-linear-gradient(top, #dc745e, #d45742);
    background-image: -o-linear-gradient(top, #dc745e, #d45742);
    background-image: linear-gradient(to bottom, #dc745e, #d45742);
    -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), inset 0 0 0 1px rgba(255, 255, 255, 0.05), 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
    box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), inset 0 0 0 1px rgba(255, 255, 255, 0.05), 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
  }
  
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
		<title>Profile</title>
	</head>
	<body style="background: #2d4259;">
	<center> <img src="TN logo.png" alt="TN logo"></center>
  <div class="topnav" style="margin: 20px 0px 40px;">
    <a class="active" href="main.html">Home</a>
    <a href="requestcertificate.html">Request Certificate</a>
    <a href="generate_certificates.html">Generate Certificate</a>
    <a href="about.html">About</a>
  </div>
<center>
<form name="logout" action="index.html" method="POST" style="margin:-200px 30px 10px;">
    <p align="right"> <input class="button" type="submit" name="logout" value="LOGOUT"></p>
</form>
<center><h1 class="register-title" style="margin:80px 200px 10px;color:springgreen;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-size:220%;">Tamil Nadu e-Province</h1></center>
<center>			
  <table border="25" align="left" style="border-color:yellowgreen; margin:0px 50px">
				<tr>
					<th bgcolor="red" height="50" colspan="2" style="color:yellow;font-size:20px">USER PROFILE</th>
				</tr>
				<tr>
					<td bgcolor="lightblue" height="50"><label>User ID</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $username; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>Name</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $name['NAME']; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>Gender</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $gender['GENDER']; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>Date Of Birth</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $dob['DOB']; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>Mobile Number</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $mob_no['MOB_NO']; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>EMAIL</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $email['EMAIL']; ?></td>
				</tr>
				<tr>
					<td bgcolor="lightblue"height="50"><label>ADDRESS</label></td>
					<td bgcolor="lightyellow"height="50"><?php echo $address['ADDRESS']; ?></td>
				</tr>
				</table>
        
        

        <table border="20" align="center" style="border-color:pink">
        <tr>
					<th bgcolor="purple" height="50" colspan="2" style="font-size:20px; color:white">CERTIFICATE STATUS</th>
				</tr>
        <?php
        if(!empty($birth['UID']))
        {?>
          <tr>
					<td bgcolor="voilet"; height="50" style="font-size:20px; color:white;height:50px;width:200px"><label>Birth Certificate</label></td>
					<td bgcolor="voilet"; height="50" style="font-size:20px; color:white;height:50px;width:200px"><a href="birth_generate.php" style="text-decoration:none;color:white;"><u><?php echo "APPLIED" ?></u>
          </td></tr>
        <?php }
        else { ?>
          <tr>
					<td bgcolor="voilet"; height="50" style="font-size:20px; color:white"><label>Birth Certificate</label></td>
					<td bgcolor="voilet"; height="50" style="font-size:20px; color:white"><?php echo "NOT APPLIED" ?>
          </td></tr>
        <?php } ?>
        
        
        <?php
        if(!empty($death['uid']))
        {?>
          <tr>
					<td bgcolor="yellow"; height="50" style="font-size:20px; color:black"><label>Death Certificate</label></td>
					<td bgcolor="yellow"; height="50" style="font-size:20px; color:black"><a href="birth_generate.php" style="text-decoration:none;color:black;"><u><?php echo "APPLIED" ?></u>
          </td></tr>
          <?php }
        else { ?>
          <tr>
					<td bgcolor="yellow"; height="50" style="font-size:20px; color:black"><label>Death Certificate</label></td>
					<td bgcolor="yellow"; height="50" style="font-size:20px; color:black"><?php echo "NOT APPLIED" ?>
          </td></tr>
        <?php } ?>

        <?php
        if(!empty($comm['UID']))
        {?>
          <tr>
					<td bgcolor="orange"; height="50" style="font-size:20px; color:white"><label>Community Certificate</label></td>
					<td bgcolor="orange"; height="50" style="font-size:20px; color:white"><a href="birth_generate.php" style="text-decoration:none;color:white;"><u><?php echo"APPLIED"?></u>
          </td></tr>
          <?php }
        else { ?>
          <tr>
					<td bgcolor="orange"; height="50" style="font-size:20px; color:white"><label>Community Certificate</label></td>
					<td bgcolor="orange"; height="50" style="font-size:20px; color:white"><?php echo "NOT APPLIED" ?>
          </td></tr>
        <?php } ?>

        <?php
        if(!empty($caste['username']))
        {?>
          <tr>
					<td bgcolor="lightblue"; height="50" style="font-size:20px; color:black"><label>Caste Certificate</label></td>
					<td bgcolor="lightblue"; height="50" style="font-size:20px; color:black"><a href="caste_generate.php" style="text-decoration:none;color:black;"><u><?php echo "APPLIED" ?></u>
          </td></tr>
          <?php }
        else { ?>
          <tr>
					<td bgcolor="lightblue"; height="50" style="font-size:20px; color:black"><label>Caste Certificate</label></td>
					<td bgcolor="lightblue"; height="50" style="font-size:20px; color:black"><?php echo "NOT APPLIED" ?>
          </td></tr>
        <?php } ?>
	
				</table>
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
