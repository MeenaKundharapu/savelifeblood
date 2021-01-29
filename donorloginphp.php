<?php
session_start();
echo($_SESSION['logged_in']);
if (!isset($_SESSION['logged_in'])) {
$pno=$_POST['pno'];
$pass=$_POST['pass'];
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
			if((strcmp($pno,$row["phoneno"])==0) and (strcmp($pass,$row["pass"])==0))
			{
        			$f=true;
				$_SESSION["logged_in"]=$pno;
				header("Location:donorpage.html");
        			exit();
    			
    			}

		
			
		}
		if($f==false)
			echo("you not yet register as a donor or you entered something wrong please try again..!");
		$conn->close();

	}
}
?>