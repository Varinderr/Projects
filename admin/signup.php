<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>signup</title>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
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
	$fname=$_POST['full_name'];
   $uname=$_POST['username'];
   $email=$_POST['email'];
   $pass=$_POST['password'];
   $reenter=$_POST['reenter'];
   $sql="insert into sinup(username,email,password,reenter,full_name) values('$uname','$email','$pass','$reenter','$fname')";
   if(!mysql_query($sql,$con))
   {
	   die("error".mysql_error($con));
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
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
        <li><a href="book.php">BOOK SHOWS</a></li>
        <li><a href="#"></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


 <div class="container-fluid">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <h1 class="page-description text-center">create an account</h1>

                    <p class="lead">>A little dose of party fun to break up those boring work emails..</p>


                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">FULL NAME*</label>
                                        <input type="text" name="full_name" id="fname" class="form-control" placeholder="Please enter your username *" required data-error="Fullname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">USER NAME*</label>
                                        <input type="text" name="username" id="uname" class="form-control" placeholder="Please enter your username *" required data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_email">E-MAIL *</label>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Please enter your email *" required data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_password">PASSWORD *</label>
                                        <input type="password" name="password" id="pass" class="form-control" placeholder="Please enter your password *" required data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_password">CONFIRM PASSWORD</label>
                                        <input type="password" name="reenter" id="reenter" class="form-control" placeholder="Please enter your password">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            
                                <div class="col-md-12">
                                    <input name="insert" type="submit" id="insert" class="btn btn-success btn-send" value="Submit">
                                
                        <div class="container signin">
    <p>Already have an account? <a href="user/login.php">login</a>.</p>
  </div>
                                    
                                </div>
                            </div>
                       
                     

                    </form>
                </div><!-- /.8 -->

            </div> <!-- /.row-->
&nbsp; &nbsp;<p>If you find us annoying, and no longer want to receive our updates, you are able to unsubscribe from this newsletter at any time.
We will not share your information with any third parties. Pinky swear.</p>
        </div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>

</body>
</body>
</html>
