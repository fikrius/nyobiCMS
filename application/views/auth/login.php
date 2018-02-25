    <title>Login</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/index.css'); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
    
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
							<label for="username">Username <sup class="text-danger">*</sup></label>
							<input type="text" name="username" class="form-control" id="username" required>
							<?php if($this->session->flashdata("gagal") == "username"){ ?>
								<div class="alert alert-danger" role="alert">
									Username salah!
								</div>
							<?php } ?>
						</div>
						<div class="form-group">
							<label for="password">Password <sup class="text-danger">*</sup></label>
							<input type="password" name="password" class="form-control" id="password" required>
							<?php if($this->session->flashdata("gagal") == "password"){ ?>
								<div class="alert alert-danger" role="alert">
									Password salah!
								</div>
							<?php } ?>
						</div>
						<input type="submit" name="submit" class="btn btn-primary" value="Submit">
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