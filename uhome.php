
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$uid=$_SESSION['uid'];
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
  <li><a class="active" href="uhome.php"><strong>User Home</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="view.php"><strong>View Booking</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>LogOut</a></li>
</ul>

<br />
<br />
<div id="bg1" style="color:black;">Cab Service System</div>


<table width="98%" align="center">

<tr>
		<td colspan="10" align="center"><strong>Book Your favorite Car For Rent</strong></td>
  </tr>

	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="1%">&nbsp;</td>
          <td width="7%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		    <td width="7%"><div align="center" class="style6"><strong>Car Image</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Car Name</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Year</strong> </div></td>
		    <td width="11%"><div align="center" class="style6"><strong>Model</strong> </div></td>
			  <td width="9%"><div align="center" class="style6"><strong>Rent Amount(per day)</strong> </div></td>
			   <td width="10%"><div align="center" class="style6"><strong>Car Number</strong> </div></td>
			     <td width="10%"><div align="center" class="style6"><strong>Action</strong> </div></td>
				  </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from bikes");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		?>

        <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
			 <td><div align="center"><img src="upload\<?php echo $row['img'];?>" width="150" height="150"></div></td>
		   <td><div align="center"><?php echo $row['name'];?></div></td>
			  <td><div align="center"><?php echo $row['year'];?></div></td>
			   <td><div align="center"><?php echo $row['model'];?></div></td>
				 <td><div align="center"><?php echo $row['amnt'];?></div></td>
				  <td><div align="center"><?php echo $row['biken'];?></div></td>
				   <td><div align="center"><a href="book.php?id=<?php echo $row['id'];?>&amnt=<?php echo $row['amnt'];?>">Book Car</a></div></td>
				  

		 
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