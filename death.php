<html>
	<head>
		<title>Death Certificate</title>
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
	<body style="background-color:#2d4259; background-image:url('death-certificate.jpg');background-repeat:no-repeat;background-size:750px;background-position:right;background-position: 650px 75px;">
	<form name="logout" action="index.html" method="POST">
<p align="right"> <input type="submit" name="logout" class = "butt" value="logout"></p>
</form>
                    <form name="birth_cer" method="post" action="death_insert.php">
				<table border="30" align="left" style="border-color:violet;margin: -50px 100px">
				<tr>
					<th height="50" bgcolor="magenta" colspan="2">DEATH CERTIFICATE</th>
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
					<td bgcolor="lightgreen" height="50"><label>District</label></td>
					<td bgcolor="yellow" ><input name="District" type="text" id="District" size="20" required  oninvalid="this.setCustomValidity('Please Enter The District')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td bgcolor="lightgreen" height="50"><label>Place of Death</label></td>
					<td bgcolor="yellow" ><input name="POD" type="text" id="POD" size="20" required  oninvalid="this.setCustomValidity('Please Enter The Place of Death')" oninput="setCustomValidity('')"/></td>
				</tr>
				
				<tr>
					<td bgcolor="lightgreen" height="50"><label>Date Of Death</label></td>
					<td bgcolor="yellow" ><input name="DOD" type="date" id="DOD" placeholder="dd/mm/yyyy" required  oninvalid="this.setCustomValidity('Please Enter Your Date Of Death')" oninput="setCustomValidity('')"/></td>
				</tr>
				<tr>
					<td bgcolor="lightgreen" height="50"><label>Death Person name</label></td>
					<td bgcolor="yellow" ><input name="name" type="text" id="name" size="20" required  oninvalid="this.setCustomValidity('Please Enter The name')" oninput="setCustomValidity('')"/></td>
				</tr>
				
				</table>
				
				<tr>
					<br><br><br><br><br>
					<br><br><br><br><br>
					<br><br><br><br><br>
					
					<br><br><br><br><br>
				<input style="margin: 0px 170px;" type="submit" name="Submit" class = "butt" value="Confirm"/>
					</form>
					<br><br><br><br><br><br>
 <center><a href='requestcertificate.html'><input type="submit" name="logout" class = "butt" value="Cancel">
</center>
	</body>
</html>
