<?php
	 
	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$gender=$_POST['g'];
	$able=$_POST['able'];
	$age=$_POST['age'];
	$phoneno=$_POST['pno'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$dist=$_POST['dist'];
	$bloodgroup =$_POST['bg'];


	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='savelife';

	$conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if(mysqli_connect_error())
	{
		die("connection failed");
	}
	else
	{
		$qry="INSERT into savelifedonor(fn,ln,gender,age,bloodgroup,phoneno,email,pass,dist,able) values('$fn','$ln','$gender','$age','$bloodgroup','$phoneno','$email','$pass','$dist','$able')";
		
		if($conn->query($qry))
		{
			echo " you registered successfully!";
		}
		else
			echo "record cannot be inserted".$conn->error;
	$conn->close();
	}

?>
