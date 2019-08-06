<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>One Nation One Data</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="./assets/img/government_logo.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="./assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="./assets/css/demo.css">
</head>
<style>
    .grad {
        background-image: linear-gradient(to bottom right, orange, white, green);
        opacity : 0.7;
    }
	/* .login-grad {
		background-image :url('ashok-chakra.jpg');
		background-size: cover;
		background-repeat: no-repeat;
	} */
    .login {
        width:30vw;
        /*height:80vh;*/
        margin-left:5vw;
        margin-top:7vh;
		/* opacity : 0.7; */
    }
    .logo {
		height: 18vh;
		width: 20vh;
		margin-right: 10px;
		margin-top: 10px;
		margin-left: 15px;
	}
    .left-box {
		height: 100vh;
		float: left;
	}	
	.right-box {
		height: 100vh;
		float: right;
		background-color: #f2f2f2;
	}
    .name {
		font-size: 1.2em;
		font-weight: bold;
	}
	.post {
		font-size: 1.1em;
		font-weight: bolder;
		color: #848383;
	}
	.person {
		height: 140px;
		width: 150px;
	}
</style>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 left-box">
                <div class="container field">
                    <div class="row">
                        <img class="ml-5" src="./assets/img/MHRD_logo.jpg" alt="">
                    </div>
                </div>
                <div class="container" style="width: 42vw">
						<div class="row">
							<div class="col-md-4">
								<img class="person" src="./assets/img/narendra_modi-1.png">
								<div style="padding: 5px 0px 0px 0px">
									<div class="name">Shri Narendra Modi</div>
									<div class="post">Honorable Prime Minister</div>
								</div>
							</div>
							<div class="col-md-4">
								<img class="person" src="./assets/img/mhrd_minister-1.png">
								<div style="padding: 5px 0px 0px 0px">
									<div class="name">Dr. Ramesh Pokhriyal 'Nishank'</div>
									<div class="post">Honorable Minister of Human Resource Development</div>
								</div>
							</div>
							<div class="col-md-4">
								<img class="person" src="./assets/img/SD_2.png">
								<div style="padding: 5px 0px 0px 0px">
									<div class="name">Shri Sanjay Shamrao Dhotre</div>
									<div class="post">Honorable Minister of State</div>
								</div>
							</div>
						</div>
					</div>
            </div>
            <div class="col-md-5 right-box grad">
                <div class="card login">
                    <div class="card-header"><h3 style="font-weight:bold;font-size:25px;margin-left:40%">Login</h3></div>
                    <div class="card-body">
						<form action="./src/auth.php" method="post">
							<div class="form-group">
								<h4 style="font-weight:bold">Login Type</h4>
                                <select name="login_type" id="" class="form-control">
                                    <option value="nodal officer">Nodal Officer</option>
                                    <option value="data user">Data User</option>
                                </select>
                            </div>
                            <div class="form-group">
								<h4 style="font-weight:bold">Username</h4>
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
								<h4 style="font-weight:bold">Password</h4>								
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <button class="btn btn-primary btn-sm mt-2 ml-3" name="login" type="submit">Login</button>
                        </form>
                        <div class="mt-3 ml-3">
                            <a href="./signup.php" style="color:red">New User ?</a>
                            <a href="#" class="ml-2" style="color:red">Forgot Password</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p>By clicking Login, you agree to our <a href="#" style="color:red">Terms & Conditions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>