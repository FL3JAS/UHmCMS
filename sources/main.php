<?php

	function login($username,$password){
		$password = md5(sha1($password));
		$query    = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";
		$res      = mysql_query($query) or die ("SQL error:".mysql_error());
		$num_rows = mysql_num_rows($res);
		
		if($num_rows != 1){
			print "Wrong username or password";
		}else{
			print "Login lates with success";
            setcookie('login',$password,time()+2000,'/');
		}
	}
	
?>
