
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
		$rs=$conn->query("select * from savelifedonations;");
		while($row=$rs->fetch_assoc())
		{
        			$f=true;
				echo "Date: " . $row["date"] ."<br>". "Location: " . $row["loc"] ."<br>". " No.of units:" . $row["units"]."<br>". "Other Details: " . $row["other"] ."<br>"."<br>";    			
    		}
	
		$conn->close();
	}
?>


