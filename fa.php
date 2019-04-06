<?php
$con =mysqli_connect("localhost","root","","financial_account");
if(mysqli_connect_errno()) {
	echo "failed to connect".mysqli_connect_errno();
}

//$query =mysqli_query($con,"INSERT INTO test VALUES('','AHMED')");
?>


<!DOCTYPE html>
<html>
<head>
	<title>ahmed</title>
	<link rel="stylesheet" type="text/css" href="fa.css">
</head>
<body>
<table  border="1" width="100%"  >
		<tr>
			<th>Date</th>
			<th>A/C</th>
			<th>Debit</th>
			<th>Credit</th>
			<th>Type</th>
			<th>Id</th>
		</tr>
		<tr >
			<td>
				<input id="Date"type="text" name="" required="">
			</td>
			<td>
				<input type="text" name="" required=""><br><br>
				<input id="entry2" type="text" name="" required="">

				
			</td>
			<td>
				<input id="debit" type="text" name="" required="">
				
			</td>
			<td>
				<br>
				<input id="credit" type="text" name="" required="" >
				
			</td>
			<td>
				<input type="text" name="" required=""><br><br>
				<input id="entry2" type="text" name="" required="">

				
			</td>
			<td>
				<input type="text" name="" required=""><br><br>
				<input id="entry2" type="text" name="" required="">

			</td>



		</tr>
		
	</table>

</body>
</html>