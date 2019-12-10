<?php 
session_start();
IF(ISSET($_SESSION['name'])){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


  <style>
				
				.body
				{
					background-color:black;
				}
				
  .jumbotron {
      background-color: BLACK;
      color: WHITE;
      padding: 100px 25px;
  }
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="gallery-clean.css">
<title>About Us</title>
</head>

<body>

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
        <li class="active"><a href="indexx.php">Home</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
        <li><a href="book.php">BOOK SHOWS</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">	
      <a class="navbar-brand pull-right"><span class="glyphicon glyphicon-user"></span> <?=$_SESSION['name'];?> </a>
        <a class="navbar-brand pull-right" href="logout.php?destroy"> <span class="glyphicon glyphicon-off"></span> Logout </a>
      </li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>BOOM</h1> 
  <p>To know more about us subscribe our channel</p> 
  <form class="form-inline">
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger COLOR:">Subscribe</button>
      </div>
    </div>
  </form>
</div>

<div class="container gallery-container">

    <h1 class="page description text-center">BOOM</h1>

    <p class="page-description text-center">Events Is A Professionally Managed Event.</p>
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="G1.jpg">
                        <img src="G1.jpg" alt="Park">
                    </a>
                    <div class="caption">
                        <h3>SPECIAL PROGRAMS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="G2.jpg">
                        <img src="G2.jpg" alt="Bridge">
                    </a>
                    <div class="caption">
                        <h3>TOP PROGRAMS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="G3.jpg">
                        <img src="G3.jpg" alt="Tuneel">
                    </a>
                    <div class="caption">
                        <h3>NON-STOP PARTY</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="G4.jpg">
                        <img src="G4.jpg" alt="Coast">
                    </a>
                    <div class="caption">
                        <h3>NON-STOP PARTY</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="G5.jpg">
                        <img src="G5.jpg" alt="Rails">
                    </a>
                    <div class="caption">
                        <h3>NON-STOP PARTY</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="G6.jpg">
                        <img src="G6.jpg" alt="Traffic">
                    </a>
                    <div class="caption">
                        <h3>NON-STOP PARTY</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>
<?php 
}else{
	echo "<script language=\"javascript\">document.location.href='login.php';</script>";	
}
?>