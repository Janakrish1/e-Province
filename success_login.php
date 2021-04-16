					<?php
						$mysqli =mysqli_connect("localhost","root","","province");
						$username=$_POST['username'];
						$password=$_POST['password'];
						//$username = stripslashes($username);
						//$password = stripslashes($password);
						//$username = mysql_real_escape_string($username);
						//$password = mysql_real_escape_string($password);

						$sql="SELECT * FROM loginTB WHERE uname='$username'";
						$sql1="SELECT * FROM loginTB WHERE uname='$username' and password='$password'";

						$result=mysqli_query($mysqli,$sql);
						$count=mysqli_num_rows($result);
						$result1=mysqli_query($mysqli,$sql1);
						$count1=mysqli_num_rows($result1);

						session_start();

						if($count!=1)
						{
							echo "<script>window.location='invaliduser.php'</script>";
						}
						else if($count==1 && $count1!=1)
						{
							echo "<script>window.location='inpass.php'</script>";
						}
						else
						{
							$_SESSION['uname'] = $username;
							echo "<script>window.alert('Logged In Successfully')</script>";
							echo "<script>window.location='main.html'</script>";
						}
					?>