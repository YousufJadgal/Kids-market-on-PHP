<?php
    require 'connect.inc.php';
    if (isset($_REQUEST["btnRegister"])) {
       $firstname = $_POST['first_name'];
	   $lastname = $_POST['secondname'];
	   $date = $_POST['birthday'];
       $email = $_POST['useremail'];
	   $gender =$_POST['gender'];
	   $upsw = md5($_POST['psw']);
	   $upswrepeat = md5($_POST['cnpsw']);
       if ($upsw == $upswrepeat) {
        if(isset($_REQUEST['btnRegister'])){
            if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($gender) && !empty($date) && !empty($upsw)) {
              $qry = "insert into test (First_Name,Second_Name,Birthday,Email,Gender,Password,type) values ('{$firstname}','{$lastname}','{$date}','{$email}','{$gender}','{$upsw}',2)";
              $insert_flag = $db->exec($qry);
              if ($insert_flag>0) {
                $msg = "record is inserted";
              }      
            }else{
              $error = "data is empty";
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
	<title>Sign up Page</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="icon" href="../pic/favicon.ico">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
	integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="../css/signup .css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	a{
color: #FFC312;
}
a:hover{
    color: white;
}
</style>
<body>

	<header>

		<a href="../index.php" class="logo"><img src="../pic/logo.png" alt="Kid Market"></a>
		<nav class="navbar">
			<a href="../index.php" >Home</a>
			<a href="products.php">Product</a>
			<a href="contact.php">Contact Us</a>
			<a href="about.php">About us</a>
		</nav>
		<?php 
        if (isset($error)) {
        ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            <strong>Query: </strong><?php echo $error; ?>
        </div>
        <?php
                }     
         if(isset($msg)){                                           
        header('location: signin.php')
		?>
        
        <?php }?>
	</header>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Sign up</h3>
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
							<input type="text" class="form-control" name="first_name" placeholder="first name" id="yourname">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" id="lastname" name="secondname" class="form-control" placeholder="last name" >
						</div>
                        <div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="email" id="email"  name="useremail" class="form-control" placeholder="Enter Your Email" >
						</div>
                        <div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" id="pwd" name="psw" class="form-control" placeholder="Password" >
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" id="cnpwd" name="cnpsw" class="form-control" placeholder="confirm password" >
						</div>
						<div class="input-group form-group">
							<label class="text-light" for="birthday">Date Of Birth</label>
							<input type="date" id="birthday" name="birthday" class="w-100">
						</div> 
						<div class="input-group form-group">
						<label for="gender" class="text-light">Select Your Gender</label>
						<select name="gender" id="" class="w-100 p-1">
							<option value="" selected disabled>Select Your Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>

						</select>
		 												</div>
						<div class="form-group">
							<button type="submit" class="btn btn w-100" name="btnRegister" style="background-color: #FFC312;">Registor</button>
						</div>
				</div>
				</form>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						If You Have An Account<a href="signin.php">Sign in</a>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
	<script>
	// 	function submitfn(){


	// 	var firstname=document.getElementById('yourname').value
	// 	var lastname=document.getElementById('lastname').value
	// 	var pass=document.getElementById('pwd').value
	// 	var pass2=document.getElementById('cnpwd').value
	// 	var errorMsg=''
	// 	if(!firstname){
	// 		errorMsg = errorMsg+'first name is required \n' 
	// 	}
		
	// 	if (!lastname){
	// 		errorMsg = errorMsg+'lst name is required \n'

	// 	}
	// 	if (!pass){
	// 		errorMsg = errorMsg+' password is required \n'

	// 	}
	// 	if (!pass2){
	// 		errorMsg = errorMsg+'conform passward is required \n'

	// 	}
	// 	if (pass!=pass2){
	// 		errorMsg = errorMsg+'passward, conform passward are not same \n'

	// 	}
	// 	alert(errorMsg)
	// 	return false

	// 	}
	// </script>
</body>

