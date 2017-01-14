# Event-Registration-and-Payment-Portal
Sample Event Registration and Payment Portal allows to register and lets him pay on payment desk.


#Languages and Frameworks

1. HTML
2. CSS 
3. Javascript
4. jQuery
5. PHP

#Development Platforms and Softwares

1. Xampp
2. MySQL
3. Notepad++

#Note: 
    
    The software is not opimized for frontend 

#Project Description:
	
	The project has two parts.
	1. Registration Portal: to register participants
	2. Payment Portal: to make their payments on registration desk.

#Datatabe Description:

The database has 4 tables:

student
	
	This table has all the data of the registering participents. 
	
events
	
	This table has all the data of the events to participate . 

registrar
	
	This table has all the data of the people collecting money on the desk.

 transactions
 
 	This table has all the data of transations that had happened
	
	

#PHP File Description 

    The file is the backend script for Online Bus Registration System to be called by AJAX call.
		
		File Properties:
		1. Procedural Programming Approach
		2. First come first serve seat allocation system.
		3. My SQL Database 
		4. Clean Code
		5. Uses serialized form data
		
		No copy-rights reserved.
		
#Installation Steps

  Make sure you have PHP and MySQL Working (probably with Xampp).
  Unzip the folder in PHP server dirctory. 
  
  Create a database and import assets -> sample_database -> registration.sql. This would create four tables as explaied above
  
  Also see registration.sql in your text editor.
  
  Now open addons/connectivity/connect.php and search for DB connection variables (You may need to change )
 
  $host="localhost";	$username="root";	$password=""; 		$database="registration";
  
  The Web-Application should be up and running by now
