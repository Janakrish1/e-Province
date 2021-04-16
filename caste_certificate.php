<?php
session_start();
?>

<html><head><title>Caste Certificate</title>
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
</head>
<body style="background-color:#2d4259;;">
<form name="logout" action="index.html" method="POST">
<p align="right"> <input type="submit" name="logout" class ="button" value="LOGOUT"></p>
</form>
<img src='caste.jpg' height='' width=''>
<img src='caste1.jpg' height='' width=''>
<form action='caste_certificate.php' method='POST'>
<table align='center' border='20' style="border-color:greenyellow">
<tr><td bgcolor="pink" colspan='2'><b><h3>Caste Certificate Details</h3></b><br></td></tr>
<tr><td bgcolor="lightblue">Applicant's name (As<br>
per specified in<br>
Caste Certificate)</td><td bgcolor = "lightblue"><input type='text' name='Aname' Id='aname' size='70'></td></tr>
<tr><td bgcolor = "lightblue">Applicant's<br>
Certificate No.
</td><td bgcolor = "lightblue"><input type='text' name='Cno' Id='cno' size='70'></td></tr>
<tr><td bgcolor = "lightblue">Certificate Issuing<br>
Date(yyyy/mm/dd)</td><td bgcolor = "lightblue"><input type='text' name='Cidate' Id='cidate' size='70'></td></tr>
<tr><td bgcolor = "lightblue">Issued From
District</td><td bgcolor = "lightblue">
<input type='text' name='District' name='district' size='70'></td></tr>
<tr><td bgcolor = "lightblue">Designation of Certificate Issuing Authority</td><td bgcolor = "lightblue"><input type='text' name='Dauthority' Id='dauthority' size='70'></td></tr>
<tr><td bgcolor = "lightblue">Documents submitted to the officer <br>for receiving the caste certificate</td>
<td bgcolor = "lightblue"><textarea name='Csub' Id='csub' rows='6' cols='70'></textarea></td></tr>
<tr><td bgcolor="pink" colspan='2'><h3>Applicant Details</h3></td></tr>
<tr><td bgcolor = "lightblue">Gender</td><td bgcolor = "lightblue">
 <select name="Gender" id="gender">
	<option value="select">--Select Gender--</option>
	<option selected="selected" value="male">Male</option>
	<option value="female">Female</option>
	<option value="transgenger">Transgender</option></td></tr>
	
	<tr><td bgcolor = "lightblue">UID NO.</td><td bgcolor = "lightblue"><input type='text' name='Uid' Id='uid' size='70'></td></tr>
	<tr><td bgcolor = "lightblue">Category Applied</td><td bgcolor = "lightblue">
	 <select name="Category" id="category">
	<option value="Select Category">--Select Category--</option>
	<option value="Scheduled Caste">Scheduled Caste</option>
	<option value="Scheduled Caste Converted To Buddhism">Scheduled Caste Converted To Buddhism</option>
	<option value="Vimukta Jati (A)">Vimukta Jati (A)</option>
	<option value="Nomadic Tribe (B)">Nomadic Tribe (B)</option>
	<option value="Nomadic Tribe (C)">Nomadic Tribe (C)</option>
	<option value="Nomadic Tribe (D)">Nomadic Tribe (D)</option>
	<option value="Other Backward Class">Other Backward Class</option>
	<option value="Special Backward Class">Special Backward Class</option>
	<option value="Educationally and Socially Backward Category">Educationally and Socially Backward Category</option>
	<option value="Special Backward Category (A) ">Special Backward Category (A) </option>
	</select></td></tr>
	<tr><td bgcolor = "lightblue">Caste applied</td><td bgcolor = "lightblue"><input type='text' name='Casteapplied' Id='casteapplied' size='70'></td></tr>
	<tr><td bgcolor = "lightblue"> Date of Birth (YYYY-MM-DD) </td><td bgcolor = "lightblue"><input type='text' name='Dob' Id='dob' size='70'> </td></tr>
	<tr><td bgcolor="pink" colspan='2'><b><h3>Birth Place Details</h3></b></td></tr>
	<tr><td bgcolor = "lightblue">Country <input type='text' name='Country' Id='country' value='India' size='70'></td><td bgcolor = "lightblue">
	State: -
	 <select size=1 name="bstate" id=txtstate class=listMenu>
 <option value=''>Select State</option>
 <option value='ANDAMAN AND NICOBAR'>ANDAMAN AND NICOBAR</option>
 <option value='ANDHRA PRADESH'>ANDHRA PRADESH</option>
 <option value='ARUNACHAL PRADESH'>ARUNACHAL PRADESH</option>
 <option value='ASSAM'>ASSAM</option>
 <option value='BIHAR'>BIHAR</option>
 <option value='CHANDIGARH'>CHANDIGARH</option>
 <option value='CHATTISGARH'>CHATTISGARH</option>
 <option value='DADRA NAGAR HAVELI'>DADRA NAGAR HAVELI</option>
 <option value='DAMAN DIU'>DAMAN DIU</option>
 <option value='DELHI'>DELHI</option>
 <option value='GOA'>GOA</option>
 <option value='GUJARAT'>GUJARAT</option>
 <option value='HARYANA'>HARYANA</option>
 <option value='HIMACHAL PRADESH'>HIMACHAL PRADESH</option>
 <option value='JAMMU AND KASHMIR'>JAMMU AND KASHMIR</option>
 <option value='JHARKHAND'>JHARKHAND</option>
 <option value='KARNATAKA'>KARNATAKA</option>
 <option value='KERALA'>KERALA</option>
 <option value='LAKSHADWEEP'>LAKSHADWEEP</option>
 <option value='MADHYA PRADESH'>MADHYA PRADESH</option>
 <option value='MAHARASHTRA'>MAHARASHTRA</option>
 <option value='MANIPUR'>MANIPUR</option>
 <option value='MEGHALAYA'>MEGHALAYA</option>
 <option value='MIZORAM'>MIZORAM</option>
 <option value='NAGALAND'>NAGALAND</option>
 <option value='ORISSA'>ORISSA</option>
 <option value='PONDICHERRY'>PONDICHERRY</option>
 <option value='PUNJAB'>PUNJAB</option>
 <option value='RAJASTHAN'>RAJASTHAN</option>
 <option value='SIKKIM'>SIKKIM</option>
 <option value='TAMIL NADU'>TAMIL NADU</option>
 <option value='TRIPURA'>TRIPURA</option>
 <option value='UTTAR PRADESH'>UTTAR PRADESH</option>
 <option value='UTTARAKHAND'>UTTARAKHAND</option>
 <option value='WEST BENGAL'>WEST BENGAL</option>
 </select>

</select>
	</td></tr>
	<tr><td bgcolor = "lightblue"> District:<input type='text' name='District' Id='district'size='40'></td><td bgcolor = "lightblue">Taluka:<input type='text' name='Tal' Id='tal' size='40'></td></tr>
	<tr><td bgcolor = "lightblue">Birth Place</td></td><td bgcolor = "lightblue"><input type='text' name='Bplace' Id='bplace' size='70'>
	</td></tr>
	<tr><td bgcolor = "lightblue">Mother Tongue:</td><td bgcolor = "lightblue"><input type='text' name='Mtongue' Id='mtongue' size='70'></td></tr>
	<tr><td bgcolor = "lightblue">Five different surnames of <br>relatives or person from the <br>same caste as the applicant</td>
	<td bgcolor = "lightblue"><input type='text' name='Surnames' Id='surnames' size='70'></td>
	</tr>
	<tr><td bgcolor = "lightblue">
Mobile No. (For SMS Service</td><td bgcolor = "lightblue"><input type='text' name='Mobile' ID='mobile'></td></tr>
<tr><td bgcolor = "lightblue">Email Address :</td><td bgcolor = "lightblue"><input type='text' name='Email' Id='email' size='70'></td></tr>
<tr><td bgcolor="pink" colspan='2'><b>
<h3>Address for Correspondence</h3></b> </td></tr>
<tr><td bgcolor = "lightblue">Address</td><td bgcolor = "lightblue"><textarea name='Caddr' Id='caddr' rows='5' cols='60'></textarea></td></tr>
<tr><td bgcolor = "lightblue">Country:<input type='text' name='Ccountry' Id='ccountry'></td>
<td bgcolor = "lightblue">
state:
<select size=1 name="cstate" id=txtstate class=listMenu>
 <option value=''>Select State</option>
 <option value='ANDAMAN AND NICOBAR'>ANDAMAN AND NICOBAR</option>
 <option value='ANDHRA PRADESH'>ANDHRA PRADESH</option>
 <option value='ARUNACHAL PRADESH'>ARUNACHAL PRADESH</option>
 <option value='ASSAM'>ASSAM</option>
 <option value='BIHAR'>BIHAR</option>
 <option value='CHANDIGARH'>CHANDIGARH</option>
 <option value='CHATTISGARH'>CHATTISGARH</option>
 <option value='DADRA NAGAR HAVELI'>DADRA NAGAR HAVELI</option>
 <option value='DAMAN DIU'>DAMAN DIU</option>
 <option value='DELHI'>DELHI</option>
 <option value='GOA'>GOA</option>
 <option value='GUJARAT'>GUJARAT</option>
 <option value='HARYANA'>HARYANA</option>
 <option value='HIMACHAL PRADESH'>HIMACHAL PRADESH</option>
 <option value='JAMMU AND KASHMIR'>JAMMU AND KASHMIR</option>
 <option value='JHARKHAND'>JHARKHAND</option>
 <option value='KARNATAKA'>KARNATAKA</option>
 <option value='KERALA'>KERALA</option>
 <option value='LAKSHADWEEP'>LAKSHADWEEP</option>
 <option value='MADHYA PRADESH'>MADHYA PRADESH</option>
 <option value='MAHARASHTRA'>MAHARASHTRA</option>
 <option value='MANIPUR'>MANIPUR</option>
 <option value='MEGHALAYA'>MEGHALAYA</option>
 <option value='MIZORAM'>MIZORAM</option>
 <option value='NAGALAND'>NAGALAND</option>
 <option value='ORISSA'>ORISSA</option>
 <option value='PONDICHERRY'>PONDICHERRY</option>
 <option value='PUNJAB'>PUNJAB</option>
 <option value='RAJASTHAN'>RAJASTHAN</option>
 <option value='SIKKIM'>SIKKIM</option>
 <option value='TAMIL NADU'>TAMIL NADU</option>
 <option value='TRIPURA'>TRIPURA</option>
 <option value='UTTAR PRADESH'>UTTAR PRADESH</option>
 <option value='UTTARAKHAND'>UTTARAKHAND</option>
 <option value='WEST BENGAL'>WEST BENGAL</option>
 </select>
</td></tr>
<tr><td bgcolor = "lightblue">District:<input type='text' name='Cdistrict' Id='cdistrict' size='40'></td><td bgcolor = "lightblue">Taluka:
<input type='text' name='Ctal' Id='ctal' size='40'></td></tr>
<tr><td bgcolor = "lightblue">Pincode</td><td bgcolor = "lightblue"><input type='text' name='Pincode' Id='pincode'></td></tr>
<tr><td bgcolor="pink" colspan='2'><b><h3>Student Educational Details</h3></b></td></tr>
<tr><td bgcolor = "lightblue">District:<input type='text' name='Edistrict' Id='edistrict' size='40'></td><td bgcolor = "lightblue">Taluka:
<input type='text' name='Etal' Id='etal' size='40'></td></tr>
<tr><td bgcolor = "lightblue">Institute/ College Name:</td><td bgcolor = "lightblue"><input type='text' name='Institute' Id='instiute' size='70'>
</td></tr>
<tr><td bgcolor = "lightblue">Course Name: </td><td bgcolor = "lightblue"><input type='text' name='Course' Id='course' size='70' ></td></tr>
<tr><td bgcolor = "lightblue">Year(YYYY)</td><td bgcolor = "lightblue"><input type='text' name='Eyear' Id='eyear'></td></tr>
<tr><td bgcolor = "lightblue">Permanent Registration Number:</td><td bgcolor = "lightblue"><input type='text' name='Rno' Id='rno'></td></tr>
<tr><td bgcolor = "lightblue">Applicant's roll no:</td><td bgcolor = "lightblue"><input type='text' name='Rollno' ID='rollno'></td></tr>
<tr><td bgcolor = "lightblue">Institute address :</td><td bgcolor = "lightblue"><textarea name='Iaddr' Id='Iaddr' rows='5' cols='50'></textarea></td></tr>
<tr><td bgcolor="pink" colspan='2'><h3>Family's Details</h3></td></tr>
<tr><td bgcolor = "lightblue">Father's Name:</td><td bgcolor = "lightblue"><input type='text' name='Fname' ID='fname' size='70'></td></tr>
<tr><td bgcolor = "lightblue">Father's Date of Birth</td><td bgcolor = "lightblue"><input type='text' name='Fdob' Id='fdob' size='70'></td></tr>
<tr><td bgcolor = "lightblue">Father's Place of birth: </td><td bgcolor = "lightblue"><input type='text' name='Fbplace' Id='fbplace' size='70'></td></tr>
<tr><td bgcolor = "lightblue">Grandfather's Name:</td><td bgcolor = "lightblue"><input type='text' name='GFname' ID='gfname' size='70'></td></tr>
<tr><td bgcolor = "lightblue">Grandfather's Date of Birth</td><td bgcolor = "lightblue"><input type='text' name='GFdob' Id='gfdob' size='70'></td></tr>
<tr><td bgcolor = "lightblue">Grandfather's Place of birth: </td><td bgcolor = "lightblue"><input type='text' name='GFbplace' Id='gfbplace' size='70'></td></tr>
<tr><td bgcolor = "lightblue">Mother's Name: </td><td bgcolor = "lightblue"><input type='text' name='Mname' Id='mname' size='70'></td></tr>


<tr><td bgcolor="pink" colspan='2'> <b><h3>Migration Details</h3></b><br>If Migrated,</td></tr>
<tr><td bgcolor = "lightblue">Which State: <input type='text' name='Mistate' Id='mistate'></td><td bgcolor = "lightblue">Year:<input type='text' name='Miyear' Id='miyear'></td></tr>

<tr><td bgcolor="pink" colspan='2'><b><h3>Documents Upload</h3></b></tr>
<tr><td bgcolor = "lightblue">Name</td><td bgcolor = "lightblue">Browse</td></tr>
<tr><td bgcolor = "lightblue">1.<input type='text' name='Document1' Id='document1' size='60'></td><td bgcolor = "lightblue"><input type='file' name='DDocument1' Id='ddocument1'></td></tr>
<tr><td bgcolor = "lightblue">2.<input type='text' name='Document2' Id='document2' size='60'></td><td bgcolor = "lightblue"><input type='file' name='DDocument2' Id='ddocument2'></td></tr>
<tr><td bgcolor = "lightblue">3.<input type='text' name='Document3' Id='document3' size='60'></td><td bgcolor = "lightblue"><input type='file' name='DDocument3' Id='ddocument3'></td></tr>
<tr><td bgcolor = "lightblue">4.<input type='text' name='Document4' Id='document4' size='60'></td><td bgcolor = "lightblue"><input type='file' name='DDocument4' Id='ddocument4'></td></tr>
<tr><td bgcolor = "lightblue">5.<input type='text' name='Document5' Id='document5' size='60'></td><td bgcolor = "lightblue"><input type='file' name='DDocument5' Id='ddocument5'></td></tr>

<tr><td align='center' colspan='2'><br><br><input type='submit' name='submit' class="button" value='SUBMIT'></td></tr>
</table>
</form>
</body></html>
<?php
$mysqli =mysqli_connect("localhost","root","","province");

  $u=$_SESSION['uname'];
 
@$submit=$_POST['submit'];
if(isset($submit)){
	$name=$_POST['Aname'];
	$cno=$_POST['Cno'];
	$cdate=$_POST['Cidate'];
	$cdistrict=$_POST['District'];
	$cauthority=$_POST['Dauthority'];
	$cdocuments=$_POST['Csub'];
	$agender=$_POST['Gender'];
	$auid=$_POST['Uid'];
	$acategory=$_POST['Category'];
	$acaste=$_POST['Casteapplied'];
	$adob=$_POST['Dob'];
	$amothertongue=$_POST['Mtongue'];
	$asurnames=$_POST['Surnames'];
	$amobileno=$_POST['Mobile'];
	$aemail=$_POST['Email'];
	$caddress=$_POST['Caddr'];
	$ccountry=$_POST['Ccountry'];
	$cstate=$_POST['cstate'];
	$cdistrict1=$_POST['Cdistrict'];
	$ctaluka=$_POST['Ctal'];
	$cpincode=$_POST['Pincode'];
	$edistrict=$_POST['Edistrict'];
	$etaluka=$_POST['Etal'];
	$ecollege=$_POST['Institute'];
	$eyear=$_POST['Eyear'];
	$eregno=$_POST['Rno'];
	$erollno=$_POST['Rollno'];
	$eaddress=$_POST['Iaddr'];
	$fname=$_POST['Fname'];
	$fdob=$_POST['Fdob'];
	$fbplace=$_POST['Fbplace'];
	$gfname=$_POST['GFname'];
	$gfdob=$_POST['GFdob'];
	$gfbirthplace=$_POST['GFbplace'];
	$mothername=$_POST['Mname'];
	$mstate=$_POST['Mistate'];
	$myear=$_POST['Miyear'];
	$d1=$_POST['Document1'];
	$d2=$_POST['Document2'];
	$d3=$_POST['Document3'];
	$d4=$_POST['Document4'];
	$d5=$_POST['Document5'];
	$query="insert into caste(
	username,name,cno,cdate,cdistrict,cauthority,cdocuments,agender,auid,acategory,acaste,adob,amothertongue,asurnames,amobileno,aemail,caddress,ccountry,cstate,cdistrict1,
ctaluka,
cpincode,
edistrict,
etaluka,
ecollege,
eyear,
eregno,
erollno,
eaddress,
fname,
fdob,
fbplace,
gfname,
gfdob,
gfbirthplace,
mothername,
mstate,
myear,
d1,
d2,
d3,
d4,
d5)values('$u','$name','$cno','$cdate','$cdistrict','$cauthority','$cdocuments','$agender','$auid','$acategory','$acaste','$adob',
'$amothertongue','$asurnames','$amobileno','$aemail','$caddress','$ccountry','$cstate','$cdistrict1',
'$ctaluka',
'$cpincode',
'$edistrict',
'$etaluka',
'$ecollege',
'$eyear',
'$eregno',
'$erollno',
'$eaddress',
'$fname',
'$fdob',
'$fbplace',
'$gfname',
'$gfdob',
'$gfbirthplace',
'$mothername',
'$mstate',
'$myear',
'$d1',
'$d2',
'$d3',
'$d4',
'$d5')";
if(mysqli_query($mysqli,$query))
	echo "<script>window.alert('Processing Certificate')</script>";
	echo "<script>window.location='Certificate_requested_success.html'</script>";
}
?>