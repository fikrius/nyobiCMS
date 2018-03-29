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

	<section class="header-post">
    <div class="container">
     <div class="row">
       <div class="col-md-6">
         <?php foreach ($read->result() as $row) { ?>
            <h4><?php echo $row->judul; ?></h4>
            <p>Posted by <?php echo $row->uploader; ?></p>
            <span><?php echo $row->tanggal; ?></span>
            <img style="width: 50rem;" src="<?php echo base_url('upload/'.$row->gambar); ?>">
            <p style="width: 50rem; text-align: justify-all;"><?php echo $row->isi; ?></p>
         <?php } ?>
       </div>
     </div> 
    </div> 
  </section>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/template/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/template/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
