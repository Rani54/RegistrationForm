<html>  
<head lang="en">  
    <meta charset="UTF-8">  
	<title>Registration</title>
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
                    <h3 class="panel-title">Registration</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="registration.php">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus>  
                            </div>  
  
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
  
  
                            <input class="btn btn-lg btn-info btn-block" type="submit" value="Register" name="register" >  
  
                        </fieldset>  
                    </form>  
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>  
  
<?php  
  
include("db_connect.php");
if(isset($_POST['register']))  
{  
    $uname=$_POST['name']; 
    $pass=$_POST['pass']; 
    $umail=$_POST['email'];  
  
  
    if($uname=='')  
    {  
        
        echo"<script>alert('Please enter the name')</script>";  
exit(); 
    }  
  
    if($pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($umail=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
 
    $check_email_query="select * from users WHERE umail='$umail'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $umail is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
  
    $insert_user="insert into users (uname,umail,pass) VALUE ('$uname','$umail','$pass')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('welcome.php','_self')</script>";  
    }  
  
  
  
}  
  
?>  