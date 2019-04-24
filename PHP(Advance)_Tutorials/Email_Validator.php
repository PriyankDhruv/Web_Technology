<?php

	
	function valid_email($str) 
	{
		return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	}

	if(!valid_email("priyank25dhruv@gmail.com"))
	{
		echo "Invalid Email Address.";
	}
	else
	{
		echo "Valid Email Address.";
	}

?>