
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();




if(isset($_POST['btn']))
{

$qry1=mysqli_query($conn,"select * from register where uname='$uname'");
$count=mysqli_num_rows($qry1);
if($count>0){                                                                                           
echo "<script>alert('username already taken')</script>";
}else{



$qry=mysqli_query($conn,"insert into register values('','$name','$gender','$age','$email','$phone','$loc','$address','$uname','$psw')");
	if($qry)
	{
	
	echo "<script>alert('inserted sucessfully')</script>";
	
	}

	}
	
}

?>


<html>
<title>Car Portal</title>
<style>

p
{
	color:#ffffff;
	text-align: center;
	text-transform: uppercase;
	 font-size:15px;
}

ul {
	padding:30px;
	
  list-style-type: none;
  overflow: hidden;  background:#2874F0;
   background-repeat: no-repeat;
   background-size: 1420px  200px;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
   border-radius:0px;
}

li {
  float: left;
}

li a {
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover { background-color: #000;
}

.active { background-color: #000;
}

#footer {
   padding: 30px;  background:black;
  background-repeat: no-repeat;
  background-size: 1420px  100px;
  border-radius:10px;
  text-align:center;
  text-decoration:blink;
   font-family: Arial;
   font-size:15px;
}
#bg1 {

  padding:150px;  background:url("images/download.jpg");
  background-repeat: no-repeat;
  background-size: 1420px  300px;
  border-radius:5px;
   border-radius:10px;
    text-align:left;
   font-size:30px;
   color:#ffffff;
}

</style>
</head>
<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a  href="index.php"><strong>Home Page</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="admin.php"><strong>Admin login</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="user.php"><strong>User login</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a class="active" href="register.php"><strong>New User</a></li>
 
</ul>

<br />
<br />
<div id="bg1" style="color:black;">Cab Service System</div>







<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="39%" height="505" border="0" align="center">
		

	
    <tr>
    
      
      <td height="42" colspan="2"  align="center" ><div class="style5"><h3>New User Registation</h></div></td>
    
    </tr>
	
	
	
	
	
	
	
    <tr>
    
      <td height="47">Name</td>
      <td><label>
        <input name="name" type="text" id="name"  required pattern="[A-Za-z ]{3,32}" />
      </label></td>
     
    </tr>
	
	
	
	
    <tr>
      
      <td height="37">Gender</td>
      <td><input name="gender" type="radio" value="male" required />
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
      
    </tr>
	
	
	
    <tr>
     
      <td height="42">Age</td>
      <td><label>
        <input name="age" type="text" id="age" required/>
      </label></td>
    
    </tr>
	
	
	
	
	
    <tr>
       <td height="47">Email Id</td>
      <td><input name="email" type="email" id="email"  required/></td>
      
    </tr>
	
	  <tr>
       <td height="41">Phone Number</td>
      <td><input name="phone" type="text" id="phone"  required size="10" pattern="[6789][0-9]{9}" /></td>
     
    </tr>
	
	
	
	
	<tr>
      <td height="38">Location</td>
      <td><input type="text" name="loc" id="loc" required></td>
     
    </tr>
	
	
	
	
	   <tr>
       <td height="61">Address</td>
      <td><textarea name="address" id="address" required></textarea></td>
     
    </tr>
	
	
	
	

    <tr>
   
      <td height="45">User Name</td>
      <td><input name="uname" type="text" id="uname" required /></td>
      
    </tr>
	
	
	
	
	
    <tr>
    
      <td height="41">Passwrod</td>
      <td><input name="psw" type="password" id="psw" required /></td>
   
    </tr>
	
	
	<tr>
       <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>



<div id="footer"> <p>copyrights & designedby@Adharan</p>
</div>