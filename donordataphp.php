<?php
$pno=$_POST['pno'];
        $dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='savelife';

	$conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);

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
			if((strcmp($pno,$row["phoneno"])==0))
			{
        			$f=true;
				echo "FirstName: " . $row["fn"] ."<br>". "LastName: " . $row["ln"] ."<br>". " Gender:" . $row["gender"]."<br>"."age:" . $row["age"]."<br>"."blood group:" . $row["bloodgroup"]."<br>"."phone no" . $row["phoneno"]."<br>". "Email: " . $row["email"] ."<br>". "Passward: " . $row["pass"] ."<br>". "district: ". $row["dist"]."<br>"."able to help anywhere:". $row["able"];
    			
    			}
	
		}
		if($f==false)
			echo("error in fetching your details!");
		$conn->close();
	}
?>


