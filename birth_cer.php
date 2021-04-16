<html>
	<head>
		<title>Birth Certificate</title>
		<style>
			.butt {
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
	</head>
	<body style="background-color:#2d4259; background-image:url('Birth-Certificate.jpg');background-repeat:no-repeat;background-size:750px;background-position:right;background-position: 650px 75px;">
	<form name="logout" action="index.html" method="POST">
<p align="right"> <input type="submit" name="logout" class = "butt" value="logout"></p>
</form>
                    <form  method="POST" action="birth.php">
				<table border="30" align="left" style="border-color:violet;margin: -50px 100px">
				<tr>
					<th height="50" bgcolor="magenta" colspan="2">BIRTH CERTIFICATE</th>
				</tr>
				
				<tr>
					<td bgcolor="lightgreen" height="50"><label>Date Of Birth</label></td>
					<td bgcolor="yellow" ><input name="DOB" type="date" id="DOB" placeholder="dd/mm/yyyy" required  oninvalid="this.setCustomValidity('Please Enter Your Date Of Birth')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td bgcolor="lightgreen" height="50"><label>Child Name</label></td>
					<td bgcolor="yellow" ><input name="Child_Name" type="text" id="Child_Name" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Child's Name')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td bgcolor="lightgreen" height="50"><label>Gender</label></td>
					<td bgcolor="yellow" ><select name="Gender">
						<option value="">Select Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select></td>
				</tr>
				<tr>
					<td bgcolor="lightgreen" height="50"><label>Weight</label></td>
					<td bgcolor="yellow" ><input name="Weight" type="number" id="Weight" size="20" placeholder="weight in kg" required oninvalid="this.setCustomValidity('Please Enter The Weight')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td bgcolor="lightgreen" height="50"><label>Father's Name</label></td>
					<td bgcolor="yellow" ><input name="Father_Name" type="text" id="Father_Name" size="20"  required  oninvalid="this.setCustomValidity('Please Enter The Father's Name')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td bgcolor="lightgreen" height="50"><label>Mother's Name</label></td>
					<td bgcolor="yellow" ><input name="Mother_Name" type="text" id="Mother_Name" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Mother's Name')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td bgcolor="lightgreen" height="50"><label>Place Of Birth</label></td>
					<td bgcolor="yellow" ><input name="Birth_Place" type="text" id="Birth_Place" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Place Of Birth')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td bgcolor="lightgreen" height="50"><label>Panchayat</label></td>
					<td bgcolor="yellow" ><input name="Panchayat" type="text" id="Panchayat" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Name Of The Panchayat')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td bgcolor="lightgreen" height="50"><label>Doctor's Name</label></td>
					<td bgcolor="yellow" ><input name="Doctor_Name" type="text" id="Doctor_Name" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Doctor's Name')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td bgcolor="lightgreen" height="50"><label>Hospital</label></td>
					<td bgcolor="yellow" ><input name="Hospital" type="text" id="Hospital" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Name Of The Hospital')" oninput="setCustomValidity('')"/></td>
				</tr>
					<tr><td align='center' colspan='2'><br><br><input type='submit' name='submit' class="button" value='SUBMIT'></td></tr>
					</table>
					
					
					</form>
 <a href='requestcertificate.html'><input style="margin: -80px 900px;" type="submit" name="logout" class = "butt" value="Cancel">

	</body>
</html>
