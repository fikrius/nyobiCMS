    <title>Login</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/index.css'); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CDN JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    
  </head>

  <body>

	<ul class="nav justify-content-center fixed-top" style="background-color: black;">
		<li class="nav-item">
			<a class="nav-link" href="<?php echo site_url('index'); ?>">Biography</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo site_url('posts'); ?>">Posts</a>
		</li>
		<li class="nav-item">
		 	<a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="https://www.instagram.com/fkrahmd/"><img src="<?php echo base_url('assets/img/ig.png'); ?>"></a>
		</li>
	</ul>

	<!-- Awal section login -->
	<section class="login" style="min-height: 600px;">
		<!-- Awal div container -->
		<div class="container">
			<!-- Awal div row -->
			<div class="row">
				<!-- Awal col-md-4 -->
				<div class="col-md-4 offset-md-4">
					<!-- Awal form -->
					<?php echo form_open('auth/login', 'class="loginForm" id="loginForm"'); ?>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control" id="username" required>
							<?php if($this->session->flashdata("gagal") == "username"){ ?>
								<div class="alert alert-danger" role="alert">
									Username salah!
								</div>
							<?php } ?>
						</div>
						<div class="form-group">
							<div class="input-group">
								<label class="input-group" for="password">Password</label>
								<input type="password" name="password" id="password" class="input-group form-control" id="password" required>
								<div class="input-group-prepend">
									<span id="toggle_password" class="input-group-text"></span>
								</div>
								<?php if($this->session->flashdata("gagal") == "password"){ ?>
									<div class="alert alert-danger" role="alert">
										Password salah!
									</div>
								<?php } ?>
								</div>
						</div>
						<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
					</form>
				 	<!-- Akhir form -->
				</div>
				<!-- Akhir col-md-4 -->
			</div>
			<!-- Akhir div row -->
		</div>
		<!-- Akhir div container -->
	</section>
	<!-- Akhir section login -->

	<!-- Toggle password -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/toggle_password.js'); ?>"></script>
