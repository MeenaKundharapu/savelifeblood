<?php
	$dist=$_POST['dist'];
	$bloodgroup=$_POST['bg'];
	$pno=$_POST['pno'];
        $dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='savelife';

	$subject="NEED BLOOD from SAVE LIFE";
	$msg="please contact to this no".$pno;
	$conn=new mysqli("$dbhost","$dbuser","$dbpass","$dbname");
	
	$f=false;

	if(mysqli_connect_error())
	{
		die("connection failed");
	}
	else

	{
		$rs=$conn->query("select * from savelifedonor;");
		while($row=$rs->fetch_assoc())
		{
                     if(strcmp($bloodgroup,$row["bloodgroup"])==0)
			{
			if((strcmp($dist,$row["dist"])==0) or ($row["able"]=="yes"))
			{
        			echo "FirstName: " . $row["fn"] ."<br>". "LastName: " . $row["ln"] ."<br>". " Gender:" . $row["gender"]."<br>". "age:". $row["age"]."<br>". "blood group:" . $row["bloodgroup"]."<br>"."phone no" . $row["phoneno"]."<br>". "Email: " . $row["email"]."<br>". "district: ". $row["dist"]."<br>";
				
				mail($row["email"],$subject,$msg);
    
			}
			}
		}
		
	}
        $conn->close();
?>