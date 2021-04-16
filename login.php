<html>
	<head>
	<title>Login</title>
		<style>
			td {
        
				width: 250px;
			font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:175%;
      }
	  .register-title {
			width: 270px;
			line-height: 43px;
			margin: 30px auto 20px;
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
        background-color:red;
        border: none;
        color:white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
	  }
			</style>
		<h1 class="register-title">LOGIN</h1>
	</head>
	<body style="background-color: #2d4259;background-image:url('login-bg.png');background-repeat:no-repeat;background-size:90%;">
		<form action="success_login.php" method="post" name="login">
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br>
		<table border="40" align="center" style="border-color:magenta">
			
			<tr>
				<td height="50"  style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color:yellow;"><label>Application Number:</label></td>
				<td><input name="username" type="text" size="25" required oninvalid="this.setCustomValidity('Please Enter Your Username')" oninput="setCustomValidity('')"/></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
                   	<td height="50" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color:yellow;"><label>Password:</label></td>
				<td><input name="password" type="password" oninvalid="this.setCustomValidity('Please Enter your password');"  oninput="setCustomValidity('')" size="25" required/></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td colspan="2" height="50" align="center"><input class="button" type="submit" name="Submit" value="Confirm"/></td>
			</tr>
		</table>
		</form>
	</body>
</html>

