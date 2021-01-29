<?php
	
	$pno=$_POST['pno'];
	$cupass=$_POST['cupass'];
	$chpass=$_POST['chpass'];
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
		$rs=$conn->query("select * from savelifedonor;");
		while($row=$rs->fetch_assoc())
		{
			if((strcmp($cupass,$row["pass"])==0) and (strcmp($pno,$row["phoneno"])==0))
			{
        			$qry = "UPDATE savelifedonor SET pass='$chpass' where phoneno='$pno'";

				if ($conn->query($qry)===TRUE) 
                		{
		    			echo "password changed successfully";
				}
		 		else 
				{
    		    			echo "Error in changing password please try again later " ;
				}
        		}			
		
			
		}
	

	}
        $conn->close();
?>











 