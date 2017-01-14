<?php


	function hash_value($argument)
	{
		$options = [
		'cost' => 9,
		'salt' => "my_salt_1234567891011121314",
		];
		return password_hash($argument, PASSWORD_BCRYPT, $options);
	}
	
	function hash_compare($arg_str1,$arg_str2)
	{
		if(strlen($arg_str1)!=strlen($arg_str2))
			return false;
		
		for($i=0;$i<strlen($arg_str1);$i++){
			if($arg_str1[$i]!=$arg_str2[$i]){
				return false;
			}
		}
		
		return true;
	}
	
?>