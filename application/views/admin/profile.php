<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('admin/index'); ?>" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?php echo $jumlah_pesan; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <?php echo $jumlah_pesan; ?> messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <?php foreach($pesan_limit->result() as $row){ ?>
                    <li><!-- start message -->
                      <a href="<?php echo site_url().'admin/pesan/'.$row->id_kontak; ?>">
                        <h4>
                          <?php echo $row->nama; ?>
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p><?php echo $row->pesan; ?></p>
                      </a>
                    </li>
                    <!-- end message -->
                  <?php } ?>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo site_url('admin/feedback'); ?>">See All Messages</a></li>
            </ul>
          </li>
    
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <?php  
              $gambar = $this->session->userdata("foto_profil");
              if($gambar !== NULL){
                $gambar = $this->session->userdata("foto_profil");
              }

              $gambar = "none.png";
            ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('upload/'.$gambar); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata("nama"); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('upload/'.$gambar); ?>" class="rounded" alt="User Image">
                <p>
                  <?php echo $this->session->userdata("nama"); ?> - <?php echo $this->session->userdata("profesi"); ?>
                  <small>Member since <?php echo $this->session->userdata("tanggal_dibuat"); ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url('admin/profile'); ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('admin/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Feedback</small>
      </h1>
    </section>

    <?php foreach($profile_data->result() as $row){ ?>
    <!-- profil -->
    <section class="profile" style="margin-top: 4rem;">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <form method="post" action="edit_profile">
              <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $row->nama; ?>" disabled>
              </div>
              <div class="form-group">
                <label for="username">Username :</label>
                <input type="text" name="username" id="username" class="form-control" value="<?php echo $row->username; ?>" disabled>
              </div>
              <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" class="form-control" value="<?php echo $row->password; ?>" disabled>
              </div>
              <div class="form-group">
                <label for="profesi">Profesi :</label>
                <input type="text" name="profesi" id="profesi" class="form-control" value="<?php echo $row->profesi; ?>" disabled>
              </div>
              <div class="form-group">
                <!-- cek apakah gambar ada atau tidak (null atau tidak)-->
                <?php 
                  $gambar = $row->foto_profil;
                  if($gambar !== NULL){
                    $gambar = $row->foto_profil;
                  }

                  $gambar = "none.png";
                ?>
                <label for="foto_profil">Foto profil :</label>
                <input type="file" name="foto_profil" id="foto_profil" disabled>
                <span class="tampil-foto">
                  <img src="<?php echo base_url('upload/'.$gambar); ?>" class="rounded" style="width: 10rem; height: 10rem;">
                </span>
              </div>
              <div class="form-group">
                <label for="tanggal_edit">Tanggal edit :</label>
                <input type="text" name="tanggal_edit" id="tanggal_edit" class="form-control" value="<?php echo $row->tanggal_edit; ?>" disabled>
              </div>
              <div class="form-group">
                <label for="tanggal_dibuat">Tanggal dibuat :</label>
                <input type="text" name="tanggal_dibuat" id="tanggal_dibuat" class="form-control" value="<?php echo $row->tanggal_dibuat; ?>" disabled>
              </div>
              <input type="hidden" class="btn btn-success" id="edit" style="width: 10rem;" value="Edit">
              <input type="hidden" class="btn btn-success" id="cancel" style="width: 10rem;" value="Cancel">
              <input type="hidden" class="btn btn-primary" id="save" style="width: 10rem;" value="Save">
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- profil -->
    <?php } ?>
  </div>
  <!-- /.content-wrapper -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url('assets/datatables/js/jquery-3.2.1.min.js'); ?>"></script>
  <!-- Press the edit button -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/press_edit.js'); ?>"></script>