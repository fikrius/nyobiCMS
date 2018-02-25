	<title>Posts</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/template/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/template/css/agency.css'); ?>" rel="stylesheet">


</head>
<body >

	<ul class="nav justify-content-center fixed-top" style="background-color: black;">
		<li class="nav-item">
			<a class="nav-link" href="<?php echo site_url('index'); ?>">Biography</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="<?php echo site_url('posts'); ?>">Posts</a>
		</li>
		<li class="nav-item">
		 	<a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="https://www.instagram.com/fkrahmd/"><img src="<?php echo base_url('assets/img/ig.png'); ?>"></a>
		</li>
	</ul>

	<!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
          	<h2>Simply Elegant</h2>
            <h3 class="section-subheading text-muted">No comments, click <a href="<?php echo site_url('contact'); ?>"><span>here</span></a> for some complains </h3>
          </div>
        </div>
        <div class="row mb-5">
        	<div class="col-lg-12">
        		<form>
	            	<div class="input-group">
				        <div class="input-group-prepend">
				          <input style="background-color: #AE8913; color: white; height: 3rem; width: 5rem;" type="submit" name="btnCari" id="btnCari" class="input-group-text btn btn-lg" value="Search">
				        </div>
				        <input type="text" class="form-control" id="cari" placeholder="Search post" aria-describedby="validationTooltipUsernamePrepend">
                <div class="input-group-prepend">
                  <select class="custom-select" name="pilihKategori" id="pilihKategori" style="height: 3rem;">
                    <option selected>Category</option>
                    <option value="stories">Stories</option>
                    <option value="sajak">Sajak</option>
                    <option value="renungan">Renungan</option>
                    <option value="maiyah">Maiyah</option>
                    <option value="how to">How To</option>
                  </select>
                </div>
				     </div>
	            </form>
        	</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <h3>Read More</h3>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/template/img/portfolio/01-thumbnail.jpg'); ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Judul</h4>
              <p class="text-muted">January, 12th 2018 - 12:35:10</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/template/img/portfolio/01-thumbnail.jpg'); ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Explore</h4>
              <p class="text-muted">Graphic Design</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/template/img/portfolio/01-thumbnail.jpg'); ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Finish</h4>
              <p class="text-muted">Identity</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/template/img/portfolio/01-thumbnail.jpg'); ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Lines</h4>
              <p class="text-muted">Branding</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/template/img/portfolio/01-thumbnail.jpg'); ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Southwest</h4>
              <p class="text-muted">Website Design</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/template/img/portfolio/01-thumbnail.jpg'); ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Window</h4>
              <p class="text-muted">Photography</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="section-heading text-uppercase">Coming Soon</h1>
            <h3 class="section-subheading text-muted">This project is under construction</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo base_url('assets/template/img/portfolio/01-full.jpg'); ?>" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button style="background-color: #AE8913; color: white;" class="btn btn-lg" data-dismiss="modal" type="button">
                    <i style="color: white;" class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/template/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/template/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
