<?php

    	$db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "sparksfoundation";

// Create connection
        $conn = mysqli_connect($db_host , 'root' ,'', 'sparksfoundation' );

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>