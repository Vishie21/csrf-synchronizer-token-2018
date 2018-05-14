<?php
	session_start(); 
	if((!isset($_SESSION["success"])))
	{
		header("location:index.php");
		exit();
	}
	if(isset($_POST['csrf'])){
		if($_POST['csrf'] == $_SESSION['csrf']){
			echo "You are successfully logout..!";
			session_destroy();
		}
		else{
			echo "CSRF Value Invalid..!!";
		}
	}
	
?>

<body style="background-image:url('sahara.jpg');color:white;">

<div class="container">
    <div class="row" align="center" style="padding-top: 170px;">
        <div class="col-12">
                <h1 style="font-size: 40px ;">Cross-site Request Forgery Synchronizer Token Patterns</h1> 
        </div>
    </div>
    <!--
    <div class="row" align="center" style="padding-top: 20px;">
        <div class="col-12">
                <h2 style="font-size: 50px;"></h2>  
        </div>
    </div>
    <div class="row" align="center" style="padding-top: 5px; font-size: 20px;">
        <div class="col-12">
                <div class="anime">
                    K.K.Y.V.Samarawickrama : IT16547452
                </div>
                <div class="anime">
                    3 rd Year Cyber Security
                </div>  
        </div>
    </div>
    -->

</div>
    
    </body>