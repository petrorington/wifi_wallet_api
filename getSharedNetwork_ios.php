<?php
//Get Shared Friends with this wid
include "connection.php";

	
        $wid = $_POST["fid"];
    
$sql1 = mysql_query("Select user_id,username,pic from users where user_id in (Select user_id from shared_networks where wid like '$wid') order by username");

while($row = mysql_fetch_array($sql1))
{
	$output[] = $row;
}

print(json_encode($output));
    	
mysql_close($con);
?>