<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GALLERY</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="fluid-gallery.css">


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
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
        <li><a href="book.php">BOOK SHOWS</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>




<div class="container gallery-container">

    <h1>PHOTO Gallery</h1>

    <p class="page-description text-center">Enjoy the event throughout the entire night and do not sleep till the morning easy.t</p>
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="chicago.jpg">
                    <img src="chicago.jpg" alt="chicago">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="ny.jpg">
                    <img src="ny.jpg" alt="ny">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="la.jpg">
                    <img src="la.jpg" alt="la">
                </a>
            </div>
            <div class="col-sm-12 col-md-8">
                <a class="lightbox" href="ff.jpg">
                    <img src="ff.jpg" alt="Toronto">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="123.png">
                    <img src="123.png" alt="Coast">
                </a>
            </div> 
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="dd.jpg">
                    <img src="dd.jpg" alt="Rails">
                </a>
            </div>

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>