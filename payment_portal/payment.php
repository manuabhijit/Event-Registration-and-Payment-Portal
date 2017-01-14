<?php

	session_start();
	require('../addons/connectivity/connect.php');
	$count = 0;
	if(!isset($_SESSION['register']))
	{
		if(!isset($_POST['name']) || !isset($_POST['password']) )
		{
			$header="Location: index.php";
			header($header);
		}
		
		require('../addons/product_functions/password_hashing.php');
	
		$query="select * from registrar where 1";
		$run=mysql_query($query);
		
		while ($row=mysql_fetch_assoc($run))
		{
			if($row['r_id']==$_POST['name'])
			{
				if(	hash_compare(hash_value($_POST['password']),$row['r_password']) == true)
				{
					if(!isset($_SESSION['register']))
					{
						$_SESSION['register']=$row['r_id'];
						break;
					}
				}
			}
		}
		
		$header="Location: index.php";
		header($header);
	}
?>

<html>
	<head>
		
	</head>
	<body>
	
		<h1>Welcome <?php echo $_SESSION['register']; ?></h1>
		
		Enter your password <input id="password" type="password" name="password" value="pass1" placeholder="password" > </input>
		</br></br>
		<input id="search_test" type="text" placeholder="Search by email id..." > </input></br></br>
		<a href="logout.php" >Logout</a>
		
		
	<?php
	echo "<table border=\"1\" width=\"100%\">";
	
	$query="SELECT student.s_name, student.s_email, events.event_name, events.event_cost,events.event_id
			FROM student
			INNER JOIN events
			ON  student.s_event_id = events.event_id";
						
	$run=mysql_query($query);
	
	echo "<thead>";
			echo "<th>Name</th> <th>Email</th> <th>Event</th> <th>Cost</th> <th>Payment</th>";
	echo "</thead>";
	
	
	while ($row=mysql_fetch_assoc($run))
	{
		$query="select * from transactions where transactions.student_email='".$row['s_email']."' AND transactions.event_id='".$row['event_id']."'";
		$run_2=mysql_query($query);
			
		if(mysql_num_rows($run_2)>=1) continue;
			
		$count++;
		echo $count%2==0?"\n<tr class=\"alt\" id=\"row_$count\">":"\n<tr id=\"row_$count\" >";
			echo "\n\t<td id=\"row_".$count."_1\">".$row['s_name']."</td>";
			echo "\n\t<td id=\"row_".$count."_2\">".$row['s_email']."</td>";
			echo "\n\t<td id=\"row_".$count."_3\">".$row['event_name']."</td>";
			echo "\n\t<td id=\"row_".$count."_4\">".$row['event_cost']."</td>";
			echo "\n\t<td><button onclick=\"pay('".$row['s_email']."','".$row['event_id']."','row_$count')\"> Click to Pay</button></td>";
		echo "\n</tr>";
	}
	
	?>
	
	
	</body>
	
	<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
	<script>
		function pay(email,event_id,row_id) {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						var reply = xmlhttp.responseText;
						console.log(reply);
						
						if(reply == "Transaction Success")
						{
							
							$("#"+row_id).fadeOut(300, function() { $("#"+row_id).remove(); });
						}
					}
				};
				xmlhttp.open("GET", "check.php?email="+ email + "&event_id=" + event_id, true);
				xmlhttp.send();
			}
		
		
		
		</script>
	<script>
	
		$(document).ready(function() {
	
			$("#search_test").keyup(function(){
				
				for(i = 1; i <= <?php echo $count; ?>; i++) { 
					
					var string = $("#row_"+i+"_2").text();
					var substring = $(this).val();
					
					if(string.includes(substring)===false)
						$("#row_"+i).fadeOut();
					else
						$("#row_"+i).fadeIn();
					
					//console.log(i+ " " + string + "  " + substring + " " + string.includes(substring));
				}		
			});
		});	
	</script>
</html>

