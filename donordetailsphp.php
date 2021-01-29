
<?php

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
				echo "FirstName: " . $row["fn"] ."<br>". "LastName: " . $row["ln"] ."<br>". " Gender:" . $row["gender"]."<br>"."age:" . $row["age"]."<br>"."blood group:" . $row["bloodgroup"]."<br>"."phone no" . $row["phoneno"]."<br>". "Email: " . $row["email"] ."<br>". "Passward: " . $row["pass"] ."<br>". "district: ". $row["dist"]."<br>"."able to help anywhere:". $row["able"];
    		}
		$conn->close();
	}
?>


