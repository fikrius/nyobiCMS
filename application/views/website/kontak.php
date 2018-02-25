    <title>Contact</title>

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
		 	<a class="nav-link active" href="<?php echo site_url('contact'); ?>">Contact</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="https://www.instagram.com/fkrahmd/"><img src="<?php echo base_url('assets/img/ig.png'); ?>"></a>
		</li>
	</ul>

	<section class="kontak" style="min-height: 600px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<h3 class="font-weight-light text-center mb-3">Contact Us</h3>
					<!-- form -->
					<?php echo form_open("website/send_feedback"); ?>
						<div class="form-group">
							<input class="form-control" type="text" id="nama" name="nama" placeholder="Your Name" required>
						</div>
						<div class="form-group">
							<input class="form-control" type="email" id="email" name="email" placeholder="Your Email Address" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="web" id="web" placeholder="Your Website (optional)">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="telpon" id="telpon" placeholder="Your Phone Number (optional)">
						</div>
						<div class="form-group">
							<textarea style="height: 130px;" class="form-control" name="pesan" id="pesan" placeholder="Your Message" required></textarea>
						</div>
						<div class="form-group">
							<input type="submit" style="background-color: #AE8913; color: white;" class="btn btn-lg" name="submit" value="Send Message">	
						</div>
						<!-- Notif sukses -->
						<?php if($this->session->flashdata("sukses") == "pesan sukses"){ ?>
							<div class="alert alert-success" role="alert">
								Your message has been submitted!
							</div>
						<?php } ?>
						<!-- Notif gagal -->
						<?php if($this->session->flashdata("gagal") == "pesan gagal"){ ?>
							<div class="alert alert-danger" role="alert">
								Your message has not been submitted!
							</div>
						<?php } ?>
					</form>
					<!-- Akhir form -->
				</div>
			</div>
		</div>
	</section>
