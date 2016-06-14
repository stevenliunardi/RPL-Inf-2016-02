<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADC Login</title>

<link rel="stylesheet" type="text/css" href="css/blue.css">
</head>
<body>


<form action = "login.php" method = "post">

<div id="widget">
 <a href="homes.php" class="navbar-brand">
 <img class="img-responsive" src="images/orange.jpg" alt="Logo">
 </a>
  <div id="container">
	<section class="tabs">

	<input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" checked="checked"/>
		<li class="active"><a href="login.php"><span for="tab-2" class="tab-label-2">Login</span></a></li>

		<input id="tab-1" type="radio" name="radio-set" class="tab-selector-1"/>
		<a href="signup.php"><span for="tab-1" class="tab-label-1">Signup</span></a>

		<div class="clear-shadow"></div>
		

		<div id="content">

		<!-- LOGIN -->
			<div class="content-2">     
				<form  action="" autocomplete="on">
				  <p>
					<label for="username" class="uname"> Your email or username </label>
					<input class="field" name="email_pen" required="required" type="text" placeholder="myusername@gmail.com"/>
				  </p>
				  <p>
					<label for="password" class="youpasswd"> Your password </label>
					<input class="field" name="pass_pen" required="required" type="password" placeholder="mypassword" />
				  </p>
				  <p class="keeplogin">
					<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> Keep me logged in
					<input type="submit"  value="Login" />
				  </p>
				</form>
			</div>

		</div>
	</section>
  
</div>
</div>
</form>

<?php

		if(isset($_POST['email_pen'])) {

			require_once 'koneksi.php';

			
			$Email = $_POST ['email_pen'];
			$Pass = md5($_POST ['pass_pen']);
			

			$sql = "SELECT * FROM datapenumpang WHERE email='$Email' AND pass='$Pass' LIMIT 1";

			$hasil = $db->query($sql);

			if( $hasil->num_rows > 0 ){
				$_SESSION['email']=$Email;
				echo 'Berhasil Login';
				header("location:homes.php");
			}else{
				echo 'Periksa Email dan Password';
			}
		}


		?>

</body>
</html>

