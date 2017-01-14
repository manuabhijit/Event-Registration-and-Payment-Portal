<?php

	function v_name($argument)
	{
		if (!preg_match("/^[a-zA-Z ]*$/",$argument)) {
		  $error = "Only letters and white space allowed as separator."; 
		  $data = NULL;
		}
		else if($argument[0] == " ")
		{
			$error = "Only letters and white space allowed as separator."; 
			$data = NULL;
		}
		else if(strpos($argument, "  ") != false)
		{
			$error = "Only letters and white space allowed as separator."; 
			$data = NULL;
		}
		else
		{
			$error = false; 
			$data = chop($argument);
		}
		return array($error, $data);
	}
	
	function v_gender($argument)
	{
		$argument=strtolower($argument);
		$gender = array('male', 'female', 'other');
		
		if (in_array($argument, $gender)) 
		{
			$error = false; 
			$data = $argument;
		}
		else
		{
			$error = "Unknown gender"; 
			$data = NULL;
		}
		return array($error, $data);
	}
	
	function v_email($argument)
	{
		
		if (!filter_var($argument, FILTER_VALIDATE_EMAIL) === false) 
		{
			
			$error = false; 
			$data = $argument;
		} 
		else 
		{
			$error = "Email is not a valid email address"; 
			$data = NULL;
		}
		return array($error, $data);	
	}
		
	function v_phone($argument)
	{
		if(ctype_digit($argument)==true && strlen($argument)==10)
		{
			$error = false; 
			$data = $argument;
		}
		else 
		{
			$error = "Mobile number is Invalid"; 
			$data = NULL;
		}
		return array($error, $data);	
	}
		
?>