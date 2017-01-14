<?php 
	
	/*
		About File: This file takes the data from the serialized object and database entry.
	*/
	
	
	session_start();
	if (!$_SESSION['transfer']) // if someone jumps directly he is redirected back
	{
		unset($_SESSION['transfer']);
		//session_destroy();
		header("Location:index.php");
	}
		
		require('../addons/connectivity/connect.php');		
		require('../addons/product_classes/personal_profile.php');
		$form_data = unserialize($_SESSION["transfer"]);
		
		$query="select * from student where 
				student.s_event_id='".$form_data->event_data['event_id']."' AND student.s_email= '".$form_data->email."'";
		$run=mysql_query($query);
		
		if(mysql_num_rows($run)!=0)
		{
			// Already Registed
			$header="Location: index.php?error=error in form submittion. Already Registered";
			unset($_SESSION['transfer']);
			//session_destroy();
			header($header);
		}
		else
		{
			// makes a sample entry
			mysql_query	("
						INSERT INTO student
						(	s_name,s_id,s_email,s_gender,s_college,s_event_id,
							s_player_1,
							s_phone) 
						VALUES
						(	'$form_data->name','$form_data->id','$form_data->email','$form_data->gender','$form_data->college','".$form_data->event_data['event_id']."',
							'".$form_data->event_players[0]."',
							'$form_data->phone'
						)
						") or die (mysql_error());
			
			// updates team members if any
			for($loop=2;$loop<=$form_data->event_data['event_players'];$loop++)
			{
				mysql_query ("
								UPDATE student SET s_player_".$loop." = '".$form_data->event_players[$loop-1]."' where 
								student.s_event_id='".$form_data->event_data['event_id']."' AND student.s_email= '".$form_data->email."'
							");
			}
			
			$header="Location: index.php?success=Form Submitted Successfully";
			unset($_SESSION['transfer']);
			//session_destroy();
			header($header);
			
		}		
?>
			