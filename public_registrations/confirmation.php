<?php
	
	/*
		About File: This file takes the data from the form via post method and moves it over for database entry.
		
		Points to be noted
		
		Step 1: Validation of Data uses require "validator.php"
		Step 2: On Success Condition moves data to "submit.php" using class from "personal_profile.php"

	*/
	
	
	session_start();
	$_SESSION["transfer"] = NULL;

	require('../addons/product_functions/validator.php');
	$error_message=NULL;
	$name=NULL;
	$gender=NULL;
	$email=NULL;
	$college=NULL;
	$event_data=NULL;
	$event_players=NULL;
	$phone=NULL;
	$id=NULL;
	
	if (isset($_POST['name']))
	{
		$v_name = v_name($_POST['name']); // validation of name
		if($v_name[0] == false)
		{	
			$name=$v_name[1]; 
		}
		else
		{	
			$error_message = $v_name[0];
			goto error_msg_jump; 
		}
	}
	else
	{
		$error_message = "Required field Name was not set.";
		goto error_msg_jump;
	}
	
	if (isset($_POST['gender']))
	{
		$v_gender = v_gender($_POST['gender']); // validation of gender
		if($v_gender[0] == false)
		{	
			$gender=$v_gender[1]; 
		}
		else
		{	
			$error_message = $v_gender[0];
			goto error_msg_jump;
		}
	}
	else
	{
		$error_message = "Required field Gender was not set.";
		goto error_msg_jump;
	}
		
	if (isset($_POST['email']))
	{
		$v_email = v_email($_POST['email']); // validation of email
		if($v_email[0] == false)
		{	
			$email=$v_email[1]; 
		}
		else
		{	
			$error_message = $v_email[0];
			goto error_msg_jump;
		}
	}
	else
	{
		$error_message = "Required field email was not set.";
		goto error_msg_jump;
	}
	
	if (isset($_POST['college'])) // Validation of College name
	{
		if($_POST['college'] == "JUIT")  // this should be change as pree need
		{
			$college="Jaypee University of Information Technology, Waknaghat";
		}
		else if ($_POST['college'] == "other")
		{
			if (isset($_POST['other_institute']))
			{
				$college_name = v_name($_POST['other_institute']); // validation of name
				if($college_name[0] == false)
				{	
					$college=$college_name[1]; 
				}
				else
				{	
					$error_message = $college_name[0];
					goto error_msg_jump;
				}
			}
			else
			{
				$error_message = "Required field College Name was not set.";
				goto error_msg_jump;
			}
		}
		else
		{
			$error_message = "Unknown College.";
			goto error_msg_jump;
		}
	}
	else
	{
		$error_message = "Required field College Name was not set properly.";
		goto error_msg_jump;
	}
	
	
	if (isset($_POST['event']))  // // validation of event ID
	{
		require('../addons/connectivity/connect.php');
		$query="select * from events where events.event_id='".$_POST['event']."'";
		$run=mysql_query($query);
		
		if(mysql_num_rows($run)!=1)
		{
			$error_message = "Unknown Event";
			goto error_msg_jump;
		}
		else
		{
			$event_data=mysql_fetch_assoc($run);
		}
	}
	else
	{
		$error_message = "Required field Event Name was not set properly.";
		goto error_msg_jump;
	}
	
	$event_players= array($name);
	
	for($loop=2;$loop<=$event_data['event_players'];$loop++) // validation of team members
	{
		$field_name="team_member_".$loop;
		if (isset($_POST[$field_name]))
		{
			$v_name = v_name($_POST[$field_name]); // validation of name
			if($v_name[0] == false)
			{	
				array_push($event_players, $v_name[1]); 
			}
			else
			{	
				$error_message = $v_name[0];
				goto error_msg_jump;
			}
		}
		else
		{
			$error_message = "Required field Team Member Name was not set.";
			goto error_msg_jump;
		}
	}
	
	if (isset($_POST['phone']))
	{
		$v_phone = v_phone($_POST['phone']); // validation of 10 didit phone number
		if($v_name[0] == false)
		{	
			$phone=$v_phone[1]; 
		}
		else
		{	
			$error_message = $v_phone[0];
			goto error_msg_jump;
		}
	}
	else
	{
		$error_message = "Required field Name was not set.";
		goto error_msg_jump;
	}
	
	if (isset($_POST['id'])) // no validation for ID
	{
		$id=$_POST['id']; 
	}
	else
	{
		$error_message = "Required field ID was not set.";
		goto error_msg_jump;
	}
	
	error_msg_jump:
	echo $error_message."</br>";
	
	if($name!=NULL && $gender!=NULL && $email!=NULL && $college!=NULL && $event_data!=NULL && $event_players!=NULL && $phone!=NULL && $id!=NULL)
	{	
		//Success Condition
		require_once('../addons/product_classes/personal_profile.php');
		
		$transfer= new profile();
		
		$transfer->name = $name;
		$transfer->gender = $gender;
		$transfer->email = $email;
		$transfer->college = $college;
		$transfer->phone = $phone;
		$transfer->id = $id;
		$transfer->event_data = $event_data;
		$transfer->event_players = $event_players;
		
		$_SESSION["transfer"]=serialize($transfer);
		
		$header="Location: submit.php";
		header($header);
	}
	else
	{
		// Failure Condition
		unset($_SESSION['transfer']);
		$header="Location: index.php?error=".$error_message;
		header($header);	
	}
	
		
?>
