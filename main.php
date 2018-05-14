<?php
	session_start();
	if(!isset($_SESSION["success"]))
	{
		header("location:index.php");
		exit();
	}
		
	$_SESSION["csrf"] = md5(mt_rand()+time());
?>
<a href="logout.php"></a>
<a href="retrive.php"></a>

<html>
	<head> 
		<title>
			Login
		</title>
	</head>
	<body style="background-image:url('sahara.jpg');color:white;">
		<form id="LOGOUT_00" method="POST" action="logout.php">
		
		<?php if(isset($error)){echo $error."<br>";}?>
			
			<input type="submit" value="Logout"/> 			
		</form>
	</body>
	
	<script>
		window.onload=getToken();
		function getToken(){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			  if (this.readyState == 4 && this.status == 200) {
				var form = document.getElementById("LOGOUT_00");
				var token = document.createElement("input");
				token.setAttribute("type", "hidden");
				token.setAttribute("name", "csrf");
				token.setAttribute("value", this.responseText);
				form.appendChild(token);
			  }
			};
			xhttp.open("POST", "retrive.php", true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("token");
		}
	</script>
        
        
        <div class="container">
    <div class="row" align="center" style="padding-top: 170px;">
        <div class="col-12">
                <h1 style="font-size: 40px;">Cross-site Request Forgery Synchronizer Token Patterns</h1> 
        </div>
       <!-- ----
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
            -->

</div>
        
        
        
        
        
	
</html>