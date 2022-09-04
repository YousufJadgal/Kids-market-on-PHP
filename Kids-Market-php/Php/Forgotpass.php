<?php
session_start();
    require 'connect.inc.php';
    if (isset($_REQUEST["btnsubmit"])) {
        $uemail = $_POST['txtemail'];
       $upsw = md5($_POST['txtpass']);
       $upswchange = md5($_POST['changepass']);
       if ($upsw != $upswrepeat) {
        if(isset($_REQUEST['btnsubmit'])){
            if (!empty($upsw)) {
              $qry = "UPDATE test SET Password=['$upsw']";
              $update_flag = $db->exec($qry);
              if ($update>0) {
                header('location: signin.php');
              }      
            }else{
              $error = "SAME DATA";
            }
          }
       }else{
        $error="Confirm Password does not matches";
       }
    }
?>



<!DOCTYPE html>
<html>

<head>
	<title>Forgot Password</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="icon" href="../pic/favicon.ico">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
	integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="../css/forgotpass.css">
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
					<h4>Forgot Pass Page</h4>
					<div class="d-flex justify-content-end social_icon">
						<span><a href="https://www.facebook.com/AptechGardenCenter/"><i class="fab fa-facebook-square"></i></a></span>
						<span><a href="mailto:yousuf2110e@aptechgdn.net"><i class="fab fa-google-plus-square"></i></a></span>
						<span><a href="https://twitter.com/Aptechgdn1"><i class="fab fa-twitter-square"></i></a></span>
					</div>
				</div>
				<div class="card-body">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="text" class="form-control" name="txtemail"  placeholder="Username" id="yourname">

						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							
							<input type="password" id="yourpwd"  class="form-control" name="txtpass" placeholder="Current Password" >
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							
							<input type="password" id="yourpwd"  class="form-control" name="changepass" placeholder="Change your Password" >
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn" name="btnclick" style="background-color: #FFC312;" >Submit</button>
						</div>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links"v>
						Create New Account.<a href="signup.php">Sign Up</a>
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
	<!-- <script>
		function submitfn(){


		var username=document.getElementById('yourname').value
		var password=document.getElementById('yourpwd').value
		var errorMsg=''
		if(!username){
			errorMsg = errorMsg+'user name is required'
		}
		if (!yourpwd){
			errorMsg = errorMsg+'password is required'

		}
		alert(errorMsg)
		return false

		}
	</script> -->
</body>

</html>