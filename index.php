<?php
	session_start();
	if(isset($_SESSION["success"]))
	{
		header("location:main.php");
		exit();
	}
	
	if(isset($_POST["username"]) && isset($_POST["password"]))
	{	
		$Username = $_POST["username"];
		$Password = $_POST["password"];
		
		if($Username == "Vishmini" && $Password == "sLiiT123")
		{
			header("location:main.php");
			$_SESSION["success"] = true;
			exit();
		}
		else
		{
			$error = "Your Username & Password is not correct..!!";		
		}
	}
?>

<html>
	<head> 
		<title>
			Login
		</title>
	</head>
	<body style="background-image:url('sahara.jpg');color:white;">
		<form method="POST">
		
		<?php if(isset($error)){echo $error."<br>";}?>
		
			Username:<input name="username" type="text"/><br><br>
			Password:<input name="password" type="password"/><br><br>
			<input type="submit" value="Login"/> 			
		</form>
	</body>
        
        <div class="container">
    <div class="row" align="center" style="padding-top: 170px;">
        <div class="col-12">
                <h1 style="font-size: 50px;">Cross-site Request Forgery Synchronizer Token Patterns</h1> 
        </div>
    </div>
    <div class="row" align="center" style="padding-top: 20px;">
        <div class="col-12">
                <h2 style="font-size: 50px;"></h2>  
        </div>
    </div>
    <div class="row" align="center" style="padding-top: 5px; font-size: 20px;">
        <div class="col-12">
                <div class="anime">
                    K.K.Y.V.Samarawickrama : IT 16547452
                </div>
                <div class="anime">
                    3 rd Year Cyber Security
                </div>  
        </div>
    </div>

</div>
        
        
</html>