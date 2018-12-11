<!DOCTYPE html>
<html>
<head>
<title>Chill Trip | Login</title>
<link href="<?php echo base_url() ?>assets/bootstrap-4.1.3-dist/css/bootstrap-grid.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/gaya.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/footer.css" rel ="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/form.css" rel ="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/checkbox.css" rel ="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body class="loginpage">
<div class="container-fluid" style="padding:0;margin:0">
	<div class=" kepala row">
		<a href="<?php echo site_url('home') ?>"><img class="logo" src="<?php echo base_url() ?>assets/img/logo/chillTrip_logo.png"></a>
	</div>
	<div class="row">
		<div class="col-sm-1 col-xs-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-10 col-xs-10 col-md-10 col-lg-10">
			<div class="form-content row">
			<div id="gambar-logo" class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
				<h1 style="text-align:center;margin:0;margin-top:12px"> The World is a book</h1>
				<img src="<?php echo base_url() ?>assets/img/buku.png" style="width:300px;height:250px">
				<p style="text-align:center">and those who do not travel read only one page. <br>-Augustine of Hippo</p>
			</div>
			<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6" style="background-color:white;">
				<div class="form-login">
					<h2 style="text-align:center;margin-bottom:2px">Sign in</h2>
					<p style="text-align:center;font-size:12px">Don't have an account? <a class="a-decor" href="<?php echo site_url('register') ?>">Register</a></p>
					<input type="text" placeholder="Username" name="username" size="50"><br>
					<input type="password" placeholder="Password" name="pw" size="50">
					<div class="row">
						<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6"><label class="rememberme box">Remember me<input type="checkbox" checked="checked"><span class="checkmark"></span></label></div>
						<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6"><a class="a-decor" style="margin-top:24px;font-size:12px">Forget your password?</a></div>
					</div>
					<input type="submit" name="submit" value="Sign in">
					<p style="text-align:center;color:grey">or login with</p>
					<div class="row">
						<div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"></div>
						<div class="col-sm-8 col-xs-8 col-md-8 col-lg-8">
						<div class="row">
							<div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
								<p class="fab fa-facebook" style="display:block;font-size:40px;color:#3b5998;text-align:center;margin-top:0;margin-bottom:0;"></p>
							</div>
							<div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
								<p class="fab fa-google" style="display:block;font-size:40px;color:#dd4b39;text-align:center;margin-top:0;margin-bottom:0"></p>
							</div>
							<div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
								<p class="fab fa-twitter" style="display:block;font-size:40px;color:#10dffd;text-align:center;margin-top:0;margin-bottom:25px"></p>
							</div>
						</div>
						</div>
						<div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"></div>
					</div>
					
				</div>
			</div>
			</div>
		</div>
		<div class="col-sm-1 col-xs-1 col-md-1 col-lg-1"></div>
	</div>
	<div class="row" style="margin:0">
		<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12" style="padding:0">
			<footer class="footer-mini" style=""><span style="color:grey">&copy; 2018, Chill Trip</span> </footer>
		</div>
	</div>
</div>
</body>
</html>