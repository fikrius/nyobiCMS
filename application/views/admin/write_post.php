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
        <small>Write Post</small>
      </h1>
    </section>

    <!-- section form -->
    <section class="form_post" style="min-height: 60rem; margin-top: 3rem;">
      <!-- container -->
      <div class="container">
        <!-- Row -->
        <div class="row">
          <!-- col -->
          <div class="col-md-10">
            <?php echo form_open_multipart("admin/send_post"); ?>
              <div class="form-group">
                <input type="text" name="judul" class="form-control" placeholder="Title" required>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <select name="kategori" class="form-control">
                      <option>Category</option>
                      <option value="Stories">Stories</option>
                      <option value="Sajak">Sajak</option>
                      <option value="Maiyah">Maiyah</option>
                      <option value="Renungan">Renungan</option>
                      <option value="How To">How To</option>
                    </select>
                  </div>
                </div>

                <!-- Tanggal upload -->
                <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d H:i:s'); ?>">
                <!-- Tanggal Upload -->

                <div class="col-md-2">
                  <div class="form-group">
                    <input type="text" name="uploader" class="form-control" value="<?php echo $this->session->userdata('nama'); ?>" readonly>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" name="tag" class="form-control" placeholder="Tags">
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <input type="file" name="userfile" size="20">
                </div>
              </div>
              <div class="form-group">
                <textarea name="isi" class="form-control" placeholder="Content" style="min-height: 40rem;"></textarea>
              </div>
              <input type="submit" name="submit" class="btn btn-primary" style="margin-bottom: 1rem;">
              <!-- Show error -->
              <?php if($this->session->flashdata("error") === "error"){ ?>
                <div class="alert alert-danger">
                  Data gagal diupload
                </div>
              <?php } ?>
              <!-- /Show error -->

              <!-- Show sukses -->
              <?php if($this->session->flashdata("sukses") === "sukses"){ ?>
                <div class="alert alert-success">
                  Data berhasil diupload
                </div>
              <?php } ?>
              <!-- /Show sukses -->
            </form>
          </div>
          <!-- /col -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </section>
    <!-- /section form -->
  </div>
  <!-- /.content-wrapper -->

