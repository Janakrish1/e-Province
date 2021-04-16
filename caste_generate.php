<b><strong><?php
	$mysqli =mysqli_connect("localhost","root","","province");
session_start();
$u=$_SESSION['uname'];
$query1="SELECT name FROM `caste` WHERE username='$u'";
$query2="SELECT acategory FROM `caste` WHERE username='$u'";
$sa=mysqli_query($mysqli,$query1);
$sa2=mysqli_query($mysqli,$query1);
$sa1=mysqli_query($mysqli,$query2);
$sa3=mysqli_query($mysqli,$query2);

?></b></strong>

<html><head><title>Caste Certificate</title>
<style>
       .log {
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
<body>
<form name="logout" action="index.html" method="POST">
<p align="right"> <input type="submit" name="logout" class="log" value="logout"></p>
</form>
<img src='caste.jpg' height='' width=''>
<img src='1.PNG' height='' width='1500'>

<table align='center' border='1'>
<tr><td>
<h3 align='center'>CASTE CERTIFICATE  SCRUTINY COMMITTE<br>DELHI</h3>
<br><br><br>

dated: -<b><strong><?php echo date("d-m-Y");?></b></strong></font>
<br><br><br>
 WHEREAS, an application of <b><strong><b><strong><?php while($row = mysqli_fetch_assoc($sa)){
      echo "{$row['name']} <br>";}?></b></strong>
	  
	  </b></strong><br>
dated <b><strong><?php echo date("d-m-Y");?></b></strong>
along with the documents was received by the scrutiny committe for varification<br><br>
of Caste Certificate of <b><strong><?php while($row = mysqli_fetch_assoc($sa1)){
      echo "{$row['acategory']} caste";}?></b></strong>

and the same was placed before<br><br>
the said committe in the meeting held  on <b><strong><?php echo date("d-m-Y");?></b></strong><br><br>
AND WHEREAS in accordance with the powers conferred on it under Indian Scheduled<br><br>
Caste,Scheduled Tribes,De-Notififed Tribes,Nomadic Tribes, Other Backword Class<br><br>
and Special Backward Category (Regulation of Issuance and Verification of)<br><br>
Caste Certificate Rules ,2012, teh Committe on the basics of the documents and <br><br>
evidence produced before it verified abd scrutinised the said Caste Certificate/Claim<br><br>
NOW,THERFORE, the committe hereby certifies that caste claim is found to be correct and the <br><br>
caste certificate bearing No:D854E26   dated <b><strong><?php echo date("d-m-Y");?></b></strong><br><br>
issued by the <b><strong>SUB DIVISIONAL OFFICER</b></strong><br><br>
certifying that <b><strong><b><strong><?php while($row = mysqli_fetch_assoc($sa2)){
      echo "{$row['name']} <br>";}?></b></strong></b></strong><br><br>
belongs to <b><strong><b><strong><?php while($row = mysqli_fetch_assoc($sa3)){
      echo "{$row['acategory']}";}?></b></strong></b></strong> Caste/Tribe is found to be VALID.<br><br><br>
</td></tr></table>

</CENTER>
	

</body>
</html>
