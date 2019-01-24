<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
				
				<form method="post" accept="">
<input type="text" name="text">
<input type="submit" name="submit">
<span id="uu"></span>
</form>
<?php

 if(isset($_POST['submit'])){
 	$t=$_POST['text'];
 	$tt=trim($t);

	if(gethostbyname($tt)!=$tt){

		echo "sorry domain has been taken";
	}else{
		echo "domain avaiable";
	}
}
echo "\n/////////////////////////////\n";
print_r(@dns_get_record($tt,DNS_ANY));

?>
</body>
</html>


