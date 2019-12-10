<?php 
session_start();
IF(ISSET($_SESSION['name'])){
?>
<html>
    <head>
        <title>Contact Us</title>
        
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    
    
    <body>
<?php
$hostname="localhost";
$username="root";
$con=mysql_connect($hostname,$username)
or die("not connect");
mysql_select_db("boom",$con)
 or die("Not connect");
if(isset($_POST['insert']))
{
   $fname=$_POST['firstname'];
   $lname=$_POST['lastname'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $message=$_POST['message'];
   $sql="insert into contactus(firstname,lastname,email,phone,message) values('$fname','$lname','$email','$phone','$message')";
   if(isset($_POST['display']))
{
	$sql=mysql_query("select * from contactus");
	echo "";
	while($row=mysql_fetch_array($sql))
	{
		echo "<br>".$row['firstname']."\t".$row['lastname']."\t".$row['email']."\t".$row['phone']."\t".$row['message']."<br>";
	}
}
}
?>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" >Boom</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
         <li><a href="book.php">REGISTRED USERS</a></li>
        <li><a href="contact.php">PEOPLE TRYING TO CONTACT US</a></li>
        <li><a href="book.php">SHOW BOOKINGS</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">	
      <a class="navbar-brand pull-right"><span class="glyphicon glyphicon-user"></span> <?=$_SESSION['name'];?> </a>
        <a class="navbar-brand pull-right" href="index.php?destroy"> <span class="glyphicon glyphicon-off"></span> Logout </a>
      </li>
      </ul>
    </div>
  </div>
</nav>
       
    </body>
</html>
<?php 
}else{
	echo "<script language=\"javascript\">document.location.href='login.php';</script>";	
}
?>