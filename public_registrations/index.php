<html>
	<head>
		<title>Register Portal</title>
		<style>
			body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td{margin:0;padding:0}html,body{margin:0;padding:0;height:100%}table{border-collapse:collapse;border-spacing:0}img{border:0}address,caption,cite,code,dfn,th,var{font-style:normal;font-weight:400}ol,ul{list-style:none}caption,th{text-align:left}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:400}header{display:block}body{font-family:Cambria,Palatino,"Palatino Linotype","Palatino LT STD",Georgia,serif;background:url(../assets/images/bgnoise_lg.png);font-weight:400;font-size:15px;color:#3a2127;overflow-y:scroll}a{color:#333;text-decoration:none}.container{width:100%;height:100%;position:relative}.clr{clear:both}.container > header{padding:20px 30px;margin:0 20px 10px;position:relative;display:block;text-shadow:1px 1px 1px rgba(0,0,0,0.2);text-align:center}.container > header h1{position:relative;color:#498ea5;font-weight:700;font-style:normal;font-size:30px;padding:0 0 5px;text-shadow:0 1px 1px rgba(255,255,255,0.8)}.container > header h1 span{font-family:'Alegreya SC',Georgia,serif;font-size:20px;line-height:20px;display:block;font-weight:400;font-style:italic;color:#719dab;text-shadow:1px 1px 1px rgba(0,0,0,0.1)}.container > header h2{font-size:16px;font-style:italic;color:#2d6277;text-shadow:0 1px 1px rgba(255,255,255,0.8)}.freshdesignweb-top{line-height:24px;font-size:11px;background:rgba(0,0,0,0.05);text-transform:uppercase;z-index:9999;position:relative;box-shadow:1px 0 2px rgba(0,0,0,0.2)}.freshdesignweb-top a{padding:0 10px;letter-spacing:1px;color:#333;text-shadow:0 1px 1px #fff;display:block;float:left}.freshdesignweb-top a:hover{background:#fff}.freshdesignweb-top span.right{float:right}.freshdesignweb-top span.right a{float:left;display:block}.freshdesignweb-demos{text-align:center;display:block;line-height:30px;padding:20px 0}.freshdesignweb-demos a{display:inline-block;margin:0 4px;padding:0 4px;color:#fff;line-height:20px;font-style:italic;font-size:13px;border-radius:3px;background:rgba(41,77,95,0.1);-webkit-transition:all .2s linear;-moz-transition:all .2s linear;-o-transition:all .2s linear;-ms-transition:all .2s linear;transition:all .2s linear}.freshdesignweb-demos a:hover{background:rgba(41,77,95,0.3)}.freshdesignweb-demos a.current,.freshdesignweb-demos a.current:hover{background:rgba(41,77,95,0.3)}.form{background:#f1f1f1;width:470px;margin:0 auto;padding-left:50px;padding-top:20px}.form fieldset{border:0;padding:0;margin:0}.form p.contact{font-size:12px;margin:0 0 10px;line-height:14px;font-family:Arial,Helvetica}.form input[type="text"]{width:400px}.form input[type="email"]{width:400px}.form input[type="password"]{width:400px}.form input.birthday{width:60px}.form input.birthyear{width:120px}.form label{color:#000;font-weight:700;font-size:12px;font-family:Arial,Helvetica}.form label.month{width:135px}.form input,textarea{background-color:rgba(255,255,255,0.4);border:1px solid rgba(122,192,0,0.15);padding:7px;font-family:Keffeesatz,Arial;color:#4b4b4b;font-size:14px;-webkit-border-radius:5px;margin-bottom:15px;margin-top:-10px}.form input:focus,textarea:focus{border:1px solid #ff5400;background-color:rgba(255,255,255,1)}.form .select-style{-webkit-appearance:button;-webkit-border-radius:2px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,0.1);-webkit-padding-end:20px;-webkit-padding-start:2px;-webkit-user-select:none;background-image:url(../assets/images/select-arrow.png),-webkit-linear-gradient(#FAFAFA,#F4F4F4 40%,#E5E5E5);background-position:center right;background-repeat:no-repeat;border:0 solid #FFF;color:#555;font-size:inherit;margin:0;overflow:hidden;padding-top:5px;padding-bottom:5px;text-overflow:ellipsis;white-space:nowrap}.form .gender{width:410px}.form input.buttom{background:#4b8df9;display:inline-block;padding:5px 10px 6px;color:#fbf7f7;text-decoration:none;font-weight:700;line-height:1;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;-moz-box-shadow:0 1px 3px #999;-webkit-box-shadow:0 1px 3px #999;box-shadow:0 1px 3px #999;text-shadow:0 -1px 1px #222;border:none;position:relative;cursor:pointer;font-size:14px;font-family:Verdana,Geneva,sans-serif}.form input.buttom:hover{background-color:#2a78f6}
		</style>
		<?php
		
		// Random Form filling 
		$random = rand(1000, 9999);
		
		
		?>
	</head>
			
	<body>
        <div class="container">
			<header><h1>Register Portal</h1></header>  
			
			<div  class="form">
				
				<form id="contactform" method="POST" action="confirmation.php"> 
    			
				<p class="contact"><label for="name">Name*</label></p> 
    			<input id="name" name="name" value="Person Name <?php echo $random ?>" placeholder="First and Last name"  type="text" required > 
				 
				<select class="select-style gender" name="gender" required >
					<option value="">I am..*</option>
					<option value="male" selected>Male</option>
					<option value="female">Female</option>
					<option value="other">Other</option>
				</select>
				
				<br><br>
    			<p class="contact"><label for="email">Email*</label></p> 
    			<input id="email" value="person<?php echo $random ?>@domain.com" name="email" placeholder="example@domain.com" type="email" required > 
                
                <p class="contact"><label for="username">ID Number*</label></p> 
    			<input id="username" value="id_<?php echo $random ?>" name="id" pattern=".{4,}" title="Four or more characters" placeholder="Enter your college roll number" type="text" required> 
    			 
                <p class="contact"><label for="name">College Name*</label></p> 
                <select id="college_option" class="select-style gender" name="college" >
						<option value="JUIT" selected>JUIT</option>
						<option value="other">Other</option>
                </select>  <br><br>  
                
    			<input id="other_college" name="other_institute" title="Alphabets Only" placeholder="Enter name of your college." type="text" > 
  
				<p class="contact"><label for="name">Event*</label></p> 
                <select id="event" class="select-style gender" name="event" required>
						<option value="">Select your Event</option>
						<?php
							
							require('../addons/connectivity/connect.php');
							
							$query="select * from events where 1";
							$run=mysql_query($query);
							while ($row=mysql_fetch_assoc($run))
							{
								echo "<option value=\"".$row['event_id']."\">".$row['event_name']."</option>";
							}
						?>
							
					</select>  <br><br> 
				
				<p id="team_member_2_label" class="contact"><label for="phone">Team Member 2</label></p> 
				<input id="team_member_2" name="team_member_2" type="text"  placeholder="Name of 2nd team member" >
				
				<p id="team_member_3_label" class="contact"><label for="phone">Team Member 3</label></p> 
				<input id="team_member_3" name="team_member_3" type="text"  placeholder="Name of 3rd team member" >
				
				<p id="team_member_4_label" class="contact"><label for="phone">Team Member 4</label></p> 
				<input id="team_member_4" name="team_member_4" type="text"  placeholder="Name of 4th team member" >
				
				<p id="team_member_5_label"	class="contact"><label for="phone">Team Member 5</label></p>
				<input id="team_member_5" name="team_member_5" type="text"  placeholder="Name of 5th team member" >
				
				<p class="contact"><label for="phone">Mobile phone(+91 -  )*</label></p> 
				<input id="phone" value="897898<?php echo $random ?>" pattern="[0-9]{10}" title="10 Digit Mobile Number" maxlength="10" minlength="10" name="phone" placeholder="phone number"  type="text" required> <br>
				
				<input type="checkbox" required checked>I accept the <a href="#">terms & condition</a> laid down by team CREATECH.<br>
				
				<?php
				if(isset($_GET['error']))
					echo "<p><b>ERROR:</b> <i>".$_GET['error']." </i><p></br></br>";
				?>
				<?php
				if(isset($_GET['success']))
					echo "<p><b>Success:</b> <i>".$_GET['success']." </i><p></br></br>";
				?>
				<input class="buttom" name="submit" id="submit" value="Register" type="submit"> 	 
			    </form> 
				
			</div>      
			
			</div>
	</body>
	
	<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
	
	<script>
		$(document).ready(function() {
			if ($("#college_option option:selected").val()!="other")
			{
					$("#other_college").hide();
					$("#other_college").attr('required', false);
			}
			
				$("#college_option").change(function() {
					console.log($("#college_option option:selected").val());
					if($("#college_option option:selected").val()=="other")
					{
						$("#other_college").fadeIn("slow");
						$("#other_college").attr('required', true);
					}
					else if ($("#college_option option:selected").val()!="other")
					{
						$("#other_college").hide();
						$("#other_college").attr('required', false);
					}
				});
				
				
			$("#team_member_2").hide(); $("#team_member_2_label").hide();
			$("#team_member_2").attr('required', false);
			
			$("#team_member_3").hide(); $("#team_member_3_label").hide();
			$("#team_member_3").attr('required', false);
			
			$("#team_member_4").hide(); $("#team_member_4_label").hide();
			$("#team_member_4").attr('required', false);
			
			$("#team_member_5").hide(); $("#team_member_5_label").hide();
			$("#team_member_5").attr('required', false);
			
			<?php
			
				$query="select * from events where 1";
				$run=mysql_query($query);
					
					echo "$(\"#event\").change(function() {";
					echo	"\n
								console.log($(\"#event option:selected\").val());";
					echo 	"\n	
								$(\"#team_member_2\").hide(); $(\"#team_member_2_label\").hide();
								$(\"#team_member_2\").attr('required', false);
											
								$(\"#team_member_3\").hide(); $(\"#team_member_3_label\").hide();
								$(\"#team_member_3\").attr('required', false);
											
								$(\"#team_member_4\").hide(); $(\"#team_member_4_label\").hide();
								$(\"#team_member_4\").attr('required', false);
											
								$(\"#team_member_5\").hide(); $(\"#team_member_5_label\").hide();
								$(\"#team_member_5\").attr('required', false);";
							
					while ($row=mysql_fetch_assoc($run))
					{
						if($row['event_players']==1) continue;
						echo	"\n\n	if($(\"#event option:selected\").val()==\"".$row['event_id']."\"){";
						
						for($loop=2;$loop<=$row['event_players'];$loop++)
						{	
							echo	"\n\t\t$(\"#team_member_$loop\").show(); $(\"#team_member_".$loop."_label\").show();";
							echo	"\n\t\t$(\"#team_member_$loop\").attr('required', true);";
						}
										
							echo "\n\t}";	
								
					}
					
					echo "});";
			
			
			?>
			
			<?php
			
				$query="select * from events where 1";
				$run=mysql_query($query);
					
					
							
					while ($row=mysql_fetch_assoc($run))
					{
						if($row['event_players']==1) continue;
						echo	"\n\n	if($(\"#event option:selected\").val()==\"".$row['event_id']."\"){";
						
						for($loop=2;$loop<=$row['event_players'];$loop++)
						{	
							echo	"\n\t\t$(\"#team_member_$loop\").show(); $(\"#team_member_".$loop."_label\").show();";
							echo	"\n\t\t$(\"#team_member_$loop\").attr('required', true);";
						}
										
							echo "\n\t}";	
								
					}
					
			
			
			?>
			
		});					
	</script>	
</html>