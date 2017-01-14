<?php


		$host="localhost";
		$username="root";
		$password="";
		$database="registration";
							
		mysql_connect($host,$username,$password);
		@mysql_select_db($database) or die( "Unable to select database");
?>