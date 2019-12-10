<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>fghjklbftyuiknbvfyuilgyuilmnbgyuiknbtyuilkhgtyuikguijgyu</p>
<?php
$hostname="localhost";
$username="root";
$con=mysql_connect($hostname,$username)
or die("not connect");
mysql_select_db("boom",$con)
 or die("Not connect");

{
	$sql=mysql_query("select * from contactus");
	echo "";
	while($row=mysql_fetch_array($sql))
	{  
		
		echo "<br>".$row['firstname']."\t".$row['lastname']."\t".$row['email']."\t".$row['phone']."\t".$row['message']."<br>";
	}
}

?>
</body>
</html>