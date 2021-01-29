<?php
session_start();
?>


<?php
$pno=$_POST['pno'];
$pass=$_POST['pass'];
        $dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='savelife';

        $_SESSION['upno']=$pno;
 
	$conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);

	$f=false;

	if(mysqli_connect_error())
	{
		die("connection failed");
	}

	else
	{
		$rs=$conn->query("select * from savelifeadmin;");
		while($row=$rs->fetch_assoc())
		{
			if((strcmp($pno,$row["phoneno"])==0) and (strcmp($pass,$row["pass"])==0))
			{
        			$f=true;
				header("Location:adminpage.html");
        			exit();
    			
    			}

		
			
		}
		if($f==false)
			echo("you not yet register as a donor or you entered something wrong please try again..!");
		$conn->close();

	}
?>