<?php
	$phoneno=$_POST['pno'];
	$date=$_POST['date'];
	$loc=$_POST['loc'];
	$units=$_POST['units'];
	$other=$_POST['other'];
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='savelife';

	$conn=new mysqli("$dbhost","$dbuser","$dbpass","$dbname");
	if(mysqli_connect_error())
	{
		die("connection failed");
	}
	else
	{
		$qry="INSERT into savelifedonations values('$date','$loc','$units','$other','$phoneno')";
		
		if($conn->query($qry))
		{
			echo " 1 row effected";
		}
		else
			echo "record cannot be saved".$conn->error;
	$conn->close();
	}

?>
