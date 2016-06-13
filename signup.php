<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADC Signup</title>

<link rel="stylesheet" type="text/css" href="css/blue.css">
</head>
<body>

		
<form action = "signup.php" method = "post">

<div id="widget">
<a href="homes.php" class="navbar-brand">
 <img class="img-responsive" src="images/orange.jpg" alt="Logo">
 </a>
  <div id="container">
	<section class="tabs">
		<input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
		<li class="active"><a href="signup.php"><span for="tab-1" class="tab-label-1">Signup</span></a></li>

		<input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
		<a href="login.php"><span for="tab-2" class="tab-label-2">Login</span></a>
	
		<div class="clear-shadow"></div>
		
		<div id="content">



		<!-- SIGN UP -->
			<div class="content-1">	
				<form  action="" autocomplete="on">
				  <p>
					<label for="usernamesignup" class="uname">Your username</label>
					<input class="field" name="nama_pen" required="required" type="text" placeholder="myusername" />
				  </p>
				   <p>
					<label for="nosignup" class="uname">Your Number</label>
					<input class="field" name="no_pen" required="required" type="text" placeholder="mynumber" />
				  </p>
				   <p>
					<label for="emailsignup" class="youmail"> Your email</label>
					<input class="field" name="email_pen" required="required" type="email" placeholder="myusername@gmail.com"/>
				  </p>
				  <p>
					<label for="passwordsignup" class="youpasswd">Your password </label>
					<input class="field" name="pass_pen" required="required" type="password" placeholder="mypassword"/>
				  </p>
				  <p class="signin button">
					<input type="checkbox" required="required" /> I agree with terms and conditions 
					<input type="submit" value="Sign up"/>
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

			$Nama = $_POST ['nama_pen'];
			$No = $_POST ['no_pen'];
			
			$Email = $_POST ['email_pen'];
			$Pass = md5($_POST ['pass_pen']);
			

			$sql = "INSERT INTO datapenumpang VALUES('$Nama', '$No', '$Email', '$Pass' )";

			if($db->query($sql) ){
				echo 'Data berhasil disimpan';
				header("location:login.php");
			}else{
				echo 'Error : ' . $query->error;
			}
			
				
			$db->query($sql);										// query untuk menjlankan variabel sql trsebu

		}
		?>

			
</body>
</html>
