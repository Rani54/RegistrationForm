<?php  
session_start();  
  
if(!$_SESSION['name'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>  
<head>  
  
    <title>  
        Registration  
    </title> 
	<link rel="stylesheet" href="css/3.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
a{
font-size:20px;
}
	</style>
</head>  
  
<body style="background-color:pink;">  
	<p><a href="logout.php">Logout here</a></p>
		<h1>WELCOME <?php  
					echo $_SESSION['name'];  
					?></h1>


					<div class="accordian">
						<ul>
							<li>
								<div class="image_title">
									<a href="#">KungFu Panda</a>
								</div>
								<a href="#">
									<img src="http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg"/>
								</a>
							</li>
							<li>
								<div class="image_title">
									<a href="#">Toy Story 2</a>
								</div>
								<a href="#">
									<img src="http://thecodeplayer.com/uploads/media/40Ly3VB.jpg"/>
								</a>
							</li>
							<li>
								<div class="image_title">
									<a href="#">Wall-E</a>
								</div>
								<a href="#">
									<img src="http://thecodeplayer.com/uploads/media/00kih8g.jpg"/>
								</a>
							</li>
							<li>
								<div class="image_title">
									<a href="#">Up</a>
								</div>
								<a href="#">
									<img src="http://thecodeplayer.com/uploads/media/2rT2vdx.jpg"/>
								</a>
							</li>
							<li>
								<div class="image_title">
									<a href="#">Cars 2</a>
								</div>
								<a href="#">
									<img src="http://thecodeplayer.com/uploads/media/8k3N3EL.jpg"/>
								</a>
							</li>
						</ul>
					</div>

  
  </body>
  
   </html> 