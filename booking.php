<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	
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
  <li><a  href="adminhome.php"><strong>Admin Home</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a class="active" href="booking.php"><strong>Booking Details</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="viewu.php"><strong>User Details</a></li>
   <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>LogOut</a></li>
</ul>

<br />
<br />
<div id="bg1">Car Rental System</div>



<table width="98%" align="center">

<tr>
		<td colspan="10" align="center"><h2>View Your Booking Status</h2></td>
  </tr>

	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="1%">&nbsp;</td>
          <td width="7%"><div align="center" class="style6"><strong>Booking Id</strong> </div></td>
		     <td width="11%"><div align="center" class="style6"><strong>Car Name</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Version</strong> </div></td>
		    <td width="11%"><div align="center" class="style6"><strong>From</strong> </div></td>
			  <td width="9%"><div align="center" class="style6"><strong>To</strong> </div></td>
			   <td width="10%"><div align="center" class="style6"><strong>Amount</strong> </div></td>
			     <td width="10%"><div align="center" class="style6"><strong>License</strong> </div></td>
				  <td width="10%"><div align="center" class="style6"><strong>Name</strong> </div></td>
				   <td width="10%"><div align="center" class="style6"><strong>Contact No</strong> </div></td>
				    <td width="10%"><div align="center" class="style6"><strong>Address</strong> </div></td>
					 <td width="10%"><div align="center" class="style6"><strong>Proof</strong> </div></td>
				  </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from book ");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		$bid=$row['bid'];
		$uid=$row['uid'];
		$qry1=mysqli_query($conn,"select * from bikes where id='$bid'");
		$row1=mysqli_fetch_array($qry1);
		$qry2=mysqli_query($conn,"select * from register where id='$uid'");
		$row2=mysqli_fetch_array($qry2);
		?>

        <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		  <td><div align="center"><?php echo $row1['name'];?></div></td>
		     <td><div align="center"><?php echo $row1['model'];?></div></td>
			  <td><div align="center"><?php echo $row['frm'];?></div></td>
			   <td><div align="center"><?php echo $row['to'];?></div></td>
			   <td><div align="center"><?php echo $row['amount'];?></div></td>
				 <td><div align="center"><img src="upload\<?php echo $row['license'];?>"  width="100" height="100"/></div></td>
				<td><div align="center"><?php echo $row2['name'];?></div></td>
				<td><div align="center"><?php echo $row2['phone'];?></div></td>
				<td><div align="center"><?php echo $row2['address'];?></div></td>
				   		 				  <td><div align="center"><img src="upload\<?php echo $row['proof'];?>" width="100" height="100"></div></td>
        </tr>
		
		
		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
		}
		?>
				<tr>

		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
</table>






<div id="footer"> <p>copyrights & designedby@Adharan</p>
</div>