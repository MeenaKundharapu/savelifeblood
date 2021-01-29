<?php
	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$gender=$_POST['g'];
	$able=$_POST['able'];
	$age=$_POST['age'];
	$pno=$_POST['pno'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$dist=$_POST['dist'];
	$bloodgroup=$_POST['bg'];

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
		$qry = "UPDATE savelifedonor SET fn='$fn', ln='$ln', gender='$gender', age='$age', bloodgroup='$bloodgroup', phoneno='$pno', email='$email', pass='$pass', dist='$dist', able='$able' WHERE phoneno=$pno ";

		if ($conn->query($qry) === TRUE) {
		    echo "your profile is  successfully updated";
		}
		 else {
    		    echo "Error in updating your profile please try again later " ;
		} 

	}
?>