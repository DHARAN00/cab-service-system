<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
$file_name=$_FILES['img']['name'];  
$file_loc=$_FILES['img']['tmp_name'];
$folder = "upload/";   

$path=move_uploaded_file($file_loc,$folder.$file_name);




$qry=mysqli_query($conn,"insert into bikes values('','$name','$year','$model','$amnt','$biken','$file_name')");
	if($qry)
	{
	
	echo "<script>alert('inserted sucessfully')</script>";
	
	}
	else
	{
	
	
		echo "failed";
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
  <li><a class="active" href="adminhome.php"><strong>Admin Home</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="booking.php"><strong>Booking Details</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="viewu.php"><strong>User Details</a></li>
   <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>LogOut</a></li>
</ul>

<br />
<br />
<div id="bg1" style="color:black;">Cab Service System</div>


<form id="f1" name="f1" method="post" action="#" enctype="multipart/form-data">
  <table width="39%" height="438" border="0" align="center">
		

	
    <tr>
    
      
      <td height="42" colspan="2"  align="center" ><div class="style5"><h3>Enter Rental Car Details</h3></div></td>
    
    </tr>
	
	
	
	
	
	
	
    <tr>
    
      <td height="54">Car Name</td>
      <td><label>
        <input name="name" type="text" id="name" required/>
      </label></td>
     
    </tr>
	
	
	
    <tr>
       <td height="47">Year</td>
      <td><input name="year" type="text" id="year"  required/></td>
      
    </tr>
	
	  <tr>
       <td height="41">Model</td>
      <td><input name="model" type="text" id="model"  required /></td>
     
    </tr>
	
	
	
	
	<tr>
      <td height="45">Rent Amount(per day)</td>
      <td><input type="text" name="amnt" id="amnt" required></td>
     
    </tr>
	
	
    <tr>
   
      <td height="51">Car Number</td>
      <td><input name="biken" type="text" id="biken" required/></td>
      
    </tr>
	
	
	
	
	
    <tr>
    
      <td height="41">Car Image</td>
      <td><input name="img" type="file" id="img" required/></td>
   
    </tr>
	
	
	<tr>
       <td height="55">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>











<div id="footer"> <p>copyrights & designedby@Adharan</p>
</div>