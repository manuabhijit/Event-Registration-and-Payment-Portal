<?php 

		session_start();
		if(!isset($_SESSION['register']))
		{
			echo "No registrar logged in";
		}
		else if (	isset($_GET['email']) && isset($_GET['event_id'])	)
		{
			require('../addons/connectivity/connect.php');
			require('../addons/product_functions/password_hashing.php');
			
			$query="select * from transactions where transactions.student_email='".$_GET['email']."' AND transactions.event_id='".$_GET['event_id']."'";
			$run=mysql_query($query);
			
			if(mysql_num_rows($run)==1)
			{
				echo "Transaction Already Done";	
			}
			else if(mysql_num_rows($run)>1)
			{
				echo "Transaction Error";
			}
			else
			{
				mysql_query	("
						INSERT INTO transactions
						(	registrar_id,student_email,event_id) 
						VALUES
						(	'".$_SESSION['register']."','".$_GET['email']."','".$_GET['event_id']."'	)
						") or die (mysql_error());
				echo "Transaction Success";
			}
			
		}
		else
		{
			echo "Unknown error";
		}
		
		
			
?>