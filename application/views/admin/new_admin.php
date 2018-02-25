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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata("nama"); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata("nama"); ?> - <?php echo $this->session->userdata("profesi"); ?>
                  <small>Member since <?php echo $this->session->userdata("tanggal_dibuat"); ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
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
        <small>Create New Admin</small>
      </h1>
    </section>

    <!-- Section create new admin -->
    <section class="form_new_admin" style="min-height: 60rem; margin-top: 3rem;">
      <!-- div container -->
      <div class="container">
        <!-- div row -->
        <div class="row">
          <!-- div col - md- 6 -->
          <div class="col-md-6">
            <?php echo form_open_multipart("admin/create_new_admin", "class='create_new_admin' id='create_new_admin'"); ?>
              <div class="form-group">
                <label for="nama">Name<sup class="text-danger">*</sup></label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Your Name..." required>
              </div>
              <div class="form-group">
                <label for="username">Username <sup class="text-danger">*</sup></label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Your Username..." required>
              </div>
              <div class="form-group">
                <label for="password">Password <sup class="text-danger">*</sup></label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Your Password..." required>
              </div>
              <div class="form-group">
                <label for="konfirmasi_password">Password Confirmation<sup class="text-danger">*</sup></label>
                <input type="password" name="konfirmasi_password" id="konfirmasi_password" class="form-control" placeholder="Password Confirmation..." required>
              </div>
              <div class="form-group">
                <label for="profesi">Profession <sup class="text-danger">*</sup></label>
                <input type="text" name="profesi" id="profesi" class="form-control" placeholder="Your Profession..." required>
              </div>
              <div class="form-group">
                <label for="foto_profil">Profile Photo</label>
                <input type="file" name="foto_profil" id="foto_profil" size="20" required>
              </div>
              <div class="form-group">
                <input type="hidden" name="tanggal_dibuat" id="tanggal_dibuat" class="form-control">
              </div>
              <input type="submit" name="submit" id="submit" onclick="ambilTanggal()" class="btn btn-primary" value="Create Admin">
            </form>
          </div> 

          <!-- Notif upload -->
          <div class="alert alert-danger">
            asdasd
          </div>
          <!-- Notif upload -->

          <!-- div col -md -6 -->
        </div>
        <!-- div row -->
      </div>
      <!-- div container -->
    </section>
    <!-- /section create new admin -->

  </div>
  <!-- /.content-wrapper -->



  <script>
    
    $(document).ready(function(){
      $('#create_new_admin').on('submit', function(e){
        e.preventDefault();
        if($('#foto_profil').val() == '' ){
          alert("Please a file!");
        }else{
          $.ajax({
            url:"<?php echo base_url('admin/send_post'); ?>",
            method: "POST",
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success:function(data){

            }
          });
        }
      });
    });

    function ambilTanggal(){
      var now = new Date();
      // var dt = now.getDate();

      var format = now.getFullYear() + "-" + now.getMonth() + 1 + "-" + now.getDate() + " " + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds(); 

      var x = document.getElementById("tanggal_dibuat").value = format;
    }

  </script>

