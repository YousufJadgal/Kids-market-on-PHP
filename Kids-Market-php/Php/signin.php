<?php
    session_start();
    require 'connect.inc.php';
    if (isset($_REQUEST['btnclick'])) {
    	$name = $_POST['yrName'];
		$username = $_POST['txtid'];
        $password = $_POST['txtpass'];
        $secPass = md5($password);
        // echo $secPass;
        $qry = "select * from test where First_Name = '{$name}' and Email = '{$username}' and Password = '{$secPass}'";
		$rslt = $db->query($qry);
        foreach ($rslt as $row) {
        //  echo "data found";
         if ($username==$row['Email'] && $secPass==$row['Password']) {
			 $_SESSION['userid'] = $username; 
			 $_SESSION['yrName'] = $name;
			$_SESSION['type'] = $row['type'];     
			if($row['type']==1){
				header('location: admin.php');
			  }
			  else{
				header('location: ../index.php');
			  }
			  }
			  else{
				  echo 'Wrong Password';
			  }
		  }
		}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Sign in Page</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="icon" href="../pic/favicon.ico">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
	integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="../css/sign in.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

	<header>

		<a href="../index.php" class="logo"><img src="../pic/logo.png" alt="Kid Market"></a>
		<nav class="navbar">
			<a href="../index.php">Home</a>
			<a href="products.php">Product</a>
			<a href="contact.php">Contact Us</a>
			<a href="about.php">About us</a>
		</nav>

	</header>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Sign In</h3>
					<div class="d-flex justify-content-end social_icon">
						<span><a href="https://www.facebook.com/AptechGardenCenter/"><i class="fab fa-facebook-square"></i></a></span>
						<span><a href="mailto:yousuf2110e@aptechgdn.net"><i class="fab fa-google-plus-square"></i></a></span>
						<span><a href="https://twitter.com/Aptechgdn1"><i class="fab fa-twitter-square"></i></a></span>
					</div>
				</div>
				<form action="" method="post">
				<div class="card-body">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="yrName" placeholder="Your Name" id="yourname">

					</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" name="txtid" placeholder="Username" id="yourname">

						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							
							<input type="password" id="yourpwd" name="txtpass"  class="form-control" placeholder="Password" >
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<button type="Login" name="btnclick" class="btn btn" style="background-color: #FFC312;" >Log in</button>
						</div>
				</div>
				</form>
				<div class="card-footer">
					<div class="d-flex justify-content-center links"v>
						Create New Account.<a href="signup.php">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="Forgotpass.php">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="footer">
    <div class="footer-content">
        <h3>Y J</h3>
        <p> WE ARE PROVIDING THE BEST QUALITY OF TOYS FOR (BABA/BABY) UNDER HIGH AND STRICK QUALITY CONTROL</p>
        <ul class="socials">
            <li><a target="blank" href="https://web.facebook.com/AptechGardenCenter/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a></li>
            <li><a target="blank" href="https://twitter.com/aptechgdn1"><i class="fa fa-twitter"></i></a></li>
            <li><a  href="mailto:Yousuf2110e@aptechgdn.net"><i class="fa fa-google-plus"></i></a></li>
            <li><a target="blank" href="https://www.youtube.com/channel/UCIAra-J-GSzuvZeflJA7rtw"><i class="fa fa-youtube"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>Copyright &copy; <a href="mailto:Yousuf2110e@aptechgdn.net">Y J</a>  </p>
                <div class="footer-menu">
                  <ul class="f-menu">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="html/products.php">Product</a></li>
                    <li><a href="html/about.php">About us</a></li>
                    <li><a href="html/contact.php">Contact us</a></li>
                  </ul>
                </div>
    </div>
</section>
</body>
</html>