<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	 $uid=$_SESSION['uid'];
 $bid=$_REQUEST['id'];
 $amnt=$_REQUEST['amnt'];
	


	
extract($_POST);	
if(isset($_POST['btn']))
{

$qt=mysqli_query($conn,"select * from book where bid='$bid' && frm='$frm'");
$num=mysqli_num_rows($qt);
if($num>=1)
{

echo  '<script>alert("Choose Another Day The Bike Is Already Booked In That Day")</script>'; 


}

else
{

extract($_POST);
$start_date = strtotime($frm); 
$end_date = strtotime($to);

   echo $dt=($end_date - $start_date)/60/60/24; 


$amount=$amnt*$dt;

$file_name=$_FILES['img']['name'];  
$file_loc=$_FILES['img']['tmp_name'];
$folder = "upload/";   

$path=move_uploaded_file($file_loc,$folder.$file_name);

$file_name1=$_FILES['img1']['name'];  
$file_loc1=$_FILES['img1']['tmp_name'];
$folder = "upload/";   

$path1=move_uploaded_file($file_loc1,$folder.$file_name1);





   
   
   

if($path){


$qry=mysqli_query($conn,"insert into book values('','$uid','$bid','$frm','$to','$amount','$file_name','','$file_name1')");
	if($qry)
	{
	
	echo "<script>alert('inserted sucessfully')</script>";
	header("location:payment.php?id=".$bid."&amnt=".$amount);
	}
	else
	{
	
	
		echo "failed";
	}
	
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
  <li><a  href="uhome.php"><strong>User Home</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="view.php"><strong>View Booking</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>LogOut</a></li>
</ul>

<br />
<br />
<div id="bg1">Car Rental System</div>




<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()" enctype="multipart/form-data">
  <table width="39%" height="228" border="0" align="center">
		

	
    <tr>
    
      
      <td height="42" colspan="2"  align="center" ><div class="style5"><h3>Book The Car</h3></div></td>
    
    </tr>
	
	
	
	
	
	
	
    <tr>
    
      <td height="60">From Date</td>
      <td><label>
        <input name="frm" type="date" id="frm" />
      </label></td>
     
    </tr>
	
	
	
    <tr>
    
      <td height="56">To Date</td>
      <td><label>
        <input name="to" type="date" id="to" />
      </label></td>
     
    </tr>
	
    
	
	  <tr>
    
      <td height="56">Upload Your License</td>
      <td><label>
        <input name="img" type="file" />
      </label></td>
     
    </tr>

	 <tr>
    
      <td height="56">Upload Your Proof</td>
      <td><label>
        <input name="img1" type="file" />
      </label></td>
     
    </tr>
	
	
	
	
	<tr>
       <td height="60">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Enter" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>






<div id="footer"> <p>copyrights & designedby@Adharan</p>
</div>