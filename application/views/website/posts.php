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
          <?php foreach($posts->result() as $row){ ?>
              <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                    </div>
                  </div>
                  <img class="img-fluid" src="<?php echo base_url('upload/'.$row->gambar); ?>" alt="">
                </a>
                <div class="portfolio-caption">
                  <a style="color: #293647; " href="<?php echo site_url('Website/read/'.$row->id_posts); ?>"><h4><?php echo $row->judul; ?></h4></a>
                  <p class="text-muted"><?php echo $row->tanggal; ?></p>
                </div>
              </div>
          <?php } ?>
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

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/template/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/template/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
