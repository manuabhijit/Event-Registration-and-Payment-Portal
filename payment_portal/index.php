<?php

// This script does not allow login page to load when sm1 is already online
	session_start();
	if(isset($_SESSION['register']))
	{
		$header="Location: payment.php";
		header($header);
	}
	
?>

<html>
	<head>
		<title>Register Portal</title>
		<style>
			body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td{margin:0;padding:0}html,body{margin:0;padding:0;height:100%}table{border-collapse:collapse;border-spacing:0}img{border:0}address,caption,cite,code,dfn,th,var{font-style:normal;font-weight:400}ol,ul{list-style:none}caption,th{text-align:left}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:400}header{display:block}body{font-family:Cambria,Palatino,"Palatino Linotype","Palatino LT STD",Georgia,serif;background:url(../assets/images/bgnoise_lg.png);font-weight:400;font-size:15px;color:#3a2127;overflow-y:scroll}a{color:#333;text-decoration:none}.container{width:100%;height:100%;position:relative}.clr{clear:both}.container > header{padding:20px 30px;margin:0 20px 10px;position:relative;display:block;text-shadow:1px 1px 1px rgba(0,0,0,0.2);text-align:center}.container > header h1{position:relative;color:#498ea5;font-weight:700;font-style:normal;font-size:30px;padding:0 0 5px;text-shadow:0 1px 1px rgba(255,255,255,0.8)}.container > header h1 span{font-family:'Alegreya SC',Georgia,serif;font-size:20px;line-height:20px;display:block;font-weight:400;font-style:italic;color:#719dab;text-shadow:1px 1px 1px rgba(0,0,0,0.1)}.container > header h2{font-size:16px;font-style:italic;color:#2d6277;text-shadow:0 1px 1px rgba(255,255,255,0.8)}.freshdesignweb-top{line-height:24px;font-size:11px;background:rgba(0,0,0,0.05);text-transform:uppercase;z-index:9999;position:relative;box-shadow:1px 0 2px rgba(0,0,0,0.2)}.freshdesignweb-top a{padding:0 10px;letter-spacing:1px;color:#333;text-shadow:0 1px 1px #fff;display:block;float:left}.freshdesignweb-top a:hover{background:#fff}.freshdesignweb-top span.right{float:right}.freshdesignweb-top span.right a{float:left;display:block}.freshdesignweb-demos{text-align:center;display:block;line-height:30px;padding:20px 0}.freshdesignweb-demos a{display:inline-block;margin:0 4px;padding:0 4px;color:#fff;line-height:20px;font-style:italic;font-size:13px;border-radius:3px;background:rgba(41,77,95,0.1);-webkit-transition:all .2s linear;-moz-transition:all .2s linear;-o-transition:all .2s linear;-ms-transition:all .2s linear;transition:all .2s linear}.freshdesignweb-demos a:hover{background:rgba(41,77,95,0.3)}.freshdesignweb-demos a.current,.freshdesignweb-demos a.current:hover{background:rgba(41,77,95,0.3)}.form{background:#f1f1f1;width:470px;margin:0 auto;padding-left:50px;padding-top:20px}.form fieldset{border:0;padding:0;margin:0}.form p.contact{font-size:12px;margin:0 0 10px;line-height:14px;font-family:Arial,Helvetica}.form input[type="text"]{width:400px}.form input[type="email"]{width:400px}.form input[type="password"]{width:400px}.form input.birthday{width:60px}.form input.birthyear{width:120px}.form label{color:#000;font-weight:700;font-size:12px;font-family:Arial,Helvetica}.form label.month{width:135px}.form input,textarea{background-color:rgba(255,255,255,0.4);border:1px solid rgba(122,192,0,0.15);padding:7px;font-family:Keffeesatz,Arial;color:#4b4b4b;font-size:14px;-webkit-border-radius:5px;margin-bottom:15px;margin-top:-10px}.form input:focus,textarea:focus{border:1px solid #ff5400;background-color:rgba(255,255,255,1)}.form .select-style{-webkit-appearance:button;-webkit-border-radius:2px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,0.1);-webkit-padding-end:20px;-webkit-padding-start:2px;-webkit-user-select:none;background-image:url(../assets/images/select-arrow.png),-webkit-linear-gradient(#FAFAFA,#F4F4F4 40%,#E5E5E5);background-position:center right;background-repeat:no-repeat;border:0 solid #FFF;color:#555;font-size:inherit;margin:0;overflow:hidden;padding-top:5px;padding-bottom:5px;text-overflow:ellipsis;white-space:nowrap}.form .gender{width:410px}.form input.buttom{background:#4b8df9;display:inline-block;padding:5px 10px 6px;color:#fbf7f7;text-decoration:none;font-weight:700;line-height:1;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;-moz-box-shadow:0 1px 3px #999;-webkit-box-shadow:0 1px 3px #999;box-shadow:0 1px 3px #999;text-shadow:0 -1px 1px #222;border:none;position:relative;cursor:pointer;font-size:14px;font-family:Verdana,Geneva,sans-serif}.form input.buttom:hover{background-color:#2a78f6}
		</style>
	</head>
			
	<body>
        <div class="container">
			<header><h1>Register Portal</h1></header>  
			
			<div  class="form">
				
				<form id="contactform" method="POST" action="payment.php"> 
    			
				<p class="contact"><label for="name">Registrar ID*</label></p> 
    			<input name="name" value="reg_001" placeholder="Please Enter" type="text" required > 
				 
				<br><br>
    			<p class="contact"><label for="email">Password*</label></p> 
    			<input value="pass1" name="password" placeholder="Enter Your Password" type="password" required > 
				
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
	
</html>