<?php  
session_start();//session starts here  
  
?>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
	<title>Login</title>  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>  
 
  
<body style="background-color:pink;">  
  
  
<div class="container">  
    <div class="row">  
        <div class="col-md-6 col-md-offset-3">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Sign In</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="User" name="name" type="name" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div> 
							
                                <input  name="pass" type="checkbox" class="largerCheckbox" value=""><span style="vertical-align: bottom;">Remember Me</span>
                            
							
  
  
                                <input class="btn btn-lg btn-info btn-block" type="submit" value="Login" name="login" >  
								<p style="text-align:right;"><a href="#" style="text-decoration:none;">Forgot Password?</a></p>
  
                            <!-- Change this to a button or input when using this as a form -->  
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>

  
  
</body>  
  
</html>  
  
<?php  
  
include("db_connect.php");  
  
if(isset($_POST['login']))  
{  
    $uname=$_POST['name'];  
    $pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE uname='$uname'AND pass='$pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['name']=$uname;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  