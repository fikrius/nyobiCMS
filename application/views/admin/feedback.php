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
        <small>Feedback</small>
      </h1>
    </section>

    <!-- datatabel -->
    <section class="feedback" style="margin-top: 2rem; margin-left: 2rem;">
      <a class="btn btn-danger" style="margin-right: 3rem; margin-bottom: 2rem;" href="">Delete Selected</a>
      <a class="btn btn-danger" style="margin-right: 3rem; margin-bottom: 2rem;" href="">Delete All</a>
      <!-- datatables -->
      <table class="table table-hover" id="tableFeedback">
        <thead>
          
          <th>Check</th>
          <th>No</th>
          <th>Name</th>
          <th>Message</th>
          <th>Message Time</th>
          <th class="text-center">Action</th>
        
        </thead>

        <tbody>
          <?php $no = 1; ?>
          <?php foreach($get_feedback->result() as $row){ ?>
            <tr>
              <th><input type="checkbox" name="checkbox"></th>
              <td><?php echo $no; ?></td>
              <td><?php echo $row->nama; ?></td>
              <td><?php echo $row->pesan; ?></td>
              <td><?php echo $row->waktu_pesan; ?></td>
              <td><button class="btn btn-primary" data-toggle="modal" data-target="#details">Details</button> <button class="btn btn-danger" onclick="return confirm('Do you want to delete this message?')">Delete</button></td>
            </tr>
            <?php $no++; ?>
          <?php } ?>
        </tbody>
      </table>
      <!-- /datatables -->
    </section>
    <!-- /datatabel -->

  </div>
  <!-- /.content-wrapper -->

  <!-- Modal -->
  <div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="details">Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        
        <table class="table table-hover">
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $row->nama; ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $row->email; ?></td>
          </tr>
          <tr>
            <td>Website</td>
            <td>:</td>
            <td><?php echo $row->website; ?></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td>:</td>
            <td><?php echo $row->telepon; ?></td>
          </tr>
          <tr>
            <td>Message</td>
            <td>:</td>
            <td><?php echo $row->pesan; ?></td>
          </tr>
          <tr>
            <td>Time Message</td>
            <td>:</td>
            <td><?php echo $row->waktu_pesan; ?></td>
          </tr>
        </table>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url('assets/datatables/js/jquery-3.2.1.min.js'); ?>"></script>

  <script>
    $(document).ready(function(){
        $('#tableFeedback').DataTable();
    });
  </script>

  <!-- Include dataTables  -->
  <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js'); ?>"></script>

    