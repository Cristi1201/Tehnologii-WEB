<?php
	function conexiune($servername, $username, $pass, $nameDB) {
		$server = $servername;
	    $user = $username;
	    $password = $pass;
	    $DB = $nameDB;
	    
	    return mysqli_connect($server, $user, $password, $DB);
	}
?>