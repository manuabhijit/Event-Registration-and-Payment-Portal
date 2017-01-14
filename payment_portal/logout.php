<?php

// logs you out
	session_start();
	
	unset($_SESSION['register']);
	
	$header="Location: index.php";
	header($header);

?>